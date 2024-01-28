<?php require_once(APPROOT."/views/Doctor/navbar_view.php");?>
<aside class="sidenav">
    <ul>
        <img src="<?=URLROOT."/resources/user.png"?>" ><br><br>
        <li><a href="<?=URLROOT."/DoctorController"?>">Dashboard</a></li>
        <li><a href="<?=URLROOT."/DoctorController/ViewAppointment/"?>">Appointment</a></li>
        <li><a href="<?=URLROOT."/DoctorController/ViewPrescription"?>">Prescription</a></li>
        <li><a href="<?=URLROOT."/DoctorController/ViewReminder"?>">Reminder</a></li>
    </ul>

    <style>
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    ul li a {
        text-decoration: none;
        color: inherit;
    }
</style>



</aside>
<article class="dashboard">
    <div style="margin-left:24%;">
    <h1 style="text-align: center;">Reminder View</h1>
        
    
    </div>
</div>
</div>
</article>

<?php require_once(APPROOT."/views/Admin/footer_view.php");?>