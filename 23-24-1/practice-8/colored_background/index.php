<?php

// Create a web page whose background color can be specified as a parameter.
// a) The color code is given in the URL! 
// b) Create three links with blue, yellow and red label. Clicking on them change the background color of the page accordingly!
// c) The color code is given in a form!
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colored background</title>
</head>

<body style="background-color: <?= $_GET["color"] ?? "#ff0000" ?>;">
    <ul>
        <li><a href="./?color=%230000ff">blue</a></li>
        <li><a href="./?color=%23ffff00">yellow</a></li>
        <li><a href="./?color=%23ff0000">red</a></li>
    </ul>
    <form>
        <input type="color" name="color" id="" placeholder="Write the color:" />
        <input type="submit" value="Submit color">
    </form>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor minima quis harum ratione, tenetur cumque mollitia nostrum placeat provident ipsa explicabo veniam impedit blanditiis, assumenda exercitationem corrupti iusto voluptates quos enim molestias quia! Accusamus recusandae impedit quaerat obcaecati, quidem, tempora, sit tempore unde ducimus illum ab beatae nesciunt necessitatibus quis ipsam culpa velit est vero! Quis atque expedita eaque, doloremque repellendus repellat omnis ex pariatur voluptas sed earum culpa quibusdam fuga consectetur fugit dicta placeat nemo officia odio reiciendis at amet quo asperiores. Quia nam autem ipsam tenetur reiciendis consequuntur explicabo unde, consectetur impedit quaerat odio velit nihil inventore facere!</p>
</body>

</html>