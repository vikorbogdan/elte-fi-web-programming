<?php

$santas = json_decode(file_get_contents("users.json"), true);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find your Santa!</title>
    <style>
        #santaContainer {
            display: flex;
            flex-direction: column;
            gap: 24px;
            list-style: none;

        }

        #santaContainer li {
            background-color: aliceblue;
            color: crimson;
            padding: 10px;
            border-radius: 20px;
            width: 600px;
        }
    </style>
</head>

<body>
    <?php include_once "layout/navigaton.php" ?>
    <h1>List of Santas:</h1>
    <ul id="santaContainer">
        <?php foreach ($santas as $santa): ?>
            <li>
                <h3><?= $santa["username"] ?></h3>
                <p>Number of reindeers: <?= $santa["number_of_deers"] ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>