<?php require_once(APPROOT."/views/Doctor/navbar_view.php");?>
<aside class="sidenav">
    <ul>
        <img src="<?=URLROOT."/resources/user.png"?>" ><br><br>
        <li id="Dashboard" onclick="y('Dashboard')" >Dashboard</li>
        <li id="DoctorController/ViewAppointment" onclick="y('DoctorController/ViewAppointment')" >Appointment</li>
        <li id="DoctorController/ViewPrescription" onclick="y('DoctorController/ViewPrescription')" > Prescription </li>
        <li id="DoctorController/ViewReminder" onclick="y('DoctorController/ViewReminder')" > Reminder </li>
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
    <h1 style="text-align: center;">THIS IS DOCTOR DASHBOARD</h1>
        <?php
      var_dump($_SESSION["USER"]);
    ?>
    
    </div>
</div>
</div>
</article>

<?php require_once(APPROOT."/views/Admin/footer_view.php");?>