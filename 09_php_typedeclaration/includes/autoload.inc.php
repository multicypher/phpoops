<?php
/**
 * PHP Autoloader
 * --------------------------------------------------------------
 * spl_autoload_register();
 * 
 * Register a function with the spl provided __autoload queue. If the queue is not yet activated
 * it will be activated.
 * 
 * This 
 */

 spl_autoload_register('myAutoloader');

 function myAutoloader($className){

    $path = "classes/";
    $extension = '.class.php';
    $fullPath = $path.$className.$extension;

    if (file_exists($fullPath)) {
        include_once $fullPath;
    }
    else {
        return false;
    }
 }