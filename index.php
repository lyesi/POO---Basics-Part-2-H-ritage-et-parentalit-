<?php

//index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$doubleBR = '<br><br>';

// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);

// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car);

//var_dump(Car::ALLOWED_ENERGIES);

// echo 'Bicycle time : <br>';
// $bicyle = new Bicycle('Rouge', 1);
// $bicyle->setCurrentSpeed(15);
// echo $bicyle->forward();
// echo $bicyle->brake();

// echo $doubleBR;

// echo 'Car time : <br>';
// $car = new Car('Bleue', 30, 'Diesel');
// $car->getCurrentSpeed(10);
// echo $car->forward();
// echo $car->brake();

// echo $doubleBR;

echo 'Truck time : <br>';
$truck = new Truck('Vert', 3, 'Diesel', 30);
echo $truck->forward();
echo $truck->brake();
echo '<br>';
echo $truck->getStorageCargo(40);