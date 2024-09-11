<?php
session_start();
$error = "";
if (isset($_SESSION["error"])) {
    $error = $_SESSION["error"];
    unset($_SESSION["error"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include_once "navigation.php" ?>
    <form action="register_query.php" method="post">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" value="Register new user">
    </form>
    <ul style="color: red">
        <?php if ($error != "") : ?>
            <li>
                <?= $error ?>
            </li>
        <?php endif ?>
    </ul>
</body>

</html>