<?php
//variables
$name = "Donatella";
$age = "37";
$job_title = "space microbiologist";
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
    <?php echo "<h1>Hello, this is Donatella!</h1>"; ?>

    <?php
    echo "hi, my name is " . $name . ", I am " . $age . ", and I work as a " . $job_title . ".";
    ?>
    <p>hi</p>
    <?= $name ?> <br>
    <?php
    //associative array 
    $name_array = array(
        "1st_player" => "Mark",
        "2nd_player" => "John",
        "3rd_player" => "Georg",
        "4th_player" => "Lisa"
    );
    echo "The third player in the team is " . $name_array["3rd_player"] . ".";
    ?>

</body>


</html>