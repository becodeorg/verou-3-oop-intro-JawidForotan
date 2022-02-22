<?php
class Beverage
{
  public string $color;
  public float $price;
  public string $temperature;

  function __construct($color, $price, $temperature )
  {
      $this->color = $color;
      $this->price = $price;
      $this->temperature = $temperature;
  }
  
  function getInfo()
  {
      $color = "Color: $this->color<br/>";
      $price = "Price: $this->price € <br/>";
      $temperature = "Temperature: $this->temperature<br/>";
      return $color . $price . $temperature;

  }
}

?>