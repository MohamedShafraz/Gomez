<?php
    $dbName = "localhost";
    $userName =  "root";
    $passWord = "";
    $tableName = "gomez_hc";
    $dbcon = mysqli_connect($dbName,$userName,$passWord,$tableName) or die("connection failure"); 
?>