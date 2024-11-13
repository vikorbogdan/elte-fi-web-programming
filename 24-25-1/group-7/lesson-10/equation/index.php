<?php

// Create a web page where we can solve the linear equation (ax+b=0)! 
// The value of a and b can be given in a form. 
// In case of errors the error messages appear as an unordered list above the form.
//  Display the calculated solution below the form. Keep the form state!



// What kind of errors can we get by wrong user inputs?
// - none of the fields should be empty
// - You need to provide numbers only
// - "a" cannot be zero.

$errors = [];

if (isset($_GET["a"]) && isset($_GET["b"])) {
    if (is_numeric($_GET["a"]) && is_numeric($_GET["b"])) {
        if ((int)$_GET["a"] !== 0) {
            $solution = -$_GET["b"] / $_GET["a"];
        } else {
            $errors[] = "a should not be zero!";
        }
    } else {
        $errors[] = "You should use numbers!";
    }
} else {
    // array_push($errors, "You should fill the form with values!");
    $errors[] = "You should fill the form with values!";
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equation solver</title>
</head>

<body>
    <form>
        <input type="text" name="a" placeholder="value of a" />
        <input type="text" name="b" placeholder="value of b" />
        <input name="sent" value="true" type="hidden">
        <input type="submit" value="Calculate!">
    </form>
    <h1>(<?= $_GET["a"] ?? "a" ?>x+<?= $_GET["b"] ?? "b" ?>=0)</h1>
    <h2>solution: x= <?= $solution ?? "" ?></h2>
    <?php if (isset($_GET["sent"])): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif ?>
</body>

</html>