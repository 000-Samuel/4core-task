<?php
// Database connection parameters
    $servername = "localhost";
    $username = "root"; // Replace with your MySQL username
    $password = "123456"; // Replace with your MySQL password
    $dbname = "4core-task";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname,3306);
    if($conn->connect_error){
        die("connection failled try again!".$conn->connect_error);
    }
    echo ("")
    ?>