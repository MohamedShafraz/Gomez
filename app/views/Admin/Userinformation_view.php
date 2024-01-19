<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">

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
<article class="dashboard">
    
    <!-- <a>Welcome to Gomez</a> -->
    
    <ul style="background-color: white;padding:5%; width:50%">
    <div class="users" style="float: left;gap: 5%;width:50% ;"><img src="<?=URLROOT."/public/resources/user.jpeg"?>" alt="Profile Picture" style="width: 73%;"></div>   
           <li class="users">Full Name : Shaf<br><br></li>
        <li class="users">Gender : Male<br><br></li>
        <li class="users">Age : 20<br><br></li>
        <li class="users">Phone number : 0777123456<br><br></li>
        <li class="users">Email : Shaf@live.com<br><br></li>

        <div id="chartContainer"></div>

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