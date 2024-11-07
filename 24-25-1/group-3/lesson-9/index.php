<?php

// php commentss yeaa
# also comment
/** 
 * 
 * multi line
 * comment
 * 
 */

// Bad practice:
//  for ($i = 1; $i <= 10; $i++) {
//     echo ('<p style="font-size: ' . $i * 10 . 'px" >Hello World!</p>');
// }

// echo ("Text i write here");

// $array_of_messages_2 = array(
//     "Username is empty",
//     "Email address is empty",
//     "Password is too weak"
// );
// 

//The identifier and description of items are given
//  (e.g. 23 - pendrive, stb.). Display the items as checkboxes!  UNTIL 17:25
function factorial($n)
{
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}

$name = "Bogdán";
$number = 3;



$array_of_messages = [
    "Username is empty",
    "Email address is empty",
    "Password is too weak",
    "You also forgot your phone number dummy"
];

$movie_categories = [
    5 => "Action",
    4 => "Drama",
    7 => "Animated",
    9 => "Comedy"
]

// echo ($array_of_messages[2]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP</title>
</head>

<body>
    <h1>Hello <?= $name ?>!</h1>
    <h2><?= date("D, dS M Y H:i:s") ?></h2>
    <h2>The factorial of <?= $number ?> is <?= factorial($number); ?>.</h2>
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <p style="font-size: <?= $i * 10 ?>px">Hello World!</p>
    <?php endfor ?>
    <ul style="color: red">
        <?php foreach ($array_of_messages as $message): ?>
            <li><?= $message; ?></li>
        <?php endforeach ?>
    </ul>
    <form>
        <select name="movie_category" id="movie_category">
            <?php foreach ($movie_categories as $category_key => $category): ?>
                <option value="<?= $category_key  ?>"><?= $category ?></option>
            <?php endforeach ?>
        </select>
        <button type="submit">Submit Category</button>
    </form>
</body>

</html>