<?php
/**
 * PHP Autoloader
 * -----------------------------------------------------------------------------
 * spl_autoload_register();
 * 
 * Register a function with the spl provided __autoload queue. If the queue is not 
 * yet activated it will be activated.
 *  
 */

 spl_autoload_register('myAutoloader');

 function myAutoloader($className){

    $host = '';
    if (!empty($_SERVER['HTTP_HOST'])) {
        $host = $_SERVER['HTTP_HOST'];
    }

    $url = $host.$_SERVER['REQUEST_URI'];

    if(strpos($url, 'includes') !== false){
        $path = '../classes/';
    }
    else {
        $path = 'classes/';
    }

    $extension = '.class.php';

    require_once $path.$className.$extension;

 }