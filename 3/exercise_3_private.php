<?php


class Beverage
{
  private string $color;
  private float $price;
  private string $temperature;

  // function __construct($colorP = "Black", $priceP = 2, $temperatureP = "Cold")
  // {
  //     $this->color = $colorP;
  //     $this->price = $priceP;
  //     $this->temperature = $temperatureP;
  // }

  // Setter
  public function setInfo($colorP, $priceP, $temperatureP)
  {
    $this->color = $colorP;
    $this->price = $priceP;
    $this->temperature = $temperatureP;
  }
  
  // Getter
  public function getInfo()
  {
      
      return "The color is {$this->color}, price is {$this->price} and temperature is {$this->temperature}";

  }
}




?>