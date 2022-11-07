<?php
#Variables
$name = "Silia";
$age = 26;
$job = "Manager";

#Array
$players = ["Mark", "Greg", "Lisa"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"
    <title></title>
</head>
<body>

<h1 class="heading"> My name is <?php echo $name; ?> and I'm <?php echo $age; ?> years old, and I work as <?php echo $job; ?>  </h1>

<p>The third Player is <?php echo $players[2]; ?> </p>

    
</body>
</html>