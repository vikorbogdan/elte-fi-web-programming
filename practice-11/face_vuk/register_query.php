<?php

$username = $_POST["username"];
$password = $_POST["password"];

session_start();

// 1. Open the file and read into an array
$users = json_decode(file_get_contents("users.json"));
// 2. Append the new user data to the users in the file

$new_user = [
    "username" => $username,
    "password" => $password
];
if (strlen($username) < 3) {
    header("Location: register.php");
    $_SESSION["error"] = "Username is too short!";
} else {

    $users[] = $new_user;

    // 3. Write this new array back to the file

    file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT));
    // 4. Redirect the user to the login page
    header("Location: login.php");
}
