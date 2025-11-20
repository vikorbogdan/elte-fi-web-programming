<?php

// Contact application

// Name -> Mandatory string
// Email -> Mandatory, and should be in correct format
// Phone number -> Mandatory, starts with +36 + 9-digits
// neptun code -> Mandatory, length is 6 characters
// Type of relation

// 1. Create a form
// 2. Add form validation (making sure the form keeps the state)
// 3. Store the submitted values in a file

$name = "";
$email = "";
$phone = "";
$neptun = "";
$type = "";

// Error associative array

$errors = [
    "name" => "",
    "email" => "",
    "phone" => "",
    "neptun" => ""
];

// 1. Open file 
// 2. json_decode -> Convert the string from the file into an array
$file_contents = json_decode(file_get_contents("data.json"), true);


var_dump($file_contents);




if (isset($_GET["name"]) && trim($_GET["name"]) != "") {
    $name = $_GET["name"];
} else {
    $errors["name"] = "Please provide a name!";
}

if (isset($_GET["email"]) && trim($_GET["name"]) != "") {
    if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_GET["email"];
    } else {
        $errors["email"] = "Please check your e-mail's dictation.";
    }
} else {
    $errors["email"] = "Please provide an email!";
}


if (isset($_GET["phone"]) && trim($_GET["phone"]) != "") {
    if (preg_match('/^(\+36)\d{9}/', $_GET["phone"])) {
        $phone = $_GET["phone"];
    } else {
        $errors["phone"] = "Please provide your phone number in a correct format! (Starts with +36, and ends with 7 digits)";
    }
} else {
    $errors["phone"] = "Please provide a phone number!";
}

if (isset($_GET["neptun"]) && trim($_GET["neptun"]) != "") {
    if (strlen($_GET["neptun"]) == 6) {
        $neptun = $_GET["neptun"];
    } else {
        $errors["neptun"] = "Please provide a correct neptun code! (6 chars long)";
    }
} else {
    $errors["neptun"] = "Please provide a name!";
}

$is_error = false;

foreach ($errors as $error) {
    if ($error != "") {
        $is_error = true;
    }
}

if (!$is_error) {
    $new_contact = [
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "neptun" => $neptun
    ];
    $file_contents[] = $new_contact;
    $encoded = json_encode($file_contents, JSON_PRETTY_PRINT);
    file_put_contents("data.json", $encoded);
}



// var_dump($errors);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>

<body>
    <h1>Contacts</h1>
    <ul>

    </ul>
    <form>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br />
        <label for="email">E-mail:</label>
        <input type="text" name="email" id="email">
        <br />
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone">
        <br />
        <label for="neptun">Neptun code:</label>
        <input type="text" name="neptun" id="neptun">
        <br />
        <label for="type">Type:</label>
        <select id="type" name="type">
            <option>Personal</option>
            <option>Work</option>
            <option>Home</option>
        </select>
        <br />
        <h2>Gender</h2>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="rather_not_say" name="gender" value="rather_not_say">
        <label for="rather_not_say">Rather not say</label>
        <br />
        <input type="submit" value="Add Contact">

    </form>
</body>

</html>