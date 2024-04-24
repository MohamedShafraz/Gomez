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
    
    
    <ul style="height: 26rem;padding: 5%;margin-left:22%">
    <form action="" method="get">
        <section class="make" id="make" style="    margin-top: -4rem;
    margin-left: 1rem;
    background: #FFF;
    display: flex;
    flex-direction: row;
    width: 54rem;
    padding: 2%;">

            <div class="dis">
                <label for="Doctor" style="font-weight: bold;font-size: 22px;"> Doctor Name :&ensp; </label>
                <input type="text" name="doctor" id="Doctor" placeholder="Max- 20 Characters" class="holder">
            </div>

            <div class="dis">
                <label for="Date" style="font-weight: bold;font-size: 22px;">Date :&ensp;</label>
                <input type="date" name="Date" id="Date" date-placeholder="11/6/2023" class="holder">
            </div>




            <input class='logbutton font1' id="maked" style="border-radius: 15%;
    padding: 0.5% 1%;
    box-shadow: none;width:7%;color:white;
" type="submit" value="search">

            <br>
        </section>
    </form>
    <br>

    <div id="appointments" style="height: 59vh;width:57rem;
    overflow-y: scroll;
    overflow-x: hidden;
    scrollbar-width: none;
">
        <?php
        for ($i = 0; $i < sizeof($data); $i++) {
            $image = $data[$i]['image'] ?? "http://localhost/gomez/public/resources/doctor1.png'";
            $name = $data[$i]['Doctor_name'];
            $Date =$data[$i]['Date'];
            $special = $data[$i]['Specialization'] ?? "Heart specialist";
            echo "<div class='flex-item' style='padding: 0.5rem;background: white;width:55.5rem;margin-left:1rem'>
             <div style='display: flex;flex-direction: row;'>
                 <div style='width: 20%;'><img src='" . $image . " style='padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;'></div>
                 <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                     <ul style='list-style-type: none;padding:0;'>
                         <li>" . $name . "</li>
                         <li style='font-size: medium;'>" . $special . "</li>
                     </ul>
                 </div>
                 <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                     <ul style='list-style-type: none;padding:0;'>
                         <li>" . $Date . "</li>
                         
                     </ul>
                 </div>
                  <div style='width: 27%;'>
                  
                     <div class='logbutton' style='height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;border-radius: 0.5rem;box-shadow:none'>
                         <a href='' style='text-decoration: none;'>
                             <font class='font1'>More</font>
                         </a>
                     </div>
                 </div></div></div><br>";
        }
        ?> 
        </div>
        <a href="<?=URLROOT."/patient/appointments/make"?>"><button class="button" style="font-size: initial;height: max-content;width: max-content;margin: 0.5rem 0rem 0rem 48rem;;background-color: var(--Gomez-highlight);">Make appointment</button></a>           

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