<body style="background-image: linear-gradient(90deg,#E9F3FD,#E9F3FD);">

    <?php require_once(APPROOT . "/views/Admin/navbar_view.php"); ?>

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/patient/appointments.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">

    <style>
        .complaint tr {
            padding: 0% 20% 0% 10.5%;
            margin: 0% 25%
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
            margin: 30% 0%;
            padding: 33%;
            border-radius: 6px;
            background: #fff;
            color: var(--Gomez-highlight);
            border: none;
            margin: 3% 0%;
            padding: 8% 0%;
            border-radius: 6px;
            background: #fff;
            color: var(--Gomez-highlight);
            border: none;
            width: 8rem;
        }

        button:hover {
            background-color: var(--Gomez-highlight);
            color: white;
        }
    </style>

    </aside>
    <article class="dashboard">
        <div class="complaint" style="margin-left:17%; margin-top:50px;font-family: inter;">


            <?php
            echo '<table style="width:50%">';
            echo '<tr style="color:white;">
            </tr>
            <tr style="background-color: #5998ff;display: flex;
            font-family: inter;
            color: var(--Gomez-Blue);
            color: white;">
            <td style="width: 40%;">Name</td>
            <td style="width: 40%;">NIC</td>
            <td style="width: 20%;">Age</td>
        </tr><tr style="color:white;margin: 1%;"></tr>';
            foreach ($patients as $row) {
                echo '<tr>';
                echo '<td style="width: 40%;">' . $row[0]['fullname'] . '</td>';
                echo '<td style="width: 40%;">' . $row[0]['phonenumber'] . '</td>';

                // Calculate age
                $age = date_diff(date_create($row[0]["date_of_birth"]), date_create('now'))->y;
                echo '<td style="width: 20%;">' . $age . ' </td>';

                // if ($row["prescription"] != null) {
                //     echo '<td style="width: 20%;"><a><button class="test" onclick="window.location.href=\'' . URLROOT . '/Doctor/ViewMorePrescription/' . $row['Appointment_Id'] . '/' . $row[0]['ID'] . '\'">View Prescription</button></a></td>';
                // } else {
                //     echo '<td style="width: 20%;style;"><a><button class="test" onclick="window.location.href=\'' . URLROOT . '/Doctor/AddprescriptionView/' . $row['Appointment_Id'] . '\'">Add Prescription</button></a></td>';
                // }

                echo '</tr>';
                echo '<tr style="color:white;margin: 0.1%;"></tr>'; // Not sure why you need this line
            }
            echo '</table>';
            ?>
        </div>
        </div>
        </div>
    </article>
</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>