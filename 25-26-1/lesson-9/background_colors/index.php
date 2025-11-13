<?php

// $red = "255";
// $green = "255";
// $blue = "255";

// if (isset($_GET["red"])) {
// $red = $_GET["red"];
// }
// if (isset($_GET["green"])) {
// $green = $_GET["green"];
// }
// if (isset($_GET["blue"])) {
// $blue = $_GET["blue"];
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Color</title>
</head>

<body style="background-color: rgb(<?= $_GET["red"] ?? "255" ?>, <?= $_GET["green"] ?? "255" ?>, <?= $_GET["blue"] ?? "255" ?>)">

    <ul>
        <li>
            <a href="http://localhost:3333/?red=0&green=0&blue=255">blue</a>
        </li>
        <li>
            <a href="http://localhost:3333/?red=255&green=255&blue=0">yellow</a>
        </li>
        <li>
            <a href="http://localhost:3333/?red=255&green=0&blue=0">red</a>
        </li>
    </ul>
    <form>
        <input value="<?= $_GET["red"] ?? "255" ?>" type="number" name="red" max="255" min="0">
        <input value="<?= $_GET["green"] ?? "255" ?>" type="number" name="green" max="255" min="0">
        <input value="<?= $_GET["blue"] ?? "255" ?>" type="number" name="blue" max="255" min="0">
        <input type="submit" value="Change background color">
    </form>

</body>

</html>