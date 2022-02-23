<?php


class Beverage
{
  protected string $color;
  protected float $price;
  protected string $temperature;

  function __construct($color, $price, $temperature = "Cold")
  {
      $this->color = $color;
      $this->price = $price;
      $this->temperature = $temperature;
  }
  
  function getInfo()
  {
      return "<h3> The beverage is {$this->temperature} and color is: {$this->color}</h3><br/>";

  }
}




?>