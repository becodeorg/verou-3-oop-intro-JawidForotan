<?php
/* 

EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
 */

require("../3/exercise_3_private.php");

 class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct($nameP, $alcoholPercentageP)
    {
        $this->name = ucfirst($nameP);
        $this->alcoholPercentage = $alcoholPercentageP;   
       
    }

    public function beerInfo()
    {
       return "Hi, i'm {$this->name} and have <b>{$this->alcoholPercentage}</b>  % alcohol.";
    }
}

$beer2 = new Beer("Duvel", 8.5);

echo $beer2->beerInfo();
echo "<br/>";
$beer2->setInfo("Light", 5.5, "Cold");
echo $beer2->getInfo();











?>