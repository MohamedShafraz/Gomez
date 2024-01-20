<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">
<style>
    .complaint{
        margin-left: 1%;
    }
    .complaint tr{
        display: flex;
  flex-direction: row;
  align-content: center;
  gap: 90px;
  font-size: large;
  /* width: 795px; */
  background-color: beige;
  width: 679px;
  padding: 0% 52% 0% 58%;
  line-height: 7vh;
  border-radius: 8px;

    }
    .complainttext{
        margin-left: 28%;
  font-size: x-large;
  background-color: var(--Gomez-Blue);
  color: white;
  width: 66%;
  border-radius: 9px;
  padding: 1%;
  text-align: center;
  font-family: inter;
    }
    .complainttable{
        /* background-color: beige; */
  width: 70%;
  margin-left: 27%;
  padding: 8px 10px;
  border-radius: 9px;
  color: var(--Gomez-Blue);
  font-family: inter;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(13rem, 0fr));
  gap: 1.5rem;
    }
</style>
<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT."/views/Admin/navbar_view.php");?>
 
    <!-- <a>Welcome to Gomez</a> -->
    <ul class="manageuser">
        <li class="options" style="font-size: 3.5vh;"><div><img src=<?php echo URLROOT."/resources/PatientCount2.png"?>></div><div><br>Manage Patients<br></div><br><br></li>
        <li class="options" style="font-size: 3.5vh;"><div><img src=<?php echo URLROOT."/resources/DoctorCount.png"?>></div><div><br>Manage Doctors<br></div><br><br></li>
        <li class="options" style="font-size: 3.5vh;"><div><img src=<?php echo URLROOT."/resources/ReceptionistCount.png"?>></div><div><br>Manage Receptionists<br><br></li>
        <li class="options" style="font-size: 3.5vh;"><div><img src=<?php echo URLROOT."/resources/LabAssistantCount.png"?>></div><div><br>Manage <br>Lab Assistants<br></li>
    </ul>
<div class="complainttext">Complaints</div>
    <table class="complainttable">
       
        
        <tbody class="complaint">
        <tr>
                <td>Name</td>
                <td>Type</td>
                <td>Description</td>
                <td>Date</td>
                <td>&emsp;&emsp;Time</td>
            </tr>
            <tr style="color:white;margin: 3%;"></tr>
            <tr>
            <td>Saj &emsp;</td>
            <td>&nbsp;Doc</td>
            <td>&nbsp;Reactivate</td>
            <td>4/1/2024</td>
            <td>11:59</td>
            </tr>
            <tr style="color:white;margin: 3%;"></tr>
            <tr>
            <td>Sam&emsp;</td>
            <td>pat&emsp;</td>
            <td>Access Denied</td>
            <td>3/1/2024</td>
            <td>10:12</td>
            </tr>
        </tbody>

    </table>


</article>
</body>
<script src="<?=URLROOT?>./javascript/dashboard.js"></script>