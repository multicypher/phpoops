<?php
class Second extends First {

    public static $stcProperty = "A static propery from second class";

    public static function secondClassFunction() {
        echo parent::GREET;

        echo self::$stcProperty;
    }

}