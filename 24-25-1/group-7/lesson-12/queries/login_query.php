<?php
include_once "../utilities.php";
session_start();
$santas = read_json();

$santa_exists = santa_exists($_POST["name"]);

$password_correct = false;
$i = 0;
if ($santa_exists) {
    while (!$password_correct && $i < count($santas)) {
        $password_correct = $santas[$i]["name"] == $_POST["name"] && $santas[$i]["password"] == $_POST["password"];
        $i++;
    }
    if ($password_correct) {
        $_SESSION["name"] = $_POST["name"];
        redirect("../index.php");
    } else {
        $error_message = "Incorrect password!";
        redirect("../login.php?error=" . $error_message);
    }
} else {
    $error_message = "No such user.";
    redirect("../login.php?error=" . $error_message);
}
