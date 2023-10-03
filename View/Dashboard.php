<?php
include('../Model/user_db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="GMZ.css">
    <script defer src="./View/login.js"></script>
    <title>Document</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="./"  id="set1" onmouseenter="select()" onmouseleave="unselect()">Home</a>
            <a href="./ContactUs"  id="set" >Contact Us</a>
           </div><a href='./View/login.php'><div class='selected'><font class='GMfont'>Log out</font></div>
        </nav>
    </header>
    <aside class="sidenav">
        <div class="sidenavbarspace">
                <center>
                <img src="../icon.png" alt="logo" class="logo1">
                <?php
                switch ($_SESSION['userType']) {
                case 'Admin':
                echo "<div class='sidenavbuttons'><a class='sidebarselected' id='select1'>Dashbboard<br></a></div><a class='sidenavbuttons' id='unselect1'>Manage users<br></a><a class='sidenavbuttons' id='unselect2'>Manage schedules<br></a><a class='sidenavbuttons' id='unselect3'>Reminder<br></a>";
                break;
                case 'Patient':
                echo "<div class='sidenavbuttons'><a class='sidebarselected' id='select1'>Dashbboard<br></a></div><a class='sidenavbuttons' id='unselect4'>Appointments<br></a><a class='sidenavbuttons' id='unselect5'>Treatment<br></a><a class='sidenavbuttons' id='unselect6'>Report<br></a><a class='sidenavbuttons' id='unselect10'>Payment<br></a><a class='sidenavbuttons' id='unselect3'>Reminder<br></a>";
                break;
                case 'Doctor':
                echo "<div class='sidenavbuttons'><a class='sidebarselected' id='select1'>Dashbboard<br></a></div><a class='sidenavbuttons' id='unselect4'>Appointments<br></a><a class='sidenavbuttons' id='unselect5'>Treatment<br></a><a class='sidenavbuttons' id='unselect6'>Report<br></a><a class='sidenavbuttons' id='unselect8'>Availability<br></a><a class='sidenavbuttons' id='unselect3'>Reminder<br></a>";
                break;
                case 'Nurse':
                echo "<div class='sidenavbuttons'><a class='sidebarselected' id='select1'>Dashbboard<br></a></div><a class='sidenavbuttons' id='unselect4'>Appointment<br></a><a class='sidenavbuttons' id='unselect5'>Treatment<br></a><a class='sidenavbuttons' id='unselect6'>Report<br></a><a class='sidenavbuttons' id='unselect8'>Availability<br></a><a class='sidenavbuttons' id='unselect3'>Reminder<br></a>";
                break;
                case 'Receiptionist':
                echo "<div class='sidenavbuttons'><a class='sidebarselected' id='select1'>Dashbboard<br></a></div><a class='sidenavbuttons' id='unselect4'>Appointment<br></a><a class='sidenavbuttons' id='unselect10'>Payment<br></a><a class='sidenavbuttons' id='unselect3'>Reminder<br></a>";
                break;
                case 'Lab-Assistant':
                echo "<div class='sidenavbuttons'><a class='sidebarselected' id='select1'>Dashbboard<br></a></div><a class='sidenavbuttons' id='unselect4'>Appointment<br></a><a class='sidenavbuttons' id='unselect6'>Report<br></a><a class='sidenavbuttons' id='unselect9'>Lab Testing<br></a><a class='sidenavbuttons' id='unselect10'>Payments<br></a><a class='sidenavbuttons' id='unselect3'>Reminder<br></a>";
                break;
                }
                ?>
                <a class="sidenavbuttons" id="unselect10">User Info<br></a>
                </center>
            </div>
        </div>
    </aside>
</body>

</html>