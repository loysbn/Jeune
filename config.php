<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jeune_table";

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die("Connection Failed");
    }
?>