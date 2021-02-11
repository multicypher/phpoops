<?php

class Test extends Dbh {

    /**
     * 
     * 
     */

     public function getFirstName() {

        $sql = "SELECT * from persons";

        $stmt = $this->connect()->query($sql);

        while($row = $stmt->fetch()) {

            echo $row['first_name'].'<br/>';

        }
     }
}