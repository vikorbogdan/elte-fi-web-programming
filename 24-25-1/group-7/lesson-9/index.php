<?php
// php code goes here
# hashmark is also good for one line comments
/**
 * multi line
 * comment
 */

# echo ("<h1>Hello Webprogramming!</h1>")


// CURRENT TASK: 

// The identifier and description of items are given (e.g. 23 - pendrive, stb.). 
// Display the items as checkboxes! 

// FINISH BY 19:10



$name = "Bogdán";
$age = 123;
$array_of_numbers = [1, 2, 3, 4];
$array_of_numbers = ["asd", "asd", "name", "whatev"];

$array_of_messages = ["Username must not be empty!", "Too weak password!", "Wrong e-mail format."];

$movie_categories = [
    5 => "Action",
    4 => "Drama",
    9 => "Comedy",
];

function factorial($number)
{
    if ($number == 0) {
        return 1;
    }
    return $number * factorial($number - 1);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello from PHP</title>
</head>

<body>
    <h1>Hello <?= $name ?>!</h1>
    <p> <?= date("D, d M y H:i:s") ?> </p>
    <h2>
        <pre><?= factorial(8) ?></pre>
    </h2>
    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <h1 style="font-size: <?= $i * 10 ?>px">Hello World!</h1>
    <?php } ?>

    <ul style="color: red;">
        <?php foreach ($array_of_messages as $message):  ?>
            <li><?= $message ?></li>
        <?php endforeach  ?>
    </ul>
    <form method="GET">
        <label for="cars">Choose a movie category:</label>
        <select id="movie_category" name="movie_category"">
        <!-- <option value=" 5">Action</option> -->
            <?php foreach ($movie_categories as $category_key => $category): ?>
                <option value="<?= $category_key ?>"><?= $category ?></option>
            <?php endforeach ?>
        </select>
        <button type="submit">Submit category</button>
    </form>
</body>

</html>