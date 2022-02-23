<?php
class Beverage
{
  public string $color;
  public float $price;
  public string $temperature;

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