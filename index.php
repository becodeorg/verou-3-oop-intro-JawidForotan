<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require("./1/exercise_1_classes.php");
require("./2/exercise_2_extending.php");
require("./3/exercise_3_private.php");



$cola = new Beverage("Black", 2);
echo $cola->getInfo();
echo $cola->temperature;

$fanta = new Beverage("Orange", 1.5, "Warm");

echo $fanta->getInfo();
echo $fanta->temperature."<br/><br/>";

// Create object beer and refer to the parent class constructor

$beer1 = new Beer("duvel1", 8.5);
echo $beer1->getAlcoholPercentage();
echo $beer1->getInfo();

// Class with private properties
$beer2 = new PrivateBeer("duvel2", 8.5);
echo $beer2->beerInfo()."<br/>";
echo $beer2->getInfo();

// Create object of class with different access modifier



?>