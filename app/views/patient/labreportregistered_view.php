<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<style>
    .buttonspace {
        display: flex;
        justify-content: end;
        font-size: 30px;
        grid-template-columns: repeat(auto-fit, minmax(1rem, 0.3fr));
        gap: 1rem;
    }

    .popup {
        height: 10vh;
        background-color: white;
        color: black;
        width: 50%;
        align-items: center;
        gap: 1rem;
        position: fixed;
        padding: 5%;
        z-index: 5;
    }

    .button {
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
    <?php include APPROOT . '/views/patient/navbar_view.php' ?>


    <article class="dashboard">

        <!-- <a>Welcome to Gomez</a> -->


        <ul style="width: 64rem;height: 26rem;padding: 3rem 3rem 4rem 4rem;margin: 3rem 0rem 0rem 20rem;">
            <form action="" method="get">
                <section class="make" id="make" style="margin-top: -4rem;margin-left: 1rem;background: #FFF;display: flex;flex-direction: row;width: 33.5rem;padding: 2%;">

                    <div class="dis" style="margin: 0rem 0rem 0rem -1rem;">
                        <label for="testname" style="font-weight: bold;font-size: 22px;"> Test Name :&ensp; </label>
                        <input type="text" name="testname" id="testname" placeholder="Max- 20 Characters" class="holder" value="<?= $_GET['testname'] ?? "" ?>" oninput="console.log(this.value)">
                    </div>

                    <input class='logbutton font1' id="maked" style="font-size: medium; margin: 0rem 0rem 0rem 3rem;border-radius: 1rem;padding: 0.5% 3%;box-shadow: none;width: 5rem;color: white;" type="submit" value="search">

                    <br>
                </section>
            </form>
            <br>

            <div id="appointments" style="height: 59vh;width: 66rem;overflow-y: scroll;overflow-x: hidden;scrollbar-width: none;
">
                <?php
                if (sizeof($data) == 0) {
                    echo "<div class='flex-item' style='padding: 0.5rem;background: white;width:55.5rem;margin-left:1rem'>
            <div style='display: flex;flex-direction: row;'>
                <div style='width: 20%;'></div>
                <div style='font-family:Inter;margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                    <center>No matches found</center>
                </div>
                
                
                 <div style='width: 27%;'>
                 
                    
                </div></div></div><br>";
                }
                for ($i = 0; $i < sizeof($data); $i++) {
                    $file = $data[$i]["File_Name"];
                    $filename = $data[$i]['Test_Name'];
                    $refno = $data[$i]['Reference_No'];


                    echo "<div class='flex-item' style='padding: 0.5rem;background: white;width: 64.5rem;;margin-left:1rem'>
             <div style='display: flex;flex-direction: row;'>
                 
                 <div style='margin: -1rem 0rem 0rem 0rem;font-weight: bold;font-size: 1.6rem; padding: 2rem 0rem 1rem 0rem;width: 37%;'>
                     <ul style='list-style-type: none;padding:0;margin: 0rem;'>
                         <li>Reference Number</li>
                         <li style='font-size: medium;'>" . $data[$i]['Reference_No'] . "</li>
                     </ul>
                 </div>
                 <div style='margin: -1rem 0rem 0rem 0rem;font-weight: bold;font-size: 1.6rem;padding: 2rem 0rem 1rem 0rem;width: 24%;'>
                     <ul style='list-style-type: none;padding:0;margin: 0rem;'>
                         <li>Passcode</li>
                         <li style='font-size: medium;'>" . $data[$i]['Passcode'] . "</li>
                     </ul>
                 </div>
                 <div style='    margin: -1rem 0rem 0rem 0rem;font-weight: bold;font-size: 1.6rem;padding: 2rem 0rem 1rem 0rem;width: 25%;'>
                     <ul style='list-style-type: none;padding:0;margin: 0rem;'>
                         <li>Test Name</li>
                         <li style='font-size: medium;'>" . $data[$i]['Test_Name'] . "</li>
                     </ul>
                 </div>
                 <div style='margin: -1rem 0rem 0rem 0rem;font-weight: bold;font-size: 1.6rem;padding: 2rem 0rem 1rem 0rem;width: 16%;'>
                     <ul style='list-style-type: none;padding:0;margin: 0rem;'>
                         <li>Status</li>
                         <li style='font-size: medium;'>" . $data[$i]['Status'] . "</li>
                     </ul>
                 </div>
                 <div class='logbutton' style='height: fit-content;padding: 0.5rem;margin: 1rem 3rem 0rem 0rem;border-radius: 0.5rem;box-shadow:none;    width: 4rem;'>
                         <a href=" . URLROOT . "/LabAssistant/ReportView/" . $file . "  style='text-decoration: none;'>
                             <font class='font1'>View</font>
                         </a>
                     </div>
                     <div class='logbutton' style='height: fit-content;padding: 0.5rem;margin: 1rem 1rem 0rem 0rem;border-radius: 0.5rem;box-shadow:none'>
                         <a href=" . URLROOT . "/LabAssistant/ReportView/" . $file . " style='text-decoration: none;'>
                             <font class='font1'>Download</font>
                         </a>
                     </div>
                 
                 </div></div><br>";
                }
                echo "</div>";
                ?>

            </div>


        </ul>
    </article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>