<?php
spl_autoload_register(function ($class) {
    require 'Classes/' . $class . ".php";
});
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

    // $arr = array('blue', 'green', 'red', 'gray', 'orange', 'cian');

    // foreach (range(0, 10) as $i) {
    //     $car = new Car($arr[rand(0, 4)], 50 + $i * 12);
    //     $car->show();
    //     // if(Car::getcounter() == 4)
    //         // break;
    //     if ($car->getcounter()== 4)
    //         break;
    // }

    $grayCar = new Car('gray', 50);
    $grayCar->show();
    $orangeCar = new Car('green', 62);
    $orangeCar->show();
    $cianCar = new Car('red', 74);
    $cianCar->show();
    $orangeCar = new Suv('orange', 86);
    $orangeCar->show();
    ?>

</body>

</html>