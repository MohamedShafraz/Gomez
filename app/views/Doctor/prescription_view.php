<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<aside class="sidenav">
    <ul>
        <img src="<?= URLROOT . "/resources/user.png" ?>"><br><br>
        <li><a href="<?= URLROOT . "/Doctor" ?>">Dashboard</a></li>
        <li><a href="<?= URLROOT . "/Doctor/ViewAppointment/" ?>">Appointment</a></li>
        <li><a href="<?= URLROOT . "/Doctor/ViewPrescription" ?>">Prescription</a></li>
        <li><a href="<?= URLROOT . "/Doctor/ViewReminder" ?>">Reminder</a></li>
    </ul>

    <style>
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li a {
            text-decoration: none;
            color: inherit;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>



</aside>
<article class="dashboard">
    <div style="margin-left:24%;">

        <?php

        if (empty($prescriptions)) {
            echo "<h2>No Prescription Found</h2>";
        } else {
            echo "<table>";
            echo "<tr>";
            echo "<th>Prescription ID</th>";
            echo "<th>Patient ID</th>";
            echo "<th>Appointment ID</th>";
            echo "<th>Medications</th>";
            echo "<th>labtesting</th>";
            echo "<th>instructions</th>";
            echo "<th>More</th>";
            echo "</tr>";
            foreach ($prescriptions as $prescription) {
                echo "<tr>";
                echo "<td>" . $prescription["prescription_id"] . "</td>";
                echo "<td>" . $prescription["patient_id"] . "</td>";
                echo "<td>" . $prescription["Appointment_id"] . "</td>";
                echo "<td>" . $prescription["Medications"] . "</td>";
                echo "<td>" . $prescription["labtesting"] . "</td>";
                echo "<td>" . $prescription["instructions"] . "</td>";
                echo '<td><button class="orangebutton" onclick="window.location.href=\'' . URLROOT . '/Doctor/ViewMorePrescription/' . $prescription["prescription_id"] . "/" . $prescription["Appointment_id"] . '\'" >View</button></td>';
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>


    </div>
    </div>
    </div>
</article>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>