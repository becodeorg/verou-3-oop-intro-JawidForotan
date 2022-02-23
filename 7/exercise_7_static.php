<?php

// EXERCISE 7
// Copy your solution from exercise 6
// TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
// TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

class Car
{
    public static string $brand = "Fiat";
    public static string $model = "Tipo";

    public static function myFunction(){
        
        echo  "<h3>" . Car::$brand . Car::$model . "</h3>";
       
        

    }
}





?>