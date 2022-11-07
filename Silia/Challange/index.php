<?php
$cars = array(
    "Porsche" => array(
        "model" => "Cayenne",
        "price" => 300,
        "location" => "Vienna - Erdberg",
        "image" => "https://images.unsplash.com/photo-1611651338412-8403fa6e3599?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1771&q=80"
    ),
    "BMW" => array(
        "model" => "EC-1",
        "price" => 200,
        "location" => "Vienna - Central Station",
        "image" => "https://images.unsplash.com/photo-1611651338412-8403fa6e3599?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1771&q=80"
    ),
    "SUV" => array(
        "model" => "Ford XXC",
        "price" => 150,
        "location" => "Vienna - Erdberg",
        "image" => "https://images.unsplash.com/photo-1611651338412-8403fa6e3599?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1771&q=80"
    ),
    "Smart" => array(
        "model" => "for2",
        "price" => 100,
        "location" => "Vienna - Schönbrunn",
        "image" => "https://images.unsplash.com/photo-1611651338412-8403fa6e3599?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1771&q=80"
    ),
    "Mercedes" => array(
        "model" => "A3",
        "price" => 250,
        "location" => "Vienna - Central Station",
        "image" => "https://images.unsplash.com/photo-1611651338412-8403fa6e3599?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1771&q=80"
    ),
);
$info = '';
foreach ($cars as $key => $value) {
    $info .=  "<div class='col h-100'>
    <div class='card'>
    <div class='imagebox'>
    <h3 class='title'>$key</h3>
                    <img src='$value[image]' class='card-img-top carImage' alt='...'></div>
                    <div class='card-body'>
                        <h5 class='card-title mb-3'> $value[model] </h5>

                        <p><i class='fa-solid fa-location-dot'></i> $value[location]</p>

                        <div class='d-flex align-items-end flex-column mt-3'>
                            <p class='fs-3 mb-0'> $value[price] / per Day</p>
                            <p class='text-success small'><i class='fa-solid fa-check'></i> free cancellation</p>
                            <button class='generalBtn mt-3 text-light'> <a>Get free offer</a>
                            </button>
                        </div>
                    </div>
                </div>
                </div>

    ";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Archivo&family=Great+Vibes&family=Lato:wght@300;400&family=Lobster+Two&family=Manrope&family=Mulish:wght@200;400&family=Oswald:wght@200;300;400&family=Roboto:wght@100;300;400&family=Sacramento&display=swap" rel="stylesheet">
    <!--My Style Sheet-->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

    <div class="hero">
        <!-- Navbar -->
        <div class="container-fluid">
            <nav class="navBar d-flex justify-content-between fixed-top p-3">

                <div>
                    <span class="navbar-brand mb-0 text-uppercase me-4">Unique.</span>
                </div>

            </nav>
        </div>

        <div class="heroHeading text-center">
            <h1 class="mb-3 text-uppercase">Premium Car Rental <br> in New York!</h1>
            <hr>
            <p class="px-5 mx-5">Don't deny yourself the pleasure of the best premium cars from around the world here and now</p>
            <button class="generalBtn mt-2 text-light"> <a href="#cars">Get started</a></button>
        </div>

    </div>


    <div class="container my-5" id="cars">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">

            <?php echo $info ?>

        </div>
    </div>

    <?php
    // foreach ($cars as $car) {
    //     foreach ($car as $carinfo) {
    //         echo "$car[price] <br>";
    //     }
    // }
    // Shows the price 4 times for each value of one car!

    // iterator($cars);

    // function iterator($arr)
    // {
    //     foreach ($arr as $key => $val) {
    //         if (is_array($val)) iterator($val);
    //         echo "<p> key: $key <br> value: $val";
    //     }
    // }


    ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>