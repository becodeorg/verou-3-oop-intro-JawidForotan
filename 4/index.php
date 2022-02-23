<?php
require("./exercise_4_protected.php");
class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;

    public function __construct($Name, $AlcoholPercentage,  $color = "Blond", $price = 3.5,  $temperature = "Cold")
    {
        $this->name = ucfirst($Name);
        $this->alcoholPercentage = $AlcoholPercentage;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getAlcoholPercentage()
    {
       return "{$this->name} has <b>{$this->alcoholPercentage}</b>  % alcohol";
    }
}

$newBeer = new Beer("Stella", 4.5, "Blond", 2.5, "Cold");
echo $newBeer->getInfo();
echo $newBeer->getAlcoholPercentage();






?>