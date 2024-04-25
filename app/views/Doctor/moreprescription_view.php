<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Doctor/doctorcommon.css">


<body>
    <div style="margin-left:23%;">
        <div class="card">
            <div style="display: flex; flex-direction:row">
                <div class="details" style="width:50%">
                    <?php 
                        echo "<p>Patient Name  : ".$patient["name"]."</p>";
                        echo "<br>";
                        echo "<br>";
                        echo "<p>Patient Email  : ".$patient["age"]."</p>";
                        echo "<br>";
                        echo "<br>";
                        echo "<p>Patient Phone Number  : ".$patient["gender"]."</p>";
                    ?>
                </div>
                <div class="details" style="width:50%">
                    <?php
                        echo "<p>Appointment Date  : ".$appointment["Appointment_Date"]."</p>"; 
                        echo "<br>";
                        echo "<br>";
                        echo "<p>Appointment Time  : ".$appointment["Appointment_Time"]."</p>";
                        echo "<br>";
                        echo "<br>";
                        echo "<p>Appointment Status  : ".$appointment["Days_left"]."</p>";
                    ?>
                </div>
            </div>
            <br>
            <div class="details" style="width:98%;">
                <?php 
                    echo "<p>Medications  : ".$prescription[0]["Medications"]."</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<p>instructions  : ".$prescription[0]["instructions"]."</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<p>labtesting  : ".$prescription[0]["labtesting"]."</p>";
                ?>
            </div>
            <br>
            
                <?php 
                    var_dump($medicine);
                    if($medicine != null){
                    echo '<div class="details" style="width:98%;">';
                    echo '<h3>Medicines</h3>';
                    echo "<table>";
                        echo "<tr>";
                        echo "<th>Medicine Name</th>";
                        echo "<th>Medicine Dosage</th>";
                        echo "<th>Tiems</th>";
                        echo "<th>before after meal</th>";
                    echo "</tr>";
                    foreach($medicine as $med){
                        echo "<tr>";
                        echo "<td>".$med["medicine"]."</td>";
                        echo "<td>".$med["dose"]."</td>";
                        echo "<td>".$med["times"]."</td>";
                        echo "<td>".$med["before_after"]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo '</div>';
                    }
                ?>
           
        </div>
    </div>
    <button class="bluebutton" onclick="editprescription()" style="margin-left:24%;margin-top:2%;width:200px">Edit Prescription</button>
    <script>
        function editprescription() {
            window.location.href = '<?= URLROOT ?>/Doctor/EditPrescriptionView/<?= $appointment["Appointment_Id"] ?>/<?= $prescription[0]["prescription_id"] ?>';
        }
    </script>
</body>
</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php");?>