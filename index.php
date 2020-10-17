<?php
require_once 'Car.php';
require_once 'Bicycle.php';

//bike
echo 'Bike 1' . '<br><br>';
$bike = new Bicycle('blue');
$bike-> setCurrentSpeed(10);

// Moving bike
echo $bike->forward();
echo '<br> bike speed : ' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br> bike speed :' . $bike->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike->brake();
echo '<br><br>';

//other bike
echo 'Bike 2' . '<br><br>';
$bike2 =new Bicycle('green');
$bike2 ->setCurrentSpeed(15);

//moving oter bike
echo $bike2->forward();
echo '<br> bike speed : ' . $bike2->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike2->brake();
echo '<br> bike speed :' . $bike2->getCurrentSpeed() . 'km/h' . '<br>';
echo $bike2->brake();
echo '<br><br>';
//car
echo 'Car 1' . '<br><br>';
$car = new Car('red', '5', 'electricity');
$car->setCurrentSpeed(50);

// moving car
echo $car->start() . '<br>';
echo $car->forward() . '<br>';
echo 'car speed: ' . $car->getCurrentSpeed() . 'km/h' . '<br>';
echo $car->brake();
echo '<br> car speed: ' . $car->getCurrentSpeed() . 'km/h' . '<br>';
echo $car->brake();
echo '<br><br>';

// other car
echo 'Car 2' . '<br><br>';
$car2 = new Car('red', '5', 'electricity');
$car2 ->setCurrentSpeed(120);


// moving other car
echo $car2->start() . '<br>';
echo $car2->forward() . '<br>';
echo 'car speed: ' . $car2->getCurrentSpeed() . 'km/h' . '<br>';
echo $car2->brake();
echo '<br> car speed: ' . $car2->getCurrentSpeed() . 'km/h' . '<br>';
echo $car2->brake();
echo '<br><br>';
