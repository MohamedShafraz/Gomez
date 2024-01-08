<?php require_once(APPROOT."/views/Admin/navbar_view.php");?>
<aside class="sidenav">
    <ul>
        <img src="<?=URLROOT."/resources/user.png"?>" ><br><br>
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
    <div class="scrollable-container">
    <ul class="horizontal-scroll">
        <li class="option"><div><img src=<?php echo URLROOT."/resources/PatientCount2.png"?>></div><div><br>Total Patients<br><a style="font-size:8vh">50<?php // if($users['Patient']){echo $users['Patient'];}else{echo 0;};?></a></div><br><br></li>
        <li class="option"><div><img src=<?php echo URLROOT."/resources/DoctorCount.png"?>></div><div><br>Active Doctors<br><a style="font-size:8vh">10<?php // echo $users['Doctor']?></a></div><br><br></li>
        <li class="option"><div><img src=<?php echo URLROOT."/resources/ReceptionistCount.png"?>></div><div><br>Active Receptionists<br><a style="font-size:8vh">5<?php // echo $users['Receiptionist']?></a><br></li>
        <li class="option"><div><img src=<?php echo URLROOT."/resources/LabAssistantCount.png"?>></div><div><br>Active <br>Lab Assistants<br><a style="font-size:8vh">2<?php // echo $users['Lab-Assistant']?></a></li>
    </ul>

</div>
</div>
</article>

<?php require_once(APPROOT."/views/Admin/footer_view.php");?>