<?php
// Create a web page whose background color can be specified as a parameter.

//     a) The color code is given in the URL!
//     b) Create three links with blue, yellow and red label. Clicking on them change the background color of the page accordingly!
//     c) The color code is given in a form!

// $red = $_GET["red"];
// $green = $_GET["green"];
// $blue = $_GET["blue"];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background</title>
</head>

<body style="background-color: rgb(<?= $_GET["red"] ?? "255" ?>,<?= $_GET["green"] ?? "255" ?>,<?= $_GET["blue"] ?? "255" ?>)">
    <ul>
        <li><a href="./?red=0&green=0&blue=255">Blue</a></li>
        <li><a href="./?red=255&green=255&blue=0">Yellow</a></li>
        <li><a href="./?red=255&green=0&blue=0">Red</a></li>
    </ul>
    <form action="">

        <label for="red">Red:</label>
        <input type="number" id="red" name="red" min="0" max="255"><br>
        <label for="green">Green:</label>
        <input type="number" id="green" name="green" min="0" max="255"><br>
        <label for="blue">Blue:</label>
        <input type="number" id="blue" name="blue" min="0" max="255"><br>
        <input type="submit" value="Change Background">
    </form>
</body>

</html>