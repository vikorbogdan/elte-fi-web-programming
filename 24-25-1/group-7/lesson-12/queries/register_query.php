<?php

// 1. Read data from the form
include_once "../utilities.php";
function on_success($name, $password, $reindeers, $age)
{
    $santas = read_json();

    $new_santa = [
        "name" => $name,
        "password" => $password,
        "reindeers" => $reindeers,
        "age" => $age
    ];

    $santas[] = $new_santa;
    file_put_contents("../santas.json", json_encode($santas, JSON_PRETTY_PRINT));
    redirect("../login.php?success=true");
}

function on_error($msg)
{
    session_start();
    $_SESSION["error_msg_register"] = $msg;
    redirect("../register.php");
}

$name = $_POST["name"];
$password = $_POST["password"];
$password_confirmation = $_POST["password_confirmation"];
$reindeers = $_POST["reindeers"]; // Number of reindeers
$age = $_POST["age"];


//  Add validation of data (Form validation)
// TODO: Check if user exists

$error_message = "";
if (isset($name) && trim($name) != "") {
    if (isset($password) && trim($password) != "" && isset($password_confirmation) && trim($password_confirmation) != "") {
        if ($password == $password_confirmation) {
            on_success($name, $password, $reindeers, $age);
        } else {
            $error_message = "Passwords don't match";
            on_error($error_message);
        }
    } else {
        $error_message = "Provide the passwords";
        on_error($error_message);
    }
} else {
    $error_message = "Provide a name";
    on_error($error_message);
}
