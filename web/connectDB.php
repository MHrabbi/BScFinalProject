<?php

    $servername = "remotemysql.com";
    $username = "XeN68n3YDa";		
    $password = "O9egp8mATT";			
    $dbname = "XeN68n3YDa";
// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	global $conn;
// Check connection
	if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
?>
