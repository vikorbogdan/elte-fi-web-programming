<?php
$error_code = null;
if (isset($_GET["error_code"])) {
    $error_code = $_GET["error_code"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        form {
            margin: 0px auto;
            display: flex;
            flex-direction: column;
            width: 30vw;
            padding: 10px;
            background-color: azure;
            border: 1px solid navy;
            border-radius: 20px;
            gap: 10px
        }

        input[type="submit"] {
            width: fit-content;
            margin-left: auto;
        }
    </style>
</head>

<body>
    <?php include_once "layout/navigate.php" ?>

    <h1>
        Sign up as a Santa! 🎅
    </h1>
    <?php if ($error_code == 1): ?>
        <div style="color: red;">
            Password Mismatch!
        </div>
    <?php endif ?>
    <form method="POST" action="queries/register_query.php">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <label for="password_confirmation">Password Again</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <label for="reindeers">Number of Reindeers 🦌</label>
        <input type="number" name="reindeers" id="reindeers">
        <label for="age">How old are you Santa?</label>
        <input type="number" name="age" id="age">
        <input type="submit" value="Sign me up! 🎁">
    </form>
</body>

</html>