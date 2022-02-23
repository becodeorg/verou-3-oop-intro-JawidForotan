<?php
// EXERCISE 4

// Copy the code of exercise 2 to here and delete everything related to cola.
// TODO: Make all properties protected.
// TODO: Make all the other prints work without error without changing the beverage class.
require("./exercise_4_protected.php");

class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

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
    public function getName()
    {
       echo $this->name;

    }
    

}

$beer1 = new Beer("Stella", 4.5);
echo $beer1->getAlcoholPercentage();
echo $beer1->getName();

?>