<?php
session_start();

$users = json_decode(file_get_contents("foxes.json"), true);


if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle)
    {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

$keyword = "";
if (isset($_GET["search"])) {
    $keyword = $_GET["search"];
}

$filtered_users = [];
foreach ($users as $user) {
    if (str_contains(strtolower($user["name"]), strtolower($keyword))) {
        $filtered_users[] = $user;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaceVuk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include_once "navigation.php" ?>
    <p>You are logged in as: <?= $_SESSION["user"] ?? "" ?></p>
    <ul id="results">
        <?php if (isset($_SESSION["user"])) : ?>
            <?php foreach ($filtered_users as $user) : ?>
                <li>
                    <img src="<?= $user["img"] ?>" alt="" />
                    <h2><?= $user["name"] ?></h2>
                </li>
            <?php endforeach; ?>
        <?php endif ?>
    </ul>
</body>

</html>