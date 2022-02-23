<?php


class Beverage
{
  public string $color;
  public float $price;
  public string $temperature;

  function __construct($colorP = "Black", $priceP = 2, $temperatureP = "Cold")
  {
      $this->color = $colorP;
      $this->price = $priceP;
      $this->temperature = $temperatureP;
  }
  
  function getInfo()
  {
      return "<h3> The beverage is: {$this->temperature} and color is: {$this->color}</h3><br/>";

  }
}












?>