<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Camion.php';
require_once 'Highway.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$bike = new Bicycle('yellow',1);
var_dump($bike);

$bike->color = 'blue';
$bike->currentSpeed = 0;
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$car = new Car('green', 4, 'electric',true);
$car->setHasParkBrake(true);
try {
    $car->start();
} catch (Exception $exception){
    echo $exception->getMessage();
    $car->setHasParkBrake(true);
} finally {
    echo "Ma voiture roule comme un donut";
}


/* $truck1 = new Truck('black',3,'fuel',0);
echo $truck1->forward();
var_dump($truck1);

$moto = new MotorWay();
$moto->addVehicle(new Car('blue',2,'fuel',5));
var_dump($moto);

$truck6 = new PedestrianWay();
$truck6->addVehicle(new Truck('yellow',3,'fuel',8));
var_dump($truck6);

$skateboard = new ResidentialWay();
$skateboard->addVehicle(new Bicycle('pink',1));
var_dump($skateboard); */