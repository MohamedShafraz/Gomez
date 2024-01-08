<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">
<style>
    .complaint{
        margin-left: 60%;
    }
    .complaint tr{
        display: flex;
  flex-direction: row;
  align-content: center;
  gap: 90px;
  font-size: large;
    }
    .complainttext{
        margin-left: 28%;
  font-size: large;
  background-color: var(--Gomez-Blue);
  color: white;
  width: 68%;
  border-radius: 9px;
  padding: 1%;
  text-align: center;
  font-family: inter;
    }
    .complainttable{
        background-color: beige;
  width: 70%;
  margin-left: 28%;
  padding: 8px 10px;
  border-radius: 9px;
  color: var(--Gomez-Blue);
  font-family: inter;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(13rem, 0fr));
  gap: 1.5rem;
  margin-top: 1%;
    }
</style>
<!-- background-color:#E9F3FD -->
<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
<img src="<?=URLROOT."/resources/gomezlogo2.png"?>" alt="" class="image">
<br>
<br>
<br>

<header class="header">
        <nav class="navbar">
            <img src="<?=URLROOT."/resources/user.png"?>" class="profilepic">
            <a href="#make"><div class="selected">
                <font class="GMfont" style="font-family: 'inter';"> Hello, Shaf</font></div>
            </a>
        </nav>
    </header>
<aside class="sidenav">
    <ul>
        <img src="<?=URLROOT."/resources/user.png"?>" alt=""><br><br>
        <li id="Dashboard" onclick="y('Dashboard')">Dashboard
        </li><br>
        <li  id="manageuser" onclick="y('manageuser')">
            Manage User
        </li><br>
        <li id="UserInfo" onclick="y('UserInfo')">
            User information
        </li>
    </ul>
</aside>
<article >  
    <!-- <a>Welcome to Gomez</a> -->
    <ul class="manageuser">
        <li class="options" style="font-size: 3.5vh;"><div><img src=<?php echo URLROOT."/resources/PatientCount2.png"?>></div><div><br>Manage Patients<br></div><br><br></li>
        <li class="options" style="font-size: 3.5vh;"><div><img src=<?php echo URLROOT."/resources/DoctorCount.png"?>></div><div><br>Manage Doctors<br></div><br><br></li>
        <li class="options" style="font-size: 3.5vh;"><div><img src=<?php echo URLROOT."/resources/ReceptionistCount.png"?>></div><div><br>Manage Receptionists<br><br></li>
        <li class="options" style="font-size: 3.5vh;"><div><img src=<?php echo URLROOT."/resources/LabAssistantCount.png"?>></div><div><br>Manage <br>Lab Assistants<br></li>
    </ul>
<div class="complainttext">Complaints</div>
    <table class="complainttable">
       
        
        <tbody class="complaint">
        <tr>
                <td>Name</td>
                <td>Type</td>
                <td>Description</td>
                <td>Date</td>
                <td>Time</td>
            </tr>
            <tr>
            <td>Sam</td>
            <td>Doc</td>
            <td>Delete</td>
            <td>4/1/2024</td>
            <td>11:59</td>
            </tr>
            <tr>
            <td>Sam</td>
            <td>Doc</td>
            <td>Delete</td>
            <td>4/1/2024</td>
            <td>11:59</td>
            </tr>
        </tbody>

    </table>


</article>
</body>
<script src="<?=URLROOT?>./javascript/dashboard.js"></script>