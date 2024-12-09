<?php require_once(APPROOT . "/views/patient/navbar_view.php"); ?>
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
                echo '<td><button class="orangebutton" onclick="window.location.href=\'' . URLROOT . '/patient/ViewMorePrescription/' . $prescription["prescription_id"] . "/" . $prescription["Appointment_id"] . '\'" >View</button></td>';
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