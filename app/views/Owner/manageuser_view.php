<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/Owner/navbar_view.php"); ?>

<!-- <a>Welcome to Gomez</a> -->
<style>
    .heading {
        position: fixed;
        padding: 0% 8.0% 0% 9%;
        margin-top: 0.7%;
        width: 70%;
        margin-left: 27.6%;
        padding: 8px 10px;
        border-radius: 9px;
        color: var(--Gomez-Blue);
        font-family: inter;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(13rem, 0fr));
        gap: 1.5rem;
        display: flex;
        flex-direction: row;
        align-content: center;
        gap: 85px;
        font-size: large;
        /* width: 795px; */
        background-color: beige;
        width: 679px;
        padding: 0% 7.9% 0% 9.1%;
        line-height: 7vh;
        border-radius: 8px;
    }
</style>
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
<div class="complaintheader" style="
    width: 26%;margin-bottom: 0.4%;
">
    <a>Name</a>
    <a>Type</a>
    <a style="
    margin-left: 10%;
">Description</a>
    <a style>Date</a>
    <a style="
    margin-left: 10%;
">Time</a>
</div>
<table class="complainttable" style="height: 19vh;">
    <tbody class="complaint">
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