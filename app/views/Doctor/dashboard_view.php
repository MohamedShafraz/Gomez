<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">

<style>
    #grad1 {
        height: 200px;
        background-color: red;
        /* For browsers that do not support gradients */
        background-image: linear-gradient(to right, red, yellow);
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;

    }

    tr {
        border-radius: 10px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;

    }

    .appointmentsection {
        background-color: #FFF;
        height: 150px;
    }

    #grad1 {
        height: 200px;
        background-color: red;
        /* For browsers that do not support gradients */
        background-image: linear-gradient(to right, red, yellow);
    }

    .buttonspace {
        display: flex;
        justify-content: end;
        font-size: 30px;
        grid-template-columns: repeat(auto-fit, minmax(1rem, 0.3fr));
        gap: 1rem;
    }

    button {
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
        font-size: initial;
        height: max-content;
        width: max-content;
        background-color: blue;
        color: white;
    }
</style>


</aside>
<article class="dashboard" style="margin-left:36%;font-family: inter; ">

    <div style="display: flex;   margin-left: -11rem;">
        <div class="scrollable-container">
            <ul class="horizontal-scroll" style="    width: 84rem;height: 12rem;margin: 3rem 0rem 0rem 0rem;line-height: normal;">
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                    <div><br>Today Sessions<br><a style="font-size:8vh"><?php echo count($sessions) ?></a><br>
                </li>
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                    <div><br>Today Appointments<br><a style="font-size:8vh"><?php echo count($appointments) ?></a><br>
                </li>
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                    <div><br>Today Patients<br><a style="font-size:8vh"><?php echo count($patients) ?></a></div><br><br>
                </li>

            </ul>
        </div>
    </div>

    <div style="display:flex; width: 71.5rem;  margin-top: 1.7rem; height: 25rem; flex-direction: column; margin-left: -10.8rem;">
        <div><br></div>
        <div><br></div>

        <?php
        if (empty($nexttwosessions)) {
            // echo "<div class='custom-div' style='text-align:center; font-size:x-large; font-weight:bold;background-color: #fff;'>No appointments</div>";
            echo "<div class='custom-div' style='align-self: center; width: 98%; height:10rem;background-color: #fff; height: 14rem; display: flex; flex-direction:row;font-size:xxx-large;font-weight:bold;justify-content:center;align-items:center'>No appointments</div>";
        } else {
            foreach ($nexttwosessions as $session) {
                echo "<div class='custom-div' style='align-self: center; width: 98%; background-color: #fff; height: fit-content; display: flex; flex-direction:row'>";
                echo "<div style='display: flex; flex-direction:row;'>";
                echo "<div style=' width:100%;display:flex;'>";
                echo "<ul style='list-style-type: none; text-align: left; margin: 1rem 0rem 1rem 0rem;'><div style='display:flex; flex-direction:column'>
                <li style:'font-size:large;font-weight:bold'>Date: </li><li style='width:max-content'>" . $session['date'] . "</li>
                </div></ul>";
                echo "<ul style='display:flex; flex-direction:row;margin:1rem 0rem 0rem 0rem;'>
                <div style='display:flex; flex-direction:column'><li style='font-weight: bold; font-size: large;'>Start Time: </li> <li style=''>" . $session['start_time'] . "</li></div>
                <div><li style='font-weight: bold; font-size: large;'>End Time: </li> <li style=' '> " . $session['end_time'] . "</li></div></ul>";
                echo "</div>";
                echo "<div style='width: 30rem;'>";
                echo "<ul style='list-style-type: none; text-align: left;margin:0'>
                <div style='flex-direction: row; display: flex; '>
                <div style='margin-top: -1.3rem;'>
                <li><div style='width: 27%;'><div class='logbutton' style='height: fit-content; padding: 0.5rem; margin: 2rem 0rem 0rem 0rem; '><a onclick='viewtimeslot(" . $session['session_id'] . ")' style='text-decoration: none;'><font class='font1'>View Appointments</font></a></div></div></li>
                </div>
                <li style='font-weight: bold; font-size: x-large; width: 10rem;'></li></div></div></ul>";
                echo "</div></div></div>";
                echo "<br>";
            }
        }
        ?>
    </div>



</article>
<script>
    function viewtimeslot(sessionid) {
        window.location.href = '<?= URLROOT ?>/Doctor/ShowPatientsAllocatedTimeSlot/' + sessionid;
    }
</script>



<?php require_once(APPROOT . "/views/doctor/footer_view.php") ?>