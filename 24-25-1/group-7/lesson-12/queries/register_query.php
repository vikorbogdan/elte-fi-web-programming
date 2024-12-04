<?php

// 1. Read data from the form

$name = $_POST["name"];
$password = $_POST["password"];
$password_confirmation = $_POST["password_confirmation"];
$reindeers = $_POST["reindeers"]; // Number of reindeers
$age = $_POST["age"];


//  Add validation of data (Form validation)
// TODO: Check if user exists
if ($password != $password_confirmation) {
    // If not successful, redirect back to registration page and stop execution
    header("Location: ../register.php?error_code=1");
    exit();
}



// 2. Open our JSON Database as an associative array

$santas = json_decode(file_get_contents("../santas.json"), true);

// 3. Create a new record

$new_santa = [
    "name" => $name,
    "password" => $password,
    "reindeers" => $reindeers,
    "age" => $age
];


// 5. Add new record to the array

$santas[] = $new_santa;



// 6. Write the new array back to the JSON

file_put_contents("../santas.json", json_encode($santas, JSON_PRETTY_PRINT));

// 7. Redirect user to log in page (WIP)

header("Location: ../login.php");
