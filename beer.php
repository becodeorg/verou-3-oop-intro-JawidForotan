<?php

class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;

    public function __construct( $color, $price, $temperature, $Name = "Duivel", $AlcoholPercentage = 8.5)
    {
        $this->name = $Name;
        $this->alcoholPercentage = $AlcoholPercentage;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function beerInfo()
    {
       return "<h3>{$this->name} is {$this->color}. It has {$this->alcoholPercentage} % alcohol. The temperature is {$this->temperature} and it costs {$this->price} € </h3>";
    }
}










?>