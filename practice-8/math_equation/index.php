<?php
// Create a web page where we can solve the linear equation (ax+b=0)! (x = -b/a)
//  The value of a and b can be given in a form.
//  In case of errors the error messages appear as an unordered list above the form.
//  Display the calculated solution below the form. Keep the form state!

// ERRORS:
// - All fields are empty
// - There's only an empty field -
// - Only numbers are allowed
// - a can't be zero
$errors = [];
$solution = 0;
if (isset($_GET["a"]) && isset($_GET["b"])) {

    if ($_GET["a"] != "" && $_GET["b"] != "") {
        if (is_numeric($_GET["a"]) && is_numeric($_GET["b"])) {
            if ($_GET["a"] != 0) {
                // there was no errors
                $solution = -$_GET["b"] / $_GET["a"];
                var_dump($solution);
            } else {
                $errors[] = "\"a\" can't be zero.";
            }
        } else {
            $errors[] = "Please only use numbers.";
        }
    } else {
        $errors[] = "One of both of the fields are empty.";
        // array_push($errors,"All fields are empty");
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linear equation solver</title>
</head>

<body>
    <h1>Linear equation solver tool</h1>
    <?php if (count($errors) > 0) : ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?> </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form>
        <label for="a">a:</label>
        <input type="text" name="a" id="a" /> <br>
        <label for="b">b:</label>
        <input type="text" name="b" id="b" /> <br>
        <input type="submit" value="Calculate!">
    </form>
</body>

</html>