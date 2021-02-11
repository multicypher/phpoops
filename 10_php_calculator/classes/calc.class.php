<?php

class Calc {
    public $operator;
    public $number1;
    public $number2;


    public function __construct(string $operator, int $number1, int $number2) {

        $this->operator = $operator;
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function calculator() {
        switch ($this->operator) {
            case 'add':
                return $this->number1+ $this->number2;
                break;

            case 'sub':
                
                return $this->number1 - $this->number2;
                break;
                    
            case 'mul':
                
                return $this->number1 * $this->number2;
                break;
                        
            case 'div':
                
                return $this->number1 / $this->number2;
                break;
            
            case 'default':

                echo "Select correct operation";

        }
    }

    

}

?>