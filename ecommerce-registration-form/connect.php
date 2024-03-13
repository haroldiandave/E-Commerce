<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Create connection
    $conn = mysqli_connect($servername, $username, $password);

    //Check connection
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    //Create database
    $sql = "CREATE DATABASE FirstConnection";
    if ($conn->query($sql) === TRUE) {
        echo "Database created Successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
  

?>