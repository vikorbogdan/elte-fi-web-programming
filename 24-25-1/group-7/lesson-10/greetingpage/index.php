<?php
// Create a web page, that greets a name that was given as a parameter ("Hello name").

//     a) The name is given in the URL.
//     b) Give the name in a form!

// var_dump($_GET);

$nickname = "";
if (isset($_GET["nickname"])) {
    $nickname = $_GET["nickname"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings page</title>
</head>

<body>
    <h1>Hello <?= $nickname ?>!</h1>
    <form>
        <input name="nickname" type="text" />
        <input type="submit" value="Send my name!">
    </form>
</body>

</html>