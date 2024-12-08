<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>

<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Doctor/doctorcommon.css">
<style>
    tr {
        text-align: center;

    }
</style>

<body >
    <div style="margin-left:23%;">
        <div class="card" style="font-family: inter;">
            <div style="display: flex; flex-direction:row">
                <div class="details" style="width:50%">
                    <?php
                    echo "<p>Patient Name  : " . $patient["fullname"] . "</p>";
                    echo "<br>";

                    echo "<p>Patient Age  : " . $prescription[0]["age"] . "</p>";
                    echo "<br>";

                    echo "<p>Patient Gender  : " . $patient["gender"] . "</p>";


                    ?>
                </div>
                <div class="details" style="width:50%">
                    <?php
                    echo "<p>Prescription Date  : " . $prescription[0]["priscription_date"] . "</p>";


                    ?>
                </div>
            </div>
            <br>
            <div class="details" style="width:98%;">
                <?php
                echo "<p>Disease  : " . $prescription[0]["disease"] . "</p>";
                echo "<br>";
                echo "<p>Prescription  : " . $prescription[0]["prescription"] . "</p>";
                echo "<br>";
                echo "<p>Labtesting  : " . $prescription[0]["labtesting"] . "</p>";
                ?>
            </div>
            <div class="details" style="width:98%;">
                <?php
                echo "<br>";
                echo "<p>Other Remarks  : " . $prescription[0]["otherremarks"] . "</p>";
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
                    echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["medicine"] . "</td>";
                    echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["dose"] . "</td>";
                    echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["doseunit"] . "</td>";
                    echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["times"] . "</td>";
                    echo "<td style='padding: 10px; border: 1px solid darkblue;'>" . $med["before_after"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo '</div>';
            }
            ?>

        </div>
    </div>
    <?php 
        // dont show edit button if the prescription out of session time 
        if ($prescription[0]["priscription_date"] == date("Y-m-d")) {
            echo '<button class="bluebutton" onclick="editprescription()" style="margin-left:24%;margin-top:2%;width:200px;background-color: blue; color: white;font-family: inter;">Edit Prescription</button>';
        }else
        {
            echo '<button class="bluebutton" onclick="editprescription()" style="margin-left:24%;margin-top:2%;width:200px;background-color: blue; color: white;font-family: inter;display:none;">Edit Prescription</button>';
        }
    ?>

    <script>
        function editprescription() {
            window.location.href = '<?= URLROOT ?>/Doctor/EditPrescriptionView/<?= $prescription[0]["prescriptionnumber"] ?>';
        }
    </script>
</body>
</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>