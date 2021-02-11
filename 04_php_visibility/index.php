<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../custom/style.css">
    <title>PHP OOP-Class methods and properties Visibility</title>
</head>
<body>
<?php
    include 'includes/person.inc.php';
?>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-brand pb-4 pt-4">PHP Class: Methods and Properties</div>
    </div>
</div>
<div class="clearfix"></div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php

                $person = new Pet();
                echo $person->owner();

            ?>
            
        </div>
    </div>
</div>
<script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>