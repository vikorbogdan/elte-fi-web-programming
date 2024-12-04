<?php

$santas = json_decode(file_get_contents("santas.json"), true);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santa Claus Finder</title>
    <style>
        #santaContainer {
            display: flex;
            flex-direction: column;
            gap: 10px;
            list-style: none;
            padding: 0;
        }

        #santaContainer li {
            background-color: aliceblue;
            padding: 10px;
        }

        .number {
            color: darkslateblue;
        }
    </style>
</head>

<body>

    <?php include_once "layout/navigate.php" ?>

    <h1>List of Santas:</h1>

    <ul id="santaContainer">
        <?php foreach ($santas as $santa): ?>
            <li>
                <h3><?= $santa["name"] ?> (<span class="number"><?= $santa["age"] ?></span>)</h3>
                <p>Number of reindeers: <span class="number"><?= $santa["reindeers"] ?></span></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>