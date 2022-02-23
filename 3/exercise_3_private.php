<?php

class PrivateBeer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct($Name, $AlcoholPercentage,  $color = "Light", $price = 3.5,  $temperature = "Cold")
    {
        $this->name = ucfirst($Name);
        $this->alcoholPercentage = $AlcoholPercentage;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function beerInfo()
    {
       return "Hi, i'm {$this->name} and have <b>{$this->alcoholPercentage}</b>  % alcohol";
    }
}


?>