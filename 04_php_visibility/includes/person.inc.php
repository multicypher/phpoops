<?php

class Person{
    /**
     * Visibility
     * 
     * private: accessible only inside the class
     * public: accessible inide and outside the class
     * protected: accessible inslide the class and in the inherited class
     * $this: refericing the class inside the class itself
     *
     * @var string
     */
    protected $first = "Multicypher";
    private $last = "Technologies";
    private $age = "39";

    /*
    public function owner() {
        $a = $this->first;
        return $a;
    }
    */
}


class Pet extends Person{

    public function owner() {
        $a = $this->first;
        return $a;
    }

}