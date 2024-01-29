<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">
<style>
    .buttonspace{
    display: flex;
    justify-content: end;
    font-size: 30px;
    grid-template-columns: repeat(auto-fit, minmax(1rem, 0.3fr));
    gap: 1rem;
}
.popup{
    height: 10vh;
    background-color: white;
    color:black;
    width: 50%;
    align-items: center;
    gap: 1rem;
    position: fixed;
    padding: 5%;
    z-index: 5;
}
.button{
    height: 31px;
  flex-direction: column;
  justify-content: center;
  flex-shrink: 0;
  color: #FFF;
  font-family: 'inter-bold';
  font-size: 10px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
  padding: 10px;
  background-color: var(--Gomez-Purple);
  border-style: hidden;
  border-radius: 6px;
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
        <li  id="appointments" onclick="y('appointments')">
            Appointment
        </li><br>
        <li  id="labreports" onclick="y('labreports')">
            Lab Reports
        </li><br>
        <li  id="treatments" onclick="y('treatments')">
            Treatments
        </li><br>
        <li id="UserInfo" onclick="y('UserInfo')">
            User information
        </li>
    </ul>
</aside>
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
    
    <ul style="background-color: white;padding:5%; width:50%">
    <div class="d" style="margin-left: 10%;">
        <a class="search">
           <b> Doctor: </b>
            <input type="text" placeholder="Search.." name="search" class="searchbox">
        </a><br>
        <a class="search">
           <b> Date: </b>
            <input type="text" placeholder="Search.." name="search" class="searchbox">
        </a>
        <br>
        <table >
        <thead >
            <tr>
                <th >Reference Number</th>
                <th >Appointment ID</th>
                <th >Date</th>
                <th>Time</th>
                <th>Payment</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td></td>
            </tr>
            <tr>
                <td>001245</td>
                <td>01</td>
                <td>18/09/2024</td>
                <td>08.00 AM</td>
                <td>Paid</td>
                <td><a href="view_appointment_details.php"><button class="" style="width:110%;border-radius: 6px;">more</button></a></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>001246</td>
                <td>02</td>
                <td>30/09/2024</td>
                <td>07.00 PM</td>
                <td>Pending</td>
                <td><a href="view_appointment_details.php"><button class="" style="width:110%;border-radius: 6px; ">more</button></a></td>

            </tr>
        </tbody>
        </table>
    </div><br>
        <a href="make_appointment.php"><button class="button" style="margin-left: 55%;">Make appointment</button></a>           
</div>
    <!-- Your JavaScript Code -->
    <script>
        // Sample Data: Replace this with your actual appointment data
        const appointmentsData = [5, 8, 12, 6, 10, 15, 7];

        // Get the chart container element
        const chartContainer = document.getElementById('chartContainer');

        // Create bars based on the data
        appointmentsData.forEach((count, index) => {
            const bar = document.createElement('div');
            bar.className = 'bar';
            bar.style.height = `${count * 10}px`; // Adjust the scaling factor as needed
            chartContainer.appendChild(bar);
        });
    </script>
    </ul>
</div>
</article>
</body>
<script src="<?=URLROOT?>./javascript/dashboard.js"></script>
<script>
    function select2()
{if(document.getElementsByClassName("navbar")[0].style.display=="none"){
    document.getElementsByClassName("navbar")[0].style.display="flex";
}
else{
    document.getElementsByClassName("navbar")[0].style.display="none";
}
}
document.getElementById("deactivate").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="block";
            document.getElementsByClassName("dashboard")[0].style.filter = "blur(3px)";
        };
        document.getElementById("no").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="none";
            document.getElementsByClassName("dashboard")[0].style.filter = "";
        }
        document.getElementById("yes").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="none";
            document.getElementsByClassName("dashboard")[0].style.filter = "";
        }   
</script>