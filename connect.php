<?php
    $servername = "localhost";
    $username = "root";
    $password = "anam2292000";
    $database = "web";
    $port = 3306;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database,$port);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Connected successfully
?>
