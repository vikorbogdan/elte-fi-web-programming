<?php

// Comments
# Comment as well
/**
 * regular multiline
 * comment
 */

$name = "Bogdán";

$age = 24;

$mountains = [
    "Mátra",
    "Mecsek",
    "I don't remember anything else"
];

$items = [
    "jdffs1223" => "Apple",
    "sdkbh1sdl" => "Bread",
];

echo ($items["jdffs1223"]);
echo ($mountains[1]);

$movie_categories = [
    5 => "Action",
    9 => "Drama",
    3 => "Comedy",
];


function factorial($number)
{
    if ($number <= 0) return 1;
    return $number * factorial($number - 1);
}

$array_of_messages = [
    "Too long username!",
    "Too weak password!",
    "Please fill the phone number field!"
]

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello <?php echo ($name); ?>!</h1>
    <h1>Hello <?= $name ?>!</h1>
    <h2><?= "Current date: " . date("d M Y - H:i:s") ?></h2>
    <h2>Factorial: <?= factorial(3) ?></h2>

    <?php for ($i = 0; $i < 10; $i++) {
        echo ('<p style="font-size: ' . $i * 10 .  'px">Hello world!</p>');
    }
    ?>

    <?php for ($i = 0; $i < 10; $i++) { ?>
        <p style="font-size: <?= $i * 10 ?>px">Hello World again!</p>
    <?php } ?>

    <ul>
        <?php for ($i = 0; $i < count($array_of_messages); $i++) { ?>
            <li><?= $array_of_messages[$i] ?></li>
        <?php } ?>
    </ul>

    <ul>
        <?php foreach ($array_of_messages as $message) { ?>
            <li><?= $message ?></li>
        <?php } ?>
    </ul>

    <form method="GET">
        <label for="movies">Select a movie category:</label>
        <select name="movies" id="movies">
            <?php foreach ($movie_categories as $id => $category) { ?>
                <option value="<?= $id ?>"><?= $category ?></option>
            <?php } ?>
        </select>
        <button type="submit">Submit form</button>
    </form>

</body>

</html>