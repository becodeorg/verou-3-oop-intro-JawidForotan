<?php

// EXERCISE 6
// Copy the classes of exercise 2.
// TODO: Change the properties to private.
// TODO: Make a const barName with the value 'Het vervolg'.
// TODO: Print the constant on the screen.
// TODO: Create a function in beverage and use the constant.
// TODO: Do the same in the beer class.
// TODO: Print the output of these functions on the screen.
// TODO: Make sure that every print is on a new line.

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

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


?>