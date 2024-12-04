<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
    <form method="POST" action="queries/login_query.php">
        <label for="name">What's your name?</label>
        <input type="text" name="name">
        <label for="name">Password</label>
        <input type="text" name="password">
        <input type="submit" value="Let me log in!">
    </form>
</body>

</html>