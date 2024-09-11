<?php
// 1. Read the data.json file as an associative array. (1 point)
// Reading from a file: https://www.php.net/manual/en/function.file-get-contents.php
// Processing JSON: https://www.php.net/manual/en/function.json-decode.php

// 2. Display the data as rows of the table. (1 point)

// 3. For books published in 2000 or later, make the book title "bold"! (1 point)
// (For example, using <b> tags!)
// It's advisable to use the "substr()" function for this solution.

$data = json_decode(file_get_contents("data.json"), true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garfield Books</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tr>
            <th>Title of the Book (title)</th>
            <th>Release Date of the Book (release_date)</th>
        </tr>
        <?php foreach ($data as $book) : ?>
            <tr>
                <td><?= $book["title"] ?></td>
                <td><?= $book["release_date"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>