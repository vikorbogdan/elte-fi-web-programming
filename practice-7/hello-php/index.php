<?php
// Commenting in PHP
# $greeting = "Hello " . $name  . "!"
// $greeting = "Hello " . $name  . "!"
/* $greeting = "Hello " . $name  . "!" 

multiline comment
*/
$name = "Bogdán";
date_default_timezone_set('Europe/Budapest');

function factorial($number)
{
    if ($number <= 1) return 1;
    return $number * factorial($number - 1);
}

$number_to_calculate = 5;

$array_of_messages = [
    "Your password is too weak!",
    "Incorrect e-mail!",
    "The name field is empty!",
    "You must be 18 years old or older to view this page."
];

$movie_categories = [
    43624 => "Action",
    86324 => "Comedy",
    91283 => "Horror",
    52342 => "Thriller",
];

$items = [
    43624 => "Pendrive",
    86324 => "Bread",
    91283 => "Microwave",
    52342 => "Pen",
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Hello <?= $name; ?>!</h1>
    <h2>The actual time is the following: <?= date("H:i:s") ?>!</h2>
    <h3>The factorial of <?= $number_to_calculate ?> is <?= factorial($number_to_calculate) ?>.</h3>

    <?php
    // for ($k = 1; $k <= 10; $k++) {
    //     echo "<p style='font-size:" . ($k * 2) . "px;'>Hello World!</p>";
    // }
    ?>
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <p style="font-size: <?= $i * 2 ?>px">Hello World!</p>
    <?php } ?>

    <ul>
        <?php for ($i = 0; $i < count($array_of_messages); $i++) { ?>
            <li><?= $array_of_messages[$i] ?></li>
        <?php } ?>
    </ul>

    <ul>
        <?php for ($i = 0; $i < count($array_of_messages); $i++) : ?>
            <?php if ($i < 2) : ?>
                <li><?= $array_of_messages[$i] ?></li>
            <?php else : ?>
                <li style="color: red;"><?= $array_of_messages[$i] ?></li>
            <?php endif ?>
        <?php endfor ?>
    </ul>

    <ul>
        <?php foreach ($array_of_messages as $message) : ?>
            <li><?= $message ?></li>
        <?php endforeach ?>
    </ul>
    <form method="GET">
        <select name="category" id="">
            <?php foreach ($movie_categories as $id => $category) : ?>
                <option value="<?= $id ?>"><?= $category ?></option>
            <?php endforeach ?>
        </select>
        <?php foreach ($items as $id => $item) : ?>
            <input type="checkbox" name="<?= $id ?>" id="item-<?= $id ?>">
            <label for="item-<?= $id ?>"><?= $item ?></label>
        <?php endforeach ?>
        <input type="submit" value="Submit">
    </form>

</body>

</html>


</html>