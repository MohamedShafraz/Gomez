<?php
include_once(APPROOT . '/views/header_view.php');
?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/contactus.css">
<style>
    .custom-div:hover {
        background-color: #8393ca;
        /* Change to the desired hover background color */
    }

    .flex-container {
        display: flex;
        flex-wrap: wrap;

        /* justify-content: space-between; Adjust as needed */
    }

    .flex-item {
        width: calc(50% - 10px);
        /* Adjust width and margin as needed */

        box-sizing: border-box;
        border: 1px solid #ccc;
        /* Optional: Add borders for clarity */
        grid-column-gap: 3rem;
        /* flex-direction: column; */
        display: flex;
        flex-direction: row;
    }

    img {
        max-width: 100%;
        height: auto;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<body>

    <center>

        <div style="display: flex;width: 90rem;margin-top: 6rem;height: 37rem;flex-direction: column;">
            <div><br></div>
            <?php
            $doctorname = $data[0]['fullname'] ?? "";
            $specialization = $data[0]['Specialization'] ?? "";
            ?>
            <div style="align-self: center;height: 7rem;background-color: #ffffff;width: 88rem;    border: 2px solid #000;">
                <div style="display: flex;flex-direction: row;">
                    <div style="height: 6rem;padding: 0.25rem;"><img src="<?= URLROOT . "/public/resources/doctor1.png" ?>" style="padding: 1rem 1rem 1rem 1rem;height: 4rem;width: 4rem;border: 1px solid;"></div>
                    <div style="margin: -3rem 0rem 0rem 1rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;">
                        <ul style="list-style-type: none;padding:0;">
                            <li><?= $doctorname ?></li>
                            <li style="font-size: medium;"><?= $specialization ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div><br></div>
            <div style="height: 24rem;overflow: auto; scrollbar-width: none; -ms-overflow-style: none;">
                <?php

                if (isset($data)) {
                    for ($i = 0; $i < sizeof($data); $i++) {
                        $test = $data[$i]['date'] ?? '03/15/2024';

                        $startTime = $data[$i]['start_time'];
                        $maxAppointments =  $data[$i]['max_appointments'];
                        $activeAppointments =  $data[$i]['active_appointments'];

                        echo " <div class='custom-div' style='border:1px solid;align-self: center;width: 98%;background-color: #fff;height: fit-content;'>
                <div style='display: flex; flex-direction:row'>
                    <div style='width:13rem;'>
                        <ul style='list-style-type: none;text-align: left;'>
                            <li>$test</li>
                            <li style='font-weight: bold;font-size: x-large;'>$startTime</li>
                        </ul>
                    </div>
                    <div style='width: 13rem;'>
                        <ul style='list-style-type: none;text-align: left;'>
                            <li>Active Appointments</li>
                            <li style='font-weight: bold;font-size: x-large;'>$activeAppointments</li>
                        </ul>
                    </div>
                    <div style='margin-left: 1rem;'>
                                <ul style='width: 30rem;list-style-type: none;'>
                                    <li style='font-size: medium;'>Maximum Appointments</li>
                                    <li>$maxAppointments </li>
                                </ul>
                                </div>
                    <div style='width: 30rem;'>
                        <ul style='list-style-type: none;text-align: left;'>
                            <div style='flex-direction: row;display: flex;'>
                                <div style='margin-top: -1.75rem;'>
                                    <li>
                                        <div style='width: 27%;'>
                                            <div class='logbutton1' style='height: fit-content;;margin: 2rem 0rem 0rem 0rem;background:#5998ff;'>
                                                <a href='" . URLROOT . "/appointment/finalized/data?fullname=" . $data[$i]['fullname'] . "&specialization=" . $data[$i]['Specialization'] . "&date=" . $data[$i]['date'] . "&strt_time=" . $data[$i]['start_time'] . "&end_time=" . $data[$i]['end_time'] . "&id=3-" . $data[$i]['Doctor_id'] . "' style='text-decoration: none;'>
                                                    <font class='font1' style='color:white'>Finalize</font>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                
                            </div>
                        </ul>
                    </div>
                </div>
            </div><br>";
                    }
                } else {
                    echo "<div class='custom-div' style='align-self: center;width: 98%;background-color: #fff;height: fit-content;border: 2px solid #000;'>No appointment Available</div>";
                }
                ?>

            </div>
        </div>

    </center>





</body>

</html>