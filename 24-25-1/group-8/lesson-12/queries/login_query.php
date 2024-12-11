<?php
session_start();
include_once "../util.php";

$santas = read_json();
$usernames = array_column($santas, "username");
$santa_exists = array_search($_POST["username"], $usernames);

if ($santa_exists) {
    $passwords_match = false;
    $i = 0;
    while (!$passwords_match && $i < count($santas)) {
        $passwords_match = $santas[$i]["password"] == $_POST["password"];
        $i++;
    }
    if ($passwords_match) {
        // If login was successful, put username into session
        $_SESSION["user"] = $_POST["username"];
        redirect("../index.php");
    } else {
        $error_message = "Wrong password!";
    }
} else {
    $error_message = "Wrong username!";
}
