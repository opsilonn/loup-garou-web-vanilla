<?php
    function connect()
    {
        $servername = "localhost";
        $username = "userLoup-Garou";
        $password = "fwA1S7eQ9RXyf42s";
        $dbname = "loup-garou";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);

        // Check connection
        if ($conn->connect_error) 
            die("Connection failed: " . $conn->connect_error);  
        else
            return $conn;
    }
?>