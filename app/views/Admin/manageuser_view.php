<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/Admin/navbar_view.php"); ?>

<!-- <a>Welcome to Gomez</a> -->
<ul class="manageuser">
    <li id="manageuser/patient" onclick="y('manageuser/patient')" class="options" style="font-size: 3.5vh;">
        <div><img src=<?php echo URLROOT . "/resources/PatientCount2.png" ?>></div>
        <div><br>Manage Patients<br></div><br><br>
    </li>
    <li class="options" style="font-size: 3.5vh;" onclick="y('manageuser/doctor')" id="manageuser/doctor">
        <div><img src=<?php echo URLROOT . "/resources/DoctorCount.png" ?>></div>
        <div><br>Manage Doctors<br></div><br><br>
    </li>
    <li class="options" style="font-size: 3.5vh;" onclick="y('manageuser/receptionist')" id="manageuser/receptionist">
        <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
        <div><br>Manage Receptionists<br><br>
    </li>
    <li class="options" style="font-size: 3.5vh;" onclick="y('manageuser/labAssistant')" id="manageuser/labAssistant">
        <div><img src=<?php echo URLROOT . "/resources/LabAssistantCount.png" ?>></div>
        <div><br>Manage <br>Lab Assistants<br>
    </li>
</ul>
<div class="complainttext">Complaints</div>
<table class="complainttable">


    <tbody class="complaint">
        <tr>
            <td style="width: 120px;">Name</td>
            <td style="width: 163px;">Type</td>
            <td style="width: 249px;">Description</td>
            <td style="width: 169px;">Date</td>
            <td style="width: 60px;">Time</td>
        </tr>
        <tr style='color:white;margin: 3%;'></tr>

        <tr>
            <td style='width: 120px;'>Saj</td>
            <td style='width: 156px;'>Doc</td>
            <td style='width: 144px;'>Reactivate</td>
            <td style='width: 120px;'>4/1/2024</td>
            <td style='width: 60px;'>11:59</td>
        </tr>
        <tr style='color:white;margin: 3%;'></tr>
        <tr>
            <td style='width: 120px;'>Saj</td>
            <td style='width: 156px;'>Doc</td>
            <td style='width: 144px;'>Reactivate</td>
            <td style='width: 120px;'>4/1/2024</td>
            <td style='width: 60px;'>11:59</td>
        </tr>
        <tr style='color:white;margin: 3%;'></tr>
    </tbody>

</table>


</article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>