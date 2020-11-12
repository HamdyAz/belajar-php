<?php
require_once("Animal.php");

class Ape extends Animal
{
    public $legs = 2;
    public $cold_blooded = "false";
    public function yell()
    {
        echo "Auooo";
    }
}   