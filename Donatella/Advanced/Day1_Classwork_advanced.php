<?php
//associative nested array
$creators = array(
    "cartoon" => array(
        "Michey Mouse" => "Disney",
        "Hulk" => "Marvel",
        "Captain America" => "Marvel",
        "Batman" => "DC",
        "Wolverin" => "DC"
    ),
    "anime" => array(
        "Sailor Moon" => "Naoko Takeuchi",
        "Goku" => "Akira Toriyama",
        "Cowboy Bebop" => "Jesse Schedeen"
    ),
    "gameCharacters" => array(
        "Super Mario" => "Shigeru Miyamoto",
        "Lara Croft" => "Toby Gard",
        "Pac-Man" => "Toru Iwatani"
    )
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    /* Access the multidimensional array values */
    echo "<p>The creator of Captain America is: </p>";
    echo $creators["cartoon"]["Captain America"] . "<br>";
    echo "<p>The creator of Sailor Moon is: </p>";
    echo $creators["anime"]["Sailor Moon"] . "<br>";
    echo "<p>The creator of Lara Croft is: </p>";
    echo $creators["gameCharacters"]["Lara Croft"] . "<br>";

    ?>
</body>


</html>