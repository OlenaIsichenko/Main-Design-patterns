<?php

/**
 * Singleton class
 */
class HireCar {
    private $car;
    private $alreadyHiredCar = FALSE;
    private $model = "Ford";

    private function __construct() {

    }
    
    /**
    * Hire a car
    */
    static function hireCar() {
      if (FALSE == self::$alreadyHiredCar) {
        if (NULL == self::$car) {
           self::$car = new HireCar();
        }
        self::$alreadyHiredCar = TRUE;
        return self::$car;
      } else {
        return NULL;
      }
    }

  	/**
    * Return a car
    */
    function getCar() {
        return $this->model;
    }
}

$car = HireCar::hireCar();
$model = $car->getCar();
var_dump($model);
