<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">
<style>
   .flex-container {
      display: flex;
      flex-wrap: wrap;
      
      /* justify-content: space-between; Adjust as needed */
    }

    .flex-item {
      width: calc(50% - 10px); /* Adjust width and margin as needed */
      
      box-sizing: border-box;
      border: 1px solid #ccc; /* Optional: Add borders for clarity */
      grid-column-gap: 3rem;
    /* flex-direction: column; */
    display: flex;
    flex-direction: row;
    }
    img {
      max-width: 100%;
      height: auto;
    }
    .custom-div:hover {
        background-color: #8393ca; /* Change to the desired hover background color */
    }
    .flex-container {
      display: flex;
      flex-wrap: wrap;
      
      /* justify-content: space-between; Adjust as needed */
    }

    .flex-item {
      width: calc(50% - 10px); /* Adjust width and margin as needed */
      
      box-sizing: border-box;
      border: 1px solid #ccc; /* Optional: Add borders for clarity */
      grid-column-gap: 3rem;
    /* flex-direction: column; */
    display: flex;
    flex-direction: row;
    }
    img {
      max-width: 100%;
      height: auto;
    }

</style>

<!-- background-color:#E9F3FD -->
<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
        <?php include APPROOT.'/views/patient/navbar_view.php'?>

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
    
    <!-- <a>Welcome to Gomez</a> -->
    
    <ul style="height: 26rem;background-color: white;padding: 5%;width: 62rem;">
    
    <div class="users" style="height: 9rem;margin: 2rem;float: left;gap: 5%;width: 10rem;"><img src="<?=URLROOT."/public/resources/doctor1.png"?>" style="padding: 1rem 1rem 1rem 1rem;height: 9rem;width: 12rem;border: 1px solid;" ></div>
    <div class="users" style="height: 9rem;margin: 2rem;float: left;gap: 5%;width: 10rem;">
        <ul style="width: max-content;">
            <li> <b> Appointment</b></li><br>
            <li>Date:</li><br>
            <li>Time:</li><br>
            <li>Appointment ID:</li>
        </ul>
    </div>
    <div class="users" style="height: 9rem;margin: 2rem;float: left;gap: 5%;width: 10rem;">
        <ul style="width: max-content;">
            <li> <b> Patient</b></li><br>
            <li>Name:</li><br>
            <li>Phone Number:</li><br>
            <li>Nic:</li>
        </ul>
    </div>


    </ul>

</article>
</body>
<script src="<?=URLROOT?>./javascript/dashboard.js"></script>
