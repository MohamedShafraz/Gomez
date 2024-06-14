<?php

?>

<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">


<!-- background-color:#E9F3FD -->

<body style="background-image:linear-gradient(90deg,white,#E9F3FD);overflow:hidden">
    <?php include APPROOT . '/views/receptionist/navbar_view.php' ?>

    <article class="dashboard">
        <ul style="height: 26rem;padding: 5%;margin-left:22%">
            <form action="" method="get">
                <section class="make" id="make" style="margin-top: -4rem;margin-left: 1rem;background: #FFF;display: flex;flex-direction: row;width: 29rem;padding: 2%;">

                    <div class="dis">
                        <label for="name" style="font-weight: bold;font-size: 22px;"> Patient Name :&ensp; </label>
                        <input type="text" name="name" id="name" placeholder="Max- 20 Characters" class="holder">
                    </div>
                    <input class='logbutton font1' id="maked" style="border-radius: 15%;
    padding: 0.5% 2.5%;
    box-shadow: none;width:4rem;color:white;
" type="submit" value="search">

                    <br>
                </section>
            </form>
            <br>
            <div class='flex-item' style='padding: 0.5rem;background: white;width: 62.5rem;margin-left: 1rem;'>
                <div style='display: flex;flex-direction: row;'>
                    <div style='width: 20%;'><img src="<?= URLROOT . "/resources/doctor1.png" ?>" style='padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;'></div>
                    <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                        <ul style='list-style-type: none;padding:0;'>
                            <li><?php echo $data[0]['doctor_name']; ?></li>
                            <li style='font-size: medium;'><?php echo $data[0]['Specialization']; ?></li>
                        </ul>
                    </div>
                    <div style='margin: -0.5rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width: 53%;'>
                        <?php echo $data[0]['date']; ?>
                    </div>
                    <div style='margin: -0.5rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width: 48%;'>
                        <?php echo explode(':', $data[0]['start_time'])[0] . "-" . explode(':', $data[0]['end_time'])[0]; ?>
                    </div>

                    <div style='width: 27%;'>

                        <div class='logbutton' style='height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;border-radius: 0.5rem;box-shadow:none'>
                            <a href="" style='text-decoration: none;'>
                                <font class='font1'>Cancel Session</font>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <br>
            <div style="height: 22rem;width: 65rem;overflow-y: scroll;overflow-x: hidden;scrollbar-width: none;">


                <?php
                for ($i = 0; $i < sizeof($data); $i++) {
                    $name = $data[$i]['full'];
                    $phone_number = $data[$i]['phonenumber'];
                    $nic = $data[$i]['nic'];
                    echo "
                <div class='flex-item' style='padding: 0.5rem;background: white;width:62.5rem;margin-left:1rem'>
                    <div style='display: flex;flex-direction: row;'>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: x-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                            <ul style='list-style-type: none;padding:0;margin: 0.5rem 1rem 0.5rem 1rem;'>
                                <li>Name</li>
                                <li style='font-size: medium;'>$name</li>
                            </ul>
                        </div>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: x-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                            <ul style='list-style-type: none;padding:0;margin: 0.5rem 1rem 0.5rem 1rem;'>
                                <li>Phone Number</li>
                                <li style='font-size: medium;'>0$phone_number</li>
                            </ul>
                        </div>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: x-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                            <ul style='list-style-type: none;padding:0;margin: 0.5rem 1rem 0.5rem 1rem;'>
                                <li>NIC</li>
                                <li style='font-size: medium;'>$nic</li>
                            </ul>
                        </div>


                        
                    </div></div><br>";
                }
                ?>





            </div>

        </ul>
        <!-- <a>Welcome to Gomez</a> -->



    </article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>