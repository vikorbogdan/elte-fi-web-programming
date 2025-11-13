<?php
$name = "Bogdán";

$array_of_errors = [
    "Your password is too weak!",
    "Your e-mail address is a bit too lame!",
    "Please make sure you're not a robot!",
    "Invalid user!"
];

$categories = [
    5 => "Action",
    9 => "Drama",
    3 => "Comedy"
]


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <style>
        ul {

            color: red;
        }
    </style>
</head>

<body>

    <h1>
        <?= "Hello " . $name ?>
    </h1>
    <p><?= date("F j, Y, g:i a") ?></p>

    <?php
    for ($i = 0; $i < 10; $i++) {
        echo ('<p style="font-size: ' . $i * 5 . 'px;">Hello world!</p>');
    }
    ?>

    <?php for ($i = 0; $i < 10; $i++) { ?>
        <p style="font-size: <?= $i * 5 ?>px"> Hello world!</p>
    <?php } ?>

    <?php for ($i = 0; $i < 10; $i++): ?>
        <p style="font-size: <?= $i * 5 ?>px"> Hello world!</p>
    <?php endfor; ?>

    <ul>
        <?php for ($i = 0; $i < count($array_of_errors); $i++): ?>
            <li><?= $array_of_errors[$i] ?></li>
        <?php endfor; ?>
    </ul>

    <ul>
        <?php foreach ($array_of_errors as $error_message): ?>
            <li><?= $error_message ?></li>
        <?php endforeach; ?>
    </ul>

    <select>
        <?php foreach ($categories as $id => $category): ?>
            <option value="<?= $id ?>"><?= $category ?></option>
        <?php endforeach; ?>
    </select>

</body>

</html>