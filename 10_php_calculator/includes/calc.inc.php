<?php
include 'autoload.inc.php';

$oNumber1 = $_POST['number1'];
$oNumber2 = $_POST['number2'];
$operation = $_POST['operator'];

$calc = new Calc($operation,$oNumber1,$oNumber2);



try {

    echo $oNumber1.$operation.$oNumber2."=".$calc->calculator();

}catch (TypeError $e){

    echo $e->getMessage();

}

