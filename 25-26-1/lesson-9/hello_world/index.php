<?php

$name = "";

if (isset($_GET["q"])) {
    $name = $_GET["q"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
</head>

<body>
    <h1>Hello <?= $name ?></h1>
    <form>
        <input type="text" name="q">
        <input type="submit" value="Submit!">
    </form>
</body>

</html>