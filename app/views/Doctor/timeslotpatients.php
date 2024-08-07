<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">

    <?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/patient/appointments.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">

    <style>
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
            background-color: blue;
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
    <article class="dashboard">
        <div class="complaint" style="margin-left:24%; margin-top:50px;font-family: inter;">


            <?php
            echo '<table>';
            echo '<tr>';
            echo '<td style="width: 20%;"> Name</td>';
            echo '<td style="width: 20%;"> Contact Number </td>';
            echo '<td style="width: 20%;"> Age </td>';
            echo '<td style="width: 20%;"> More </td>';
            echo '</tr>';
            foreach ($patients as $row) {
                echo '<tr>';
                echo '<td style="width: 20%;">' . $row[0]['fullname'] . '</td>';
                echo '<td style="width: 20%;">' . $row[0]['phonenumber'] . '</td>';

                // Calculate age
                $age = date_diff(date_create($row[0]["date_of_birth"]), date_create('now'))->y;
                echo '<td style="width: 20%;">' . '21' . ' </td>';

                if ($row["prescription"] != null) {
                    echo '<td style="width: 20%;"><a><button onclick="window.location.href=\'' . URLROOT . '/Doctor/ViewMorePrescription/' . $row['Appointment_Id'] . '/' . $row[0]['ID'] . '\'">View Prescription</button></a></td>';
                } else {
                    echo '<td style="width: 20%;style;"><a><button onclick="window.location.href=\'' . URLROOT . '/Doctor/AddprescriptionView/' . $row['Appointment_Id'] . '\'">Add Prescription</button></a></td>';
                }

                echo '</tr>';
                echo '<tr style="color:white;margin: 1%;"></tr>'; // Not sure why you need this line
            }
            echo '</table>';
            ?>
        </div>
        </div>
        </div>
    </article>
</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>