<?php
$sidebar = "<div class='sidebarselected' id='select1'>Dashbboard<br></div><div class='sidebarunselected' id='unselect1'>Manage users<br></div><div class='sidebarunselected' id='unselect2'>Manage schedules<br></div><div class='sidebarunselected' id='unselect3'>Reminder<br></div><div class='sidebarunselected' id='unselect10'>User Info<br></div>";
?>
<body style="background-image: var(--Gomez-Login-Box-Purple);">
<br>
<article class="dashboard">
    
    <ul>
    
        <li class="option"><img src="resources/TotalVisitorCount.png">Total<br> Visitors<br><a style="font-size:6vh"><?php echo $Visitorcount;?></a><br><br></li>
        <li class="option" style='background-color:#3ad3a0'><img src="resources/PatientCount.png">Total<br>Patients<br><a style="font-size:6vh"><?php echo $users['Patient']?></a><br><br></li>
        <li class="option" style="background-color: #1e87c7;"><img src="resources/DoctorCount.png">Active<br>Doctors<br><a style="font-size:6vh"><?php echo $users['Doctor']?></a><br><br></li>
        <li class="option" style="background-color: #da952a;"><img src="resources/NurseCount.png">Active<br>Nurses<br><a style="font-size:6vh"><?php echo $users['Nurse']?></a><br></li>
        <li class="option" style="background-color: #da2a2a;"><img src="resources/ReceptionistCount.png">Active<br>Receptionists<br><a style="font-size:6vh"><?php echo $users['Receiptionist']?></a><br></li>
        <li class="option" style="background-color: #7a2ada;"><img src="resources/LabAssistantCount.png">Active<br>Lab<br>Assistants<br><a style="font-size:6vh"><?php echo $users['Lab-Assistant']?></a></li>
    </ul>
    
    
</div>
</article>
</body>