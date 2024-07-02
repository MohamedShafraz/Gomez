<?php

?>

<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">


<!-- background-color:#E9F3FD -->

<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
    <?php include APPROOT . '/views/receptionist/navbar_view.php' ?>

    <article class="dashboard">
        <ul style="height: 26rem;padding: 5%;margin-left:22%">
            <form action="" method="get">
                <section class="make" id="make" style="margin-top: -4rem;margin-left: 1rem;background: #FFF;display: flex;flex-direction: row;width: 29rem;padding: 2%;">

                    <div class="dis">
                        <label for="Doctor" style="font-weight: bold;font-size: 22px;"> Doctor Name :&ensp; </label>
                        <input type="text" name="doctor" id="Doctor" placeholder="Max- 20 Characters" class="holder">
                    </div>
                    <input class='logbutton font1' id="maked" style="border-radius: 15%;
    padding: 0.5% 2.5%;
    box-shadow: none;width:4rem;color:white;
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

                    $doctor_name = $data[$i]['fullname'] ?? "Ram";
                    $specialization = $data[$i]['Specialization'] ?? "ENT";
                    $username = $data[$i]['Username'] ?? '';
                    $image = $data[$i]['profilepicture'] != '' ? "data:image/png;base64," . base64_encode($data[$i]['profilepicture']) : URLROOT . "/resources/doctor1.png";
                    echo "<div class='flex-item' style='padding: 0.5rem;background: white;width:55.5rem;margin-left:1rem'>
                    <div style='display: flex;flex-direction: row;'>
                        <div style='width: 20%;'><img src='" . $image . "' style='padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;'></div>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                            <ul style='list-style-type: none;padding:0;'>
                                <li>$doctor_name</li>
                                <li style='font-size: medium;'>$specialization</li>
                            </ul>
                        </div>


                        <div style='width: 27%;'>

                            <div class='logbutton' style='height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;border-radius: 0.5rem;box-shadow:none'>
                                <a href=" . URLROOT . "/receptionist/appointments/more1?doctor=$username style='text-decoration: none;'>
                                    <font class='font1'>More</font>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><br>";
                }

                ?>
            </div>

        </ul>
        <!-- <a>Welcome to Gomez</a> -->



    </article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>