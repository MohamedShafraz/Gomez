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
        <?php include APPROOT.'/views/patient/navbar_view.php'?>

<div class="popup" style="margin-top:9%;margin-right:29%;margin-left:29%;display:none">
    Are you sure you want to deactivate your account<br>
    <br><div class="buttonspace" style="justify-content:center"><button class="button" style="background-color:red;padding-left: 5%;
  padding-right: 5%;
  padding-top: 2%;
  padding-bottom: 4%;" id ="yes">yes</button><br><button id="no" class="button" style="background-color:green;padding-right: 5%;padding-left: 5%;
  padding-top: 2%;
  padding-bottom: 4%;">no</button></div>
</div>
<article class="dashboard">
    
    <!-- <a>Welcome to Gomez</a> -->
    
    <ul style="background-color: white;padding:5%;width: 64%;">
    <div class="d" style="margin-left: 10%;">
        <a class="search">
           <b> Doctor: </b>
            <input type="text" placeholder="Search.." name="search" class="searchbox">
        </a><br>
        <a class="search">
           <b> Date: </b>
            <input type="text" placeholder="Search.." name="search" class="searchbox">
        </a>
        <br>
        <table class="complainttable" style="margin-left: -11%; width: 111%;">


    <tbody class="complaint" style="margin-left: -33%;">
        <tr>
            <td style="width: 20%;">Reference Number</td>
            <td style="width: 20%;">Appointment ID</td>
            <td style="width: 20%;">Date</td>
            <td style="width: 20%;">Time</td>
            <td style="width: 20%;">Doctor </td>
        </tr>
        <tr style='color:white;margin: 3%;'></tr>

        <?php 
            for ($i=0; $i < 2; $i++) { 
                echo "<tr>
                <td style='width: 20%;'>".$data[$i]['refence_No']."</td>
                <td style='width: 20%;'>".$data[$i]['Appointment_Id']."</td>
                <td style='width: 20%;'>".$data[$i]['Date']."</td>
                <td style='width: 20%;'>".$data[$i]['Appointment_Time']."</td>
                <td style='width: 20%;'>".$data[$i]['Doctor_name']."</td>
                
            </tr>";
            echo" <tr style='color:white;margin: 3%;'></tr>";
            }
            ?>
        
    </tbody>

</table>
    </div><br>
        <a href="<?=URLROOT."/patient/appointments/make"?>"><button class="button" style="font-size: initial;height: max-content;width: max-content;margin-left: 81%;background-color: var(--Gomez-highlight);">Make appointment</button></a>           
</div>
    <!-- Your JavaScript Code -->
    
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