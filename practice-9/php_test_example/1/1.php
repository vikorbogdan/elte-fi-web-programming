<?php

// Some PHP versions do not include the str_contains function, so it is defined here. (You can ignore this.)
if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle)
    {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

$users = [
    [
        "name" => "Vuk",
        "img" => "https://images.unsplash.com/photo-1560809451-9e77c2e8214a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=80"
    ],
    [
        "name" => "Fox",
        "img" => "https://images.unsplash.com/photo-1516934024742-b461fba47600?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=40"
    ],
    [
        "name" => "Mr Fox",
        "img" => "https://images.unsplash.com/photo-1605101479435-005f9c563944?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=80"
    ],
    [
        "name" => "Karak",
        "img" => "https://images.unsplash.com/photo-1578170681526-de18d598a5b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=80"
    ]
];

// 1. Retrieve the search term from the GET Parameters! (1 point)

// 2. If a search term is specified in the URL, list only those users whose names contain the search term!
//    The search should be case-insensitive.
//    (Hint: You can use the str_contains and strtolower functions for the solution.) (1 point)
// For example, the term "fo" should list the users "Mr Fox" and "Fox".

// 3. If no query is specified in the url (No GET parameters), list all users on the page! (1 point)
// (By clicking on the FaceVuk Title in the navigation bar)



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
    <nav>
        <!-- Edit the href attribute to solve the 4th task. -->
        <a href="?">
            <h1>FaceVuk</h1>
        </a>
        <form method="get">
            <input type="text" name="search" id="search">
            <button type="submit">
                <img src="./search-icon.svg" alt="Search">
            </button>
        </form>
    </nav>
    <ul id="results">
        <!-- Example for expected output (You can delete this part) -->
        <li class="result">
            <img src="https://images.unsplash.com/photo-1560809451-9e77c2e8214a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=80">
            <h2>Example user</h2>
        </li>
    </ul>
</body>

</html>