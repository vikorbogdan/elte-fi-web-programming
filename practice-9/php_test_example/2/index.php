<?php
$ERROR_TEXT = "Answering the question is mandatory!";
$COLORS = ["orange", "blue", "brown", "black", "purple", "green", "yellow", "aqua", "pink", "gray", "red"];

$suspicious_error = "";
$space_error = "";


$points = 0;
$color = "";


// 1. If the user submits the form incompletely, do the following:
//    - Set the appropriate variable(s) ($suspicious_error / $space_error / both) to the value of $ERROR_TEXT!
// (1 point)


// 2. If the user fills out both input fields on the form, do the following:
//    - Sum the values of the fields on the form into the points variable after submitting the form!
//    - Set the $color variable to the value of $COLORS[$points]!
//    - Display the <h1> with the "color-result" id! (In all other cases, this header should not be displayed.)
// (2 points)

// 3. Use a hidden input field to check whether the form has been submitted,
//    and only display error messages if the form has been submitted! (hidden input)
// (1 point)



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SusFeed</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <h1>SusFeed</h1>
    </nav>
    <!-- h1#color-result: Csak helyesen beküldött űrlap esetén jelenik meg. -->
    <h1 id="color-result" style="color: <?= $color ?>">You would be a(n) <?= $color ?> astronaut!</h1>
    <h1>What color would your spacesuit be if you were an astronaut?</h1>
    <form>
        <ul>
            <li>
                <h2>How suspicious are you?</h2>
                <div class="inputs">
                    <input type="radio" id="0" name="suspicious" value="0">
                    <input type="radio" id="1" name="suspicious" value="1">
                    <input type="radio" id="2" name="suspicious" value="2">
                    <input type="radio" id="3" name="suspicious" value="3">
                    <input type="radio" id="4" name="suspicious" value="4">
                    <input type="radio" id="5" name="suspicious" value="5">
                </div>
                <div class="labels">
                    <label for="0">0</label>
                    <label for="1">1</label>
                    <label for="2">2</label>
                    <label for="3">3</label>
                    <label for="4">4</label>
                    <label for="5">5</label>
                </div>
                <span class="suspicious_error"><?= $suspicious_error ?></span>
            </li>
            <li>
                <h2>How much do you like being in space?</h2>
                <div class="inputs">
                    <input type="radio" id="0" name="space" value="0">
                    <input type="radio" id="1" name="space" value="1">
                    <input type="radio" id="2" name="space" value="2">
                    <input type="radio" id="3" name="space" value="3">
                    <input type="radio" id="4" name="space" value="4">
                    <input type="radio" id="5" name="space" value="5">
                </div>
                <div class="labels">
                    <label for="0">0</label>
                    <label for="1">1</label>
                    <label for="2">2</label>
                    <label for="3">3</label>
                    <label for="4">4</label>
                    <label for="5">5</label>
                </div>
                <span class="space_error"><?= $space_error ?></span>
            </li>
        </ul>
        <button type="submit">Evaluate</button>
    </form>
</body>

</html>