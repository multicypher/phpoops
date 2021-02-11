<?php
 /**
  * Strict Type Declaration ( Type Hinting)
  * ------------------------------------------------------------------------------
  * User have to pass the correct type of data to function
  * By using type declaration , we can throw error if wrong type of data is given!
  * Work with following type of data
  * 
  * class/interface name
  * self (used to reference to same class) 
  * array
  * callable
  * bool
  * float 
  * int
  * String
  * iterable
  * object
  * declare(strict_types=1); it must be the first statement of the file.

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

    public function __construct($personName="sandy", $personEyeColor="blue", $personAge=40){

        $this->name = $personName;
        $this->eyeColor = $personEyeColor;
        $this->age = $personAge;

    }


    // Methods

    public function setName(string $personName) {
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



