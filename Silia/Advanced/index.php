<?php
# Associative Array

$characters = array(
    "cartoon" => array(
        "name" => 'Micky Mouse',
        "age" => "100",
        "movie" => "Micky's World"
    ),
    "anime" => array(
        "name" => 'Guko',
        "age" => "300",
        "movie" => "Goku's Beginning"
    ),
    "game" => array(
        "name" => 'Super-Mario',
        "age" => "80",
        "movie" => "Super Super Mario"
    ),
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <!-- <?php
            echo "<pre>";
            print_r($characters);
            echo "</pre";
            ?> -->

    <div class="container">
        <div>
            <h1 class="heading"> <?php echo $characters["cartoon"]["name"] ?> </h1>
            <img class="image" src="https://images.unsplash.com/photo-1616776212814-fab73656dd8e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWlja3klMjBtb3VzZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
            <ul>
                <li>Age: <?php echo $characters["cartoon"]["age"] ?> </li>
                <li>Age: <?php echo $characters["cartoon"]["movie"] ?> </li>
            </ul>
        </div>

        <div>
            <h1 class="heading"> <?php echo $characters["anime"]["name"] ?> </h1>
            <img class="image" src="https://images.unsplash.com/photo-1575239005176-a1e644188f51?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="">
            <ul>
                <li>Age: <?php echo $characters["anime"]["age"] ?> </li>
                <li>Age: <?php echo $characters["anime"]["movie"] ?> </li>
            </ul>
        </div>
        <div>
            <h1 class="heading"> <?php echo $characters["game"]["name"] ?> </h1>
            <img class="image" src="https://images.unsplash.com/photo-1551103782-8ab07afd45c1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c3VwZXIlMjBtYXJpb3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=800&q=60" alt="">
            <ul>
                <li>Age: <?php echo $characters["game"]["age"] ?> </li>
                <li>Age: <?php echo $characters["game"]["movie"] ?> </li>
            </ul>
        </div>

    </div>



</body>

</html>