<?php
session_start();
include_once "../util.php";
function on_success($username, $password, $reindeer)
{
    $santas = read_json();

    $new_santa = [
        "username" => $username,
        "password" => $password,
        "number_of_deers" => (int)$reindeer
    ];

    $santas[] = $new_santa;

    write_json($santas);
    redirect("../login.php?success=true");
}

function on_error($message)
{
    $_SESSION["registration_error_msg"] = $message;
    redirect("../register.php");
}


$username = $_POST["username"];
$password = $_POST["password"];
$password_again = $_POST["password_again"];
$reindeer = $_POST["reindeer"];

$error_message = "";

if (isset($username) && trim($username) != "") {
    if (isset($password) && trim($password) != "" && isset($password_again) && trim($password_again) != "") {
        if ($password == $password_again) {
            on_success($username, $password, $reindeer);
        } else {
            $error_message = "Passwords don't match.";
            on_error($error_message);
        }
    } else {
        $error_message = "Please provide a password, and password again.";
        on_error($error_message);
    }
} else {
    $error_message = "Please provide a username";
    on_error($error_message);
}
