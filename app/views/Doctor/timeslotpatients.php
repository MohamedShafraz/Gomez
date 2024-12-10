<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">

    <?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>

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
            background-color: blue;
            border-style: hidden;
            border-radius: 6px;
            font-size: initial;
            height: max-content;
            width: max-content;
            background-color: blue;
            color: white;
        }

        .complaint tr {
            color: black;
            margin: 5%;
            font-size: 15px;
            padding: 1.2% 20.8% 1.2% 57.8%;
            width: 1004px;
            gap: 0px;
        }
    </style>

    </aside>
    <article class="dashboard">
        <div class="complaint" style="margin-left:24%; margin-top:50px;font-family: inter;">
            <ul style="    position: fixed;
    width:52.2%;
    background-color: #5998ff;
    left: 24%;
    display: flex
;
    top: 19%;
    padding: 1.2% 7.8% 1.2% 7.8%;
    font-family: 'inter';
    color: var(--Gomez-Blue);
    color: white;
    margin: 0% 1%;">
                <li style="width:226px">Name</li>
                <li style="width:226px">Contact Number</li>
                <li style="width:226px">Age</li>
                <li style="width:226px">More</li>





            </ul>
            <br><br>
            <?php
            echo '<table class="complainttable" style="height: 50vh;margin-top:5%;margin-left: -1%;">';
            echo '<tbody>';



            // Get current time as DateTime
            $current_time = new DateTime('now', new DateTimeZone('Asia/Colombo'));

            foreach ($patients as $row) {
                echo '<tr style="background-color: white;">';
                echo '<td style="width: 20%;">' . $row[0]['fullname'] . '</td>';
                echo '<td style="width: 20%;">' . $row[0]['phonenumber'] . '</td>';

                // Calculate age
                $age = date_diff(date_create($row[0]["date_of_birth"]), date_create('now'))->y;
                echo '<td style="width: 20%;">' . $age . ' </td>';

                $session_start_time = new DateTime($row["start_time"], new DateTimeZone('Asia/Colombo'));
                $session_end_time = new DateTime($row["end_time"], new DateTimeZone('Asia/Colombo'));

                // Check if current time is within session time
                 if ($row["prescription"] != null) {
                    echo '<td style="width: 20%;"><a><button class="logbutton" onclick="window.location.href=\'' . URLROOT . '/Doctor/ViewMorePrescription/' . $row['Appointment_Id'] . '/' . $row[0]['ID'] . '\'">View Prescription</button></a></td>';
                } else {
                    if ($current_time >= $session_start_time && $current_time <= $session_end_time &&  $session_date->format('Y-m-d') == $current_time->format('Y-m-d')) {
                        echo '<td style="width: 20%;"><a><button class="logbutton" onclick="window.location.href=\'' . URLROOT . '/Doctor/AddprescriptionView/' . $row['Appointment_Id'] . '\'">Add Prescription</button></a></td>';
                    } else if ($current_time < $session_start_time ||  $session_date->format('Y-m-d') > $current_time->format('Y-m-d')) {
                        echo '<td style="width: 20%; color: red;">Session Not Started</td>';
                    } else {
                        echo '<td style="width: 20%; color: red;">Session Expired</td>';
                    }
                }

                echo '</tr>';
                echo '<tr style="color:white;margin: 1%;background-color: transparent;"></tr>';
            }
            echo '</tbody>';
            echo '</table>';
            ?>
        </div>
    </article>
</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>
