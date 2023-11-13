<?php
/*
Create a web page, that greets a name that was given as a parameter ("Hello name").
a) The name is given in the URL.
b) Give the name in a form!

*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<body>
    <?php if (isset($_GET["person_name"]) && isset($_GET["pet_name"])) : ?>
        <h1>Hello <?= $_GET["person_name"] ?> and <?= $_GET["pet_name"] ?>!</h1>
    <?php endif; ?>
    <form>
        <input type="text" name="person_name" id="" placeholder="Type your name here." />
        <input type="text" name="pet_name" id="" placeholder="Type your pet's name here." />
        <input type="submit" value="Submit name">
    </form>
</body>

</html>