<?php
 /**
  * Static Property and methods
  * ------------------------------------------------------------------------------
  * These are the properties and methods that can be accissible without creating object
  * are called as static methods and proprty.
  * 
  * 

  */
  class Person {

    // properties

    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 21;

    /**
     * 
     * Constructor of the class is exceuted at the time of creating object of class
     * and the destructor exceuted at the end;
     *
     
     */
    // constructor

    public function __construct($personName="sandy", $personEyeColor="blue", $personAge=40){

        $this->name = $personName;
        $this->eyeColor = $personEyeColor;
        $this->age = $personAge;

    }

    // static methos

    public static function setDrinkinAge($newDrAge) {
        
        self::$drinkingAge = $newDrAge;

    }

    public static function getDrinkingAge() {
        return self::$drinkingAge;
    }

    // Methods

    public function setName($personName) {
        $this->name = $personName;
    }

    /**
     * Function to access and return the private properties in PHP OOP
     *
     * @return string (Name of the person)
     * 
     */

    public function getName() {

        return $this->name;

    }
    // Destructor
    
    public function __destruct(){

        echo "This is the end of the class";
    }
    
}



