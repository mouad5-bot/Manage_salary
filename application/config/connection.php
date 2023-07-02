<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $DBname     = "employes";

    //CONNECT TO MYSQL DATABASE USING MYSQLI    
    $GLOBALS['connection']  = mysqli_connect($servername, $username, $password, $DBname);

    // Check connection
    if (!$GLOBALS['connection']) {
    die("Connection failed: " . mysqli_connect_error());
    } else{
		echo "Your connection to database is succesfuly ! ";
	}
    
    
?>