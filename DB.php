<?php
    $servername = "localhost";
    $username = "root"; 
    $password = "123456"; 
    $dbname = "4core-task";

    
    $conn = new mysqli($servername, $username, $password, $dbname,3306);
    if($conn->connect_error){
        die("connection failled try again!".$conn->connect_error);
    }
    echo ("")
    ?>
