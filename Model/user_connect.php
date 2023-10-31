<?php
    session_start();
    if($_SESSION["uname"]==$row["UserName"]){
        
        exit;
    }
?>