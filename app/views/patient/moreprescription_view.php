<?php require_once(APPROOT . "/views/Patient/navbar_view.php"); ?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Doctor/doctorcommon.css">

<style>
    tr {
        text-align: center;

    }
</style>

<body>
    <div style="margin-left:23%;">
        <div class="card">
            <div style="display: flex; flex-direction:row">
                <?php
                if (empty($prescription)) {
                    echo "<div class='details' style='width:100%'><p style='text-align: center; font-size: large; font-weight: bold;width:100%'>No related data found.</p></div>";
                } else {
                ?>
                    <div class="details" style="width:50%">
                        <?php

                        echo "<p>Patient Name  : " . $patient["fullname"] ?? "" . "</p>";
                        echo "<br>";
                        $age = $prescription[0]["age"] ?? "21";
                        echo "<p>Patient Age  : " . '21'  . "</p>";
                        echo "<br>";
                        $gender = $patient["gender"] ?? "";
                        echo "<p>Patient Gender  : " . $gender  . "</p>";


                        ?>
                    </div>
                    <div class="details" style="width:50%">
                        <?php
                        $prescription_date = $prescription[0]["priscription_date"] ?? "";
                        echo "<p>Prescription Date  : " . $prescription_date . "</p>";


                        ?>
                    </div>
            </div>
            <br>
            <div class="details" style="width:98%;">
                <?php

                    $disease = $prescription[0]["disease"] ?? "";
                    echo "<p>Disease  : " . $disease . "</p>";
                    echo "<br>";
                    $prescriptions = $prescription[0]["prescription"] ?? "";
                    echo "<p>Prescription  : " . $prescriptions . "</p>";
                    echo "<br>";
                    $labtesting = $prescription[0]["labtesting"] ?? "";
                    echo "<p>Labtesting  : " . $labtesting  . "</p>";

                ?>
            </div>
            <div class="details" style="width:98%;">
                <?php
                    echo "<br>";
                    $other_remarks = $prescription[0]["otherremarks"] ?? "";
                    echo "<p>Othermarks  : " . $other_remarks  . "</p>";
                ?>
            </div>
            <br>

            <?php
                    if ($medicine != null) {
                        echo '<div class="details" style="width: 98%;">';
                        echo '<h3>Medicines</h3>';
                        echo "<table style='width: 100%; border-collapse: collapse;'>";
                        echo "<tr style='background-color: darkblue; color: white;'>";
                        echo "<th style='padding: 10px;'>Medicine Name</th>";
                        echo "<th style='padding: 10px;'>Medicine Dosage</th>";
                        echo "<th style='padding: 10px;'>Dosage Type</th>";
                        echo "<th style='padding: 10px;'>Times</th>";
                        echo "<th style='padding: 10px;'>Before/After Meal</th>";
                        echo "</tr>";
                        foreach ($medicine as $med) {
                            echo "<tr style='background-color: white; color: black;'>";
                            echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["medicine"] ?? "" . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["dose"] ?? "" . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["doseunit"] ?? "" . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["times"] ?? "" . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["before_after"] ?? "" . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo '</div>';
                    }
            ?>

        </div>
    </div>
<?php if ($_SESSION['userType'] == "Patient") {

                        echo "<button class='bluebutton';  onclick='editprescription()' style='margin-left:24%;margin-top:2%;width:200px;background-color: blue; color: white;'>Edit Prescription</button>";
                    } else {
                        echo "<button class='bluebutton';  onclick='history.back()' style='margin-left:24%;margin-top:2%;width:200px;background-color: blue; color: white;'>Back</button>";
                    }
                }
?>

</body>
</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>