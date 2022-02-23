<?php

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










?>