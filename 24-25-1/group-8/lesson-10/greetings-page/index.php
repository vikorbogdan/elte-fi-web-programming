<?php


// Create a web page, that greets a name that was given as a parameter ("Hello name").
//     a) The name is given in the URL.
//     b) Give the name in a form!

$name = "";

if (isset($_GET["name"])) {
    $name = $_GET["name"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello <?= $name ?>!</title>
</head>

<body>
    <form>
        <input name="name" type="text" />
        <input type="submit" value="Send my name!">
    </form>
</body>
<h1>Hello <?= $name ?></h1>

</html>