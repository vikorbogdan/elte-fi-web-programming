<?php


$errors = [
    "name" => "",
    "email" => "",
    "phone" => ""
];

$name = "";
$email = "";
$phone = "";

$isSubmitted = isset($_GET["isSubmitted"]);

if (isset($_GET["name"]) && trim($_GET["name"] != "")) {
    $name = $_GET["name"];
} else {
    $errors["name"] = "The name field should not be empty!";
}

// Email is required and should be in e-mail format (@, .com)

if (isset($_GET["email"]) && trim($_GET["email"] != "")) {
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    if (preg_match($regex, $_GET["email"])) {
        $email = $_GET["email"];
    } else {
        $errors["email"] = "The e-mail is in wrong format!";
    }
} else {
    $errors["email"] = "The e-mail field should not be empty!";
}

// Phone number is required (also check format?)

if (isset($_GET["phone"]) && trim($_GET["phone"] != "")) {

    $regex = '/^(\+36)\d{9}/';

    if (preg_match($regex, $_GET["phone"])) {
        $phone = $_GET["phone"];
    } else {
        $errors["phone"] = "The phone number is in wrong format!";
    }
} else {
    $errors["phone"] = "The phone number field should not be empty!";
}

$isError = false;

foreach ($errors as $error) {
    if ($error != "") {
        $isError = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <style>
        main {
            margin: 0px auto;
        }

        h1 {
            display: block;
            margin: 0px auto;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin: 0px auto;
            padding: 20px;
            border-radius: 10px;
            -webkit-box-shadow: 10px 10px 45px -17px rgba(0, 0, 0, 0.37);
            -moz-box-shadow: 10px 10px 45px -17px rgba(0, 0, 0, 0.37);
            box-shadow: 10px 10px 45px -17px rgba(0, 0, 0, 0.37);
            max-width: 300px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        form button {
            width: fit-content;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Contacts</h1>
    <main>
        <form>
            <label for="name">Name</label>
            <input type="text" value="<?= $errors["name"] != "" ? "" : ($_GET["name"] ?? "") ?>" name="name" id="name" />
            <div class="error"><?= $isSubmitted ? $errors["name"] : "" ?></div>
            <label for="email">E-mail</label>
            <input type="text" value="<?= $errors["email"] != "" ? "" : ($_GET["email"] ?? "") ?>" name="email" id="email" />
            <div class="error"><?= $isSubmitted ? $errors["email"] : "" ?></div>
            <label for="phone">Phone number</label>
            <input type="text" value="<?= $_GET["phone"] ?? "" ?>" name="phone" id="phone" />
            <div class="error"><?= $isSubmitted ? $errors["phone"] : "" ?></div>
            <input type="text" name="isSubmitted" value="true" hidden>
            <button type="submit">Add Contact</button>
        </form>
        <div id="contactsContainer">
            <?php if (!$isError): ?>
                <div class="contact">
                    <h3><?= $name ?></h3>
                    <p><?= $email ?></p>
                    <p><?= $phone ?></p>
                </div>
            <?php endif ?>
        </div>
    </main>
</body>

</html>