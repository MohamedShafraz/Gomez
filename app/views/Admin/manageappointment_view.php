<?php

?>
<!-- <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'> -->
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/Admin/navbar_view.php"); ?>

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

    .dis {
        display: flex;
        flex-direction: row;
        width: 100%;
    }
</style>
<br><br>
<div class="complainttext">Appointments</div>
<ul style="height: 26rem;padding: 5%;margin-left:22%">
    <form action="./manageappointment/search" method="get">
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
    </form><br><br>

    <div id="appointments" style="height: 59vh;
    overflow-y: scroll;
    overflow-x: hidden;
    scrollbar-width: none;
">
        <?php
        for ($i = 0; $i < sizeof($data); $i++) {
            $image = $data[$i]['image'] ?? "http://localhost/gomez/public/resources/doctor1.png'";
            $name = $data[$i]['Doctor_name'];
            $special = $data[$i]['Specialization'] ?? "Heart specialist";
            $date = $data[$i]['Date'] ?? "11/08/2023";

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
                         
                         <li style='font-size: large;'>" . $date . "</li>
                     </ul>
                 </div>
                  <div style='width: 27%;'>
                     <div class='logbutton' style='height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;border-radius: 0.5rem;box-shadow:none'>
                         <a href='./report?name=$name&?special=$special' style='text-decoration: none;'>
                             <font class='font1'>view</font>
                         </a>
                     </div>
                 </div></div></div><br>";
        }
        ?> </div>


    <!-- Your JavaScript Code -->

</ul>

</article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>