<?php

require 'Vehicule.php';
require 'Bicycle.php';
require 'Car.php';
require 'Truck.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck('yellow', 6, 'essence', 20);
$truck->setCurrentSpeed(20);
$truck->setFilling(30);
var_dump($truck);
echo $truck->brake(); ?> <br>
<?php
echo $truck->inFilling();

// $scooter = new Vehicule('brown', 6);
