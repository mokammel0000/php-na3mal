<?php
// $dDOCUMENT_ROOT = '\Classes';
spl_autoload_register(function($class) {
    require 'Classes/'. $class .".php";
});

// require 'Classes\Car.php';
// require 'Classes\SUV.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Game</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $arr = array('blue', 'green', 'red', 'gray', 'orange', 'cian');

    //$arr = [0, 1, 2, 3, 4];
    // foreach(range(0, 10) as $i) {
    //     $car = new Car($arr[rand(0, 4)], 45 + $i * 10);
    //     $car->show();
    //     // if(Car::getcounter() > 4)
    //     // break;
    //     if($car->getcounter() > 4)
    //     break;
    // }
    

    $grayCar = new Car('gray', 45);
    $grayCar->show();
    $orangeCar = new Car('green', 60);
    $orangeCar->show();
    $cianCar = new Car('red', 75);
    $cianCar->show();
    // $orangeCar = new Suv('orange', '60%');
    // $orangeCar->show();
    ?>
<!-- 
    // <div id="output">
    //     <pre>
    //         <?php      
    //         ?>
    //     </pre>
    // </div> -->

</body>
</html>