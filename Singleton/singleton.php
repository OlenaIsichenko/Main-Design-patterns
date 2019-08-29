<?php

/**
 * Singleton class
 */
class HireCar 
{   
    private static $alreadyHiredCar = FALSE;
     
    /**
    * Hire a car
    */      
    public static function hireNewCar()
    {
        if (FALSE === self::$alreadyHiredCar) {
            print_r("Here is you car. ");
        } else {       
            print_r("You have already hired a car. ");   
        }  
    }
    
    /**
    * Get the model of a car
    */
    public static function getCar() 
	  {
        $model = "Ford";
        print_r("Your car is " . $model . ".");
    }
}
