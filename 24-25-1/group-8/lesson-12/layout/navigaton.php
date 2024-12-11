<?php
session_start();

// If the user has a logged in session, then show Log Out instead of Register and Log In options.
?>

<style>
    #navigation ul {
        width: 70vw;
        margin: 0px auto;
        height: 20px;
        display: flex;
        list-style: none;
        background-color: firebrick;
        color: white;
        gap: 10px;
        padding: 2px 3px;
    }

    #navigation a:hover {
        text-decoration: underline;
        color: yellow;
    }

    #navigation a {
        color: white;
        text-decoration: none;
    }
</style>
<header id="navigation">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if (!isset($_SESSION["user"])): ?>
                <li style="margin-left: auto"><a href="register.php">Register</a></li>
                <li><a href="login.php">Log in</a></li>
            <?php else: ?>
                <li style="margin-left: auto">Logged in as: <?= $_SESSION["user"] ?></li>
                <li><a href="./queries/logout.php">Log out</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>