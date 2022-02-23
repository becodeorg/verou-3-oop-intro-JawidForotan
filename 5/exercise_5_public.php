<?php

// EXERCISE 5

// Copy the class of exercise 1.
// TODO: Change the properties to private.
// TODO: Fix the errors without using getter and setter functions.
// TODO: Change the price to 3.5 euro and print it also on the screen on a new line.


class Beverage
{
  private string $color;
  private float $price;
  private string $temperature;

  function __construct($color, $price, $temperature = "Cold")
  {
      $this->color = $color;
      $this->price = $price;
      $this->temperature = $temperature;
  }
  
  public function getInfo()
  {
      return "<h3> The temperature is {$this->temperature} color is: {$this->color} and it costs {$this->price} €</h3><br/>";

  }
}




?>