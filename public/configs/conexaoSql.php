<?php
    $severname = "localhost";
    $database = "cadastro";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($severname, $username, $password, $database);

    if (!$conn){
        die("Connection Falied: " . mysqli_connect_error());
    }
?>