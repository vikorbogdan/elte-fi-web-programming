<?php

// On success:
// Redirect back to the login page, Successful registration message

// On error:
// Redirect back to the register page, and show form errors (Validate input)


$username = $_POST["username"];
$password = $_POST["password"];
$reindeer = $_POST["reindeer"];

$santas = json_decode(
    file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/users.json"),
    true
);

$new_santa = [
    "username" => $username,
    "password" => $password,
    "number_of_deers" => (int)$reindeer
];

$santas[] = $new_santa;

file_put_contents(
    $_SERVER["DOCUMENT_ROOT"] . "/users.json",
    json_encode($santas, JSON_PRETTY_PRINT)
);
