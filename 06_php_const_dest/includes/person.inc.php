<?php

/**
 * 
 * 
 */

class Person {

    // properties

    private $name;
    private $eyeColor;
    private $age;

    /**
     * 
     * Constructor of the class is exceuted at the time of creating object of class
     * and the destructor exceuted at the end;
     *
     
     */
    // constructor

    public function __construct($personName, $personEyeColor, $personAge){

        $this->name = $personName;
        $this->eyeColor = $personEyeColor;
        $this->age = $personAge;

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