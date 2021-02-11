<?php
/**
 * 
 * 
 * 
 */

 class Dbh {

    private $host = "127.0.0.1";
    private $hostUsername = "root";
    private $hostPassword = "";
    private $hostDatabase = "demo";

    protected function connect() {
        
        $dsn = 'mysql:dbname=' . $this->hostDatabase . ';host=' . $this->host;
        $pdo = new PDO($dsn, $this->hostUsername, $this->hostPassword);
        $pdo->setAttribute($pdo::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;

    }

 }