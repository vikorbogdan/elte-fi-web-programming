<?php

function solve_linear_equation($a, $b)
{
    return -(int)$b / (int)$a;
}




$error_messages = [
    "a_is_mandatory" => "Please provide the value of a.",
    "b_is_mandatory" => "Please provide the value of b.",
    "a_is_not_zero" => "Please choose a different number for a, as it can't be zero."
];

$error_messages_to_display = [];

$x = "";
if (isset($_GET["a"]) && is_numeric($_GET["a"])) {
    if (isset($_GET["b"]) && is_numeric($_GET["b"])) {
        if ($_GET["a"] != 0) {
            $x = solve_linear_equation($_GET["a"], $_GET["b"]);
        } else {
            $error_messages_to_display[] = $error_messages["a_is_not_zero"];
        }
    } else {
        $error_messages_to_display[] = $error_messages["b_is_mandatory"];
    }
} else {
    // array.push(elem) === "[] ="
    $error_messages_to_display[] = $error_messages["a_is_mandatory"];
}

if (!isset($_GET["a"]) && !isset($_GET["b"])) {
    $error_messages_to_display = [];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linear equation calculator</title>
</head>

<body>
    <h1>ax+b=0</h1>
    <ul style="color: red">
        <?php foreach ($error_messages_to_display as $error_message): ?>
            <li><?= $error_message ?></li>
        <?php endforeach ?>
    </ul>
    <form>
        <label for="a">a</label>
        <input value="<?= $_GET["a"] ?? 0 ?>" type="number" name="a" id="a">
        <br />
        <label for="b">b</label>
        <input value="<?= $_GET["b"] ?? 0 ?>" type="number" name="b" id="b">
        <br />
        <input type="submit" value="Calculate X" />
    </form>
    <h2>The value of X is: <?= $x ?> </h2>
</body>

</html>