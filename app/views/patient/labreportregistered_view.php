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

<article class="dashboard">
    
    <!-- <a>Welcome to Gomez</a> -->
    
    <ul style="background-color: white;padding:5%; width:50%">
    <h2>Lab Reports</h2>
    <form style="margin-top: 10%;margin-left:17%;">
        <div class="form-group">
            <label for="labReportNumber">Lab Report Reference Number:</label>
            <input type="text" id="labReportNumber" name="labReportNumber" required class="input">
        </div>

        <div class="form-group">
            <label for="passcode">Passcode(printed on bill):</label>
            <input type="password" id="passcode" name="passcode" required class="input">
        </div>

        <div class="form-group">
        <button type="submit" class="button" >Submit</button>
        </div>
    </form>
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