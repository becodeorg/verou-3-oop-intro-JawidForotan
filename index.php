<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require("./beverage.php");
require("./beer.php");
require("./private.php");



$cola = new Beverage("Black", 2.5, "-5c°");
$fanta = new Beverage("Orange", 1.5, "Cold");

// Create object beer and refer to the parent class constructor

$newBeer = new Beer("Blond", 3.5, "Very cold");

echo $cola->getInfo();
echo $fanta->getInfo();
echo $newBeer->beerInfo(); 

// Create object of class with different access modifier
$person1 = new Person("Jawid", 26, "Antwerp");

echo $person1->personInfo(); 
echo $person1->name;
echo $person1->age;
echo $person1->place;


?>