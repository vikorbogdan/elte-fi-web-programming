<?php
// Create a web page whose background color can be specified as a parameter.
//     a) The color code is given in the URL!
//     b) Create three links with blue, yellow and red label. 
//        Clicking on them change the background color of the page accordingly!
//     c) The color code is given in a form! UNTIL 17:22
// $red = "";
// $green = "";
// $blue = "";

// if (isset($_GET["r"])) {
//     $red = $_GET["r"];
// }
// if (isset($_GET["g"])) {
//     $green = $_GET["g"];
// }
// if (isset($_GET["b"])) {
//     $blue = $_GET["b"];
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background color</title>
</head>

<body style="background-color: rgb(<?= $_GET["r"] ?? "255" ?>,<?= $_GET["g"] ?? "255" ?>,<?= $_GET["b"] ?? "255" ?>);">
    <ul>
        <li><a href="./?r=0&g=0&b=255">Blue</a></li>
        <li><a href="./?r=255&g=255&b=0">Yellow</a></li>
        <li><a href="./?r=255&g=0&b=0">Red</a></li>
    </ul>
    <form>
        <label for="r">Red (0-255):</label>
        <input type="number" id="r" name="r"><br>

        <label for="g">Green (0-255):</label>
        <input type="number" id="g" name="g"><br>

        <label for="b">Blue (0-255):</label>
        <input type="number" id="b" name="b"><br>
        <button type="submit">Change Background</button>
    </form>
</body>

</html>