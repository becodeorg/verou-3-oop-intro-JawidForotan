<?php

class Person
{
    public string $name;
    protected int $age;
    private string $place;

    public function __construct($name, $age, $place)
    {
        $this->name = $name;
        $this->age = $age;
        $this->place = $place;
    }
    public function personInfo()
    {
        return "<h3>{$this->name} is {$this->age} years old and lives in {$this->place}</h3>";

    }
}


?>