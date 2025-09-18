<?php
session_start();
?>

<style>
    nav ul {
        margin: 0px auto;
        width: 80vw;
        background-color: darkred;
        color: white;
        gap: 10px;
        padding: 10px;
        list-style: none;
        display: flex;
    }

    a {
        color: white;
    }
</style>

<nav id="navigation">
    <ul>
        <li><a href="index.php">Home</a></li>
        <?php if (!isset($_SESSION["name"])): ?>
            <li style="margin-left: auto"><a href="login.php">Log In</a></li>
            <li><a href="register.php">Register</a></li>
        <?php else: ?>
            <li style="margin-left: auto">You are logged in as <b> <?= $_SESSION["name"] ?></b></li>
            <li><a href="logout.php">Log Out</a></li>

        <?php endif; ?>
    </ul>
</nav>