<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            gap: 10px;
        }

        #error {
            color: red;
        }
    </style>
</head>

<body>
    <?php include_once "layout/navigaton.php" ?>
    <h1>🎅 Register as a Santa</h1>
    <form action="queries/register_query.php" method="POST">
        <label for="username">Username</label>
        <input placeholder="santa_hohoho" name="username" type="text">
        <label for="password">Password</label>
        <input placeholder="" name="password" type="password">
        <label for="password_again">Password again</label>
        <input placeholder="" name="password_again" type="password">
        <label for="reindeer">How many reindeers do you have? 🦌</label>
        <input placeholder="10" name="reindeer" type="number">
        <input type="submit" value="Sign up! 🎅">
        <?php if (isset($_SESSION["registration_error_msg"])) : ?>
            <div id="error"><?= $_SESSION["registration_error_msg"] ?></div>
        <?php endif; ?>
    </form>
</body>

</html>