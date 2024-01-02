<?php
// include_once(APPROOT."/views/header_view.php");
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
        <li class="active">dashboard
        </li><br>
        <li>
            Manage User
        </li><br>
        <li>
            User information
        </li>
    </ul>
</aside>
<article class="dashboard">
    
    <!-- <a>Welcome to Gomez</a> -->
    <ul>
        <li class="option"><div><img src=<?php echo URLROOT."/resources/PatientCount2.png"?>></div><div><br>Total Patients<br><a style="font-size:8vh">50<?php // if($users['Patient']){echo $users['Patient'];}else{echo 0;};?></a></div><br><br></li>
        <li class="option"><div><img src=<?php echo URLROOT."/resources/DoctorCount.png"?>></div><div><br>Active Doctors<br><a style="font-size:8vh">10<?php // echo $users['Doctor']?></a></div><br><br></li>
        <li class="option"><div><img src=<?php echo URLROOT."/resources/NurseCount.png"?>></div><div><br>Active Nurses<br><a style="font-size:8vh">10<?php // echo $users['Nurse']?></a></div><br></li>
        <li class="option"><div><img src=<?php echo URLROOT."/resources/ReceptionistCount.png"?>></div><div><br>Active Receptionists<br><a style="font-size:8vh">5<?php // echo $users['Receiptionist']?></a><br></li>
        <li class="option"><div><img src=<?php echo URLROOT."/resources/LabAssistantCount.png"?>></div><div><br>Active <br>Lab Assistants<br><a style="font-size:8vh">2<?php // echo $users['Lab-Assistant']?></a></li>
    </ul>
</div>
</article>
</body>