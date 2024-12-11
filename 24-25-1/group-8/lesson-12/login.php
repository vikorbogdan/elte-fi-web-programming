<?php
// Check if the login data is correct (login_query.php)

// Start a user session

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        #success {
            background-color: darkseagreen;
            border: 2px solid green;
            border-radius: 15px;
            padding: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            gap: 10px;
        }
    </style>
</head>

<body>
    <?php include_once "layout/navigaton.php" ?>
    <?php if (isset($_GET["success"])): ?>
        <div id="success">
            Successful login!
        </div>
    <?php endif; ?>
    <form action="queries/login_query.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" />
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" />
        <input type="submit" value="Log in! 🎅">
    </form>
</body>

</html>