<?php
/**
 * Interfaces in PHP
 * --------------------------------------------------------------------------------------
 * 
 * Interfaces allow you to specify what methods a class should implement.
 * Interfaces make it easy to use a variety of different classes in same way. When
 * one or more classes use the same interface it is called as "ploymorphism"
 * Interface are declared with the keyword "interface"
 * 
 * 
 * Interfaces cannot have properties
 * All interface methods must be public
 * All methods in the interface are abstract, so they can not be implemented in code.
 * class can implement interface while inheriting from other class at the same time.
 *   
 */
interface Animal {

    public function makeSound();
}

class Cat implements Animal {
    
    public function makeSound () {

        echo 'Cat Sound';
    }

}

class Dog implements Animal {

    public function makeSound () {

        echo 'Dog Sound';
        
    }
}