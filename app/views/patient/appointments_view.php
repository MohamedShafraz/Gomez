<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">

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
    
    <ul style="background-color: white;padding:1% 5% 1% 5%;width: 64%;">
        <form method="post" action="appointments" action="<?=URLROOT.'/patient/appointments'?>">
            <div class="d" style="margin-left: 10%;">
        <a class="search">
           <b> Doctor: </b>
            <input type="text" placeholder="Search.." name="doctor" class="searchbox">
        </a><br>
        <a class="search">
           <b> Date: </b>
            <input type="text" placeholder="Search.." name="date" class="searchbox">
        </a>
        <input type="submit">
        </form>
        <br>
        <table class="complainttable" style="margin-left: -11%; width: 111%;">

    <thead class="complaint" style="margin-left: -37%;    width: 30rem;">
    
            <td style="width: 20%;">Reference Number</td>
            <td style="width: 20%;">Appointment ID</td>
            <td style="width: 20%;">Date</td>
            <td style="width: 20%;">Time</td>
            <td style="width: 20%;">Doctor </td>
        
        <tr style='color:white;margin: 1%;'></tr>
    </thead>
    <tbody class="complaint" style="margin-left: -150%;
    margin-top: 5rem;height: 17rem;    overflow-y: scroll;width: 67rem;overflow-x: clip;scrollbar-width: none;">
        

        <?php 
            for ($i=0; $i < sizeof($data); $i++) { 
                list($date, $time) = explode(" ", $data[$i]['Date']);
                echo "<tr>
                <td style='width: 20%;'>".$data[$i]['refence_No']."</td>
                <td style='width: 20%;'>".$data[$i]['Appointment_Id']."</td>
                <td style='width: 20%;'>".$date."</td>
                <td style='width: 20%;'>".$time."</td>
                <td style='width: 20%;'>".$data[$i]['Doctor_name']."</td>
                
            </tr>";
            echo" <tr style='color:white;margin: 1%;'></tr>";
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