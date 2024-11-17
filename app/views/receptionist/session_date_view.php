<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
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
                        <label for="date" style="font-weight: bold;font-size: 22px;"> Date :&ensp; </label>
                        <input type="date" name="Date" id="Date" date-placeholder="11/6/2023" class="holder">
                    </div>
                    <input class='logbutton font1' id="maked" style="border-radius: 15%;padding: 0.5% 2.5%;box-shadow: none;width:4rem;color:white;" type="submit" value="search">

                    <br>
                </section>
            </form>
            <br>
            <?php
            $name = $data[0][0]['fullname'];
            $name = $data[0][0]['Username'];
            $specialization = $data[0][0]['Specialization'];
            echo "
            <div class='flex-item' style='padding: 0.5rem;background: white;width:55.5rem;margin-left:1rem'>
                    <div style='display: flex;flex-direction: row;'>
                        <div style='width: 20%;'><img src='" . URLROOT . "/resources/doctor1.png' style='padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;'></div>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                            <ul style='list-style-type: none;padding:0;'>
                                <li>$name</li>
                                <li style='font-size: medium;'>$specialization</li>
                            </ul>
                        </div>
                        
                        <div style='width: 27%;'>

                            
                        </div>
                    </div>
                    
                </div><br><div id='appointments' style='height: 11rem;width:58rem;overflow-y: scroll;overflow-x: hidden;scrollbar-width: none;'>";
            for ($i = 0; $i < sizeof($data[0]); $i++) {

                $date = $data[0][$i]['date'];
                $start_time = $data[0][$i]['start_time'];
                $end_time = $data[0][$i]['end_time'];
                echo "<div class='flex-item' style='padding: 0.5rem;background: white;width:55.5rem;margin-left:1rem'>
                    <div style='display: flex;flex-direction: row;'>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: x-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                            $date
                        </div>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: x-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                        $start_time -$end_time
                        </div>


                        <div style='width: 27%;'>

                            <div class='logbutton' style='height: fit-content;padding: 0.5rem;margin: 0.3rem 0rem 0rem 0rem;border-radius: 0.5rem;box-shadow:none'>
                                <a href='" . URLROOT . "/receptionist/appointments/more2?doctor=$name' style='text-decoration: none;'>
                                    <font class='font1'>More</font>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div><br>";
            }
            echo "</div>

            
            </div><br>";
            ?>
            <hr style="margin-left: -5.1rem;border-width: medium;width: 74.6rem;">
            <div class='flex-item' style='padding: 0.5rem;background: white;width:55.5rem;margin-left:1rem;height: 8rem;'>
                <form action="" method="post">
                    <div style="font-size: x-large;font-weight: bold;">New Session</div>
                    <div style='display: flex;flex-direction: row;'>

                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: larger;padding: 2rem 0rem 1rem 0rem;width:11rem'>
                            <ul style='list-style-type: none;padding:0;margin:0px 3px 0px 3px;'>
                                <li>Date</li>
                                <li style='font-size: medium;'><input style="padding: 3%;width:10rem" type="date" name="Date" id="Date" class="holder" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+7 days')); ?>" required></li>
                            </ul>
                        </div>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: larger;    padding: 2rem 0rem 1rem 0rem;width: 11rem;'>
                            <form action="" <?= URLROOT . "/receptionist/appointments/create" ?>"" method="post">
                                <ul style='list-style-type: none;padding:0;margin: 0px 3px 0px 3px;'>
                                    <li>Start Time</li>
                                    <li style='font-size: medium;'>
                                        <select name="start_time" id="start_time" style="padding: 3%;width: 10rem;" onchange="document.getElementById('end_time').options.selectedIndex = document.getElementById('start_time').options.selectedIndex" required>
                                            <script>

                                            </script>


                                        </select>
                                    </li>
                                </ul>
                        </div>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: larger;padding: 2rem 0rem 1rem 0rem;width: 11rem;'>
                            <ul style='list-style-type: none;padding:0;margin: 0px 3px 0px 3px;'>

                                <li>End Time</li>
                                <li style='font-size: medium;'>

                                    <select name="end_time" name='end_time' id="end_time" disabled="disabled" style="padding: 3%;    width: 10rem;">

                                        <script>
                                            dates = [];
                                            time = [];


                                            <?php


                                            echo "for (let index = 8; index < 23; index++) {
                                        const node = document.createElement('option');
                                        const textnode = document.createTextNode(index + ':00');
                                        node.appendChild(textnode);
                                        document.getElementById('start_time').appendChild(node);
                                        const node1 = document.createElement('option');
                                            const textnode1 = document.createTextNode(index+1 + ':00');
                                            node1.appendChild(textnode1);
                                            document.getElementById('end_time').appendChild(node1);
                                    }"
                                            ?>
                                        </script>
                                    </select>
                                </li>
                                </li>
                </form>
        </ul>
        </div>
        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: larger;padding: 2rem 0rem 1rem 0rem;width:11rem'>
            <form action="" <?= URLROOT . "/receptionist/appointments/create" ?>"" method="post">
                <ul style='list-style-type: none;padding:0;margin: 0px 3px 0px 3px;'>
                    <li>Maximum Patients</li>
                    <input type="number" style="width: 10rem;height: 1.8rem;">
                    </li>
                </ul>
        </div>

        <div style='width: 20%;'>

            <div class='logbutton' style='height: fit-content;padding: 0.5rem;margin: 1.20rem 0rem 0rem 1rem;;border-radius: 0.5rem;box-shadow:none'>
                <a style='text-decoration: none;'>
                    <font class='font1'><input type="submit" name="create" value="Create Session" style="font-weight: bold;background: transparent;border: none;color: #f7f5f5;"></font>
                </a>
            </div>
        </div>
        </div>
        </form>
        </div>



        </ul>
        <!-- <a>Welcome to Gomez</a> -->



    </article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var timeInput = document.getElementById('timeInput');

        // Restrict input to numeric characters and enforce format HH:00
        timeInput.addEventListener('input', function() {
            var inputValue = timeInput.value.trim();
            if (!/^\d{0,2}$/.test(inputValue)) {
                timeInput.value = inputValue.slice(0, -1);
            }
            if (inputValue.length === 2) {
                timeInput.value += ':00';
            }
        });
    });
</script>