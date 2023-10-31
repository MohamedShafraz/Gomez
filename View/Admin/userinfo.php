<?php
$sidebar = "<div class='sidebarselected' id='select1'>Dashbboard<br></div><div class='sidebarunselected' id='unselect4'>Appointment<br></div><div class='sidebarunselected' id='unselect10'>Payment<br></div><div class='sidebarunselected' id='unselect3'>Reminder<br></div><div class='sidebarunselected' id='unselect10'>User Info<br></div>";
include("View/dashboard.php");
?>
<br>
<div class="popup" style="margin-top:9%;margin-right:29%;margin-left:29%;display:none">
    Are you sure you want to deactivate your account<br>
    <br><div class="buttonspace" style="justify-content:center"><button class="button" style="background-color:red;padding-left: 5%;
  padding-right: 5%;
  padding-top: 2%;
  padding-bottom: 4%;" id ="yes">yes</button><br><button id="no" class="button" style="background-color:green;padding-right: 5%;padding-left: 5%;
  padding-top: 2%;
  padding-bottom: 4%;">no</button></div>
</div>
<article class="dashboard">

<h1 class="detail_header">Receptionist Details</h1>
    <ul>
    
        <li>Full name<br><strong>Shaf</strong><br></li>
        <li>Gender<br><strong>Male</strong><br></li>
        <li>Phone number<br><strong>0777123456</strong></li>
        <li>Email<br><strong>Shaf@live.com</strong><br></li>
        <li>Age<br><strong>23</strong><br></li>
        <li>Blood Group<br><strong>A+</strong><br></li>
        <li>Nic<br><strong>20012480067</strong><br></li>
        
    </ul>
    <div class="buttonspace">
    <button class="button" type="button" id="deactivate">Deactivate<br></button><br><br>
    <button class="button" type="button" id="update">Update</button></div>
    
</div>
</article>
<script>
        document.getElementById("deactivate").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="block";
            document.getElementsByClassName("dashboard")[0].style.filter = "blur(3px)";
        };
        document.getElementById("no").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="none";
            document.getElementsByClassName("dashboard")[0].style.filter = "";
        }
    </script>
</body>