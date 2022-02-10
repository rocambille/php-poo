<?php

require_once "./Car.php";
require_once "./Truck.php";

$kitt = new Car("black", 4, "fuel");
$flashMcQueen = new Car("red", 2, "electric");
$homeOfJacky = new Truck("green", 3, 15000);

try {
    $kitt->start();
} catch(Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    $kitt->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut\n";
}

$kitt->forward();
$kitt->brake();
