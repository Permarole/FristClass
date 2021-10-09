<?php

require_once 'Bicycle.php';
require_once 'Automobile.php';


$bike = new Bicycle("blue");

$car = new Automobile(4, "red", "Diesel");



echo $car->start();
$car->addFuel(50);
echo '<br>' . $car->start();

echo '<br>' . $car->forward();

echo '<br> Car speed is : ' . $car->getCurrentSpeed();

echo '<br>' . $car->brake();
