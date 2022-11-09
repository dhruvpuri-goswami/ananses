<?php
    $hostname = 'localhost:8111';
    $dbname = 'ananses';
    $username = 'root';
    $pass = '';

    // Create connection
    $conn = mysqli_connect($hostname, $username, $pass, $dbname);

    // Check connection
    if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error());
    echo "<br>";
    } 
?>