<?php
// Sending the form /////////////////////////////
$errors = [
    "name" => "",
    "email" => "",
    "phone" => ""
];

// if correct values, put them inside these variables:
$name = "";
$email = "";
$phone = "";




// Name is required
if (isset($_GET["name"]) && trim($_GET["name"]) != "") {
    $name = $_GET["name"];
} else {
    $errors["name"] = "You need to provide a name!";
}

// E-mail should be properly formatted
if (isset($_GET["email"])) {
    if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_GET["email"];
    } else {
        $errors["email"] = "Wrong e-mail format!";
    }
}

// Phone number is required, starts with +36, and then 9 other digits

if (isset($_GET["phone"]) && trim($_GET["phone"]) != "") {
    if (preg_match('/^(\+36)\d{9}/', $_GET["phone"])) {
        $phone = $_GET["phone"];
    } else {
        $errors["phone"] = "Wrong phone number format!";
    }
} else {
    $errors["phone"] = "You need to provide a phone number!";
}

$is_sent = isset($_GET["submitted"]);
$is_error = false;
foreach ($errors as $error) {
    if ($error != "") {
        $is_error = true;
    }
}
// Import data from JSON /////////////////////////////
$input_data = json_decode(file_get_contents("data.json"), true);


// Write data to JSON /////////////////////////////
if ($is_sent && !$is_error) {

    $new_element = [
        "name" => $name,
        "email" => $email,
        "phone" => $phone
    ];

    $input_data[] = $new_element; // array_push($input_data, $new_element);

    $encoded = json_encode($input_data, JSON_PRETTY_PRINT);

    file_put_contents("data.json", $encoded);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <style>
        body {
            font-size: 1.4em;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            width: 400px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 15px;
        }

        form div label {
            display: block;
        }

        button {
            width: fit-content;
            font-size: 1.2em;
            margin-left: auto;
        }

        .error {
            color: red;
            font-weight: bold;
        }

        #contactContainer {
            width: 100%;
            flex-wrap: wrap;
            margin-top: 20px;
            display: flex;
            gap: 20px;
        }

        .contactCard {
            border: 2px solid orange;
            padding: 10px
        }
    </style>
</head>

<body>
    <header>
        <h1>Contacts</h1>
    </header>
    <main>
        <form id="contactForm">
            <div>
                <label for="name">Name</label>
                <input type="text" value="<?= $errors["name"] != "" ? "" : ($_GET["name"] ?? "") ?>" name="name" id="name">
                <div class="error"><?= $is_sent ? $errors["name"] : "" ?></div>
            </div>
            <div>
                <label for="email">E-mail address</label>
                <input type="text" value="<?= $errors["email"] != "" ? "" : ($_GET["email"] ?? "") ?>" name="email" id="email">
                <div class="error"><?= $is_sent ? $errors["email"] : "" ?></div>
            </div>
            <div>
                <label for="phone">Phone number</label>
                <input type="text" value="<?= $errors["phone"] != "" ? "" : ($_GET["phone"] ?? "") ?>" name="phone" id="phone">
                <div class="error"><?= $is_sent ? $errors["phone"]  : "" ?></div>
            </div>
            <input type="text" name="submitted" value="true" hidden>
            <button type="submit">Add Contact</button>
        </form>
        <div id="contactContainer">
            <?php foreach ($input_data as $contact): ?>
                <div class="contactCard">
                    <h3 class="name"><?= $contact["name"] ?></h3>
                    <p class="email"><?= $contact["email"] ?></p>
                    <p class="phone"><?= $contact["phone"] ?></p>
                </div>
            <?php endforeach ?>
        </div>
    </main>
</body>

</html>