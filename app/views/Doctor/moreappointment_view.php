<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Doctor/doctorcommon.css">
<body>
    <article class="dashboard">
        <div style="margin-left:23%;">

            <div class="card" style="width :96% ; margin-top: 2%; padding: 1%">
                <div style="display: flex; flex-direction: row; justify-content: space-between; height: 50px; width :100%;padding-top:1%">
                    <h1 style="margin: 0px; ">Appoinment Details</h1>
                    <div style="display: flex; flex-direction: row;">

                    
                    <?php
                   
                        if ($appointments["Appointment_Status"] == "pending") {
                            echo '<button style="width: 150px;" class="bluebutton" onclick="location.href=\'' . URLROOT . '/Doctor/AddprescriptionView/' . $appointments["Appointment_Id"] . '\'">Add Prescription</button>';
                        }
                        else if ($appointments["Appointment_Status"] == "Prescription Added") {
                            echo '<button style="width: 150px;" class="yellowbutton" onclick="location.href=' . "'" . URLROOT . "/Doctor/ViewMorePrescription/" . $prescription["prescription_id"] ."/".$appointments["Appointment_Id"]. "'" . '">View Prescription</button>';
                        }
                        ?>

                    </div>
                </div>
                <div style="display: flex; flex-direction:row; justify-content:space-between; width :100%">
                    <div class="details">
                        <?php
                        
                        echo "Name  : " . $appointments["Name"];
                        echo "<br>";
                        echo "<br>";
                        echo "Date  : ".$appointments["Appointment_Date"];
                        echo "<br>";
                        echo "<br>";
                        echo "Time  : ".explode(".",$appointments["Appointment_Time"])[0];
                        echo "<br>";
                        echo "<br>";


                        ?>

                    </div>
            
                </div>
            </div>

            <div class="card" style="display: flex; flex-direction:column; width :96% ; margin-top: 2%; padding: 1%">
                <div style="display: flex; flex-direction: row; justify-content: space-between; height: 50px; width :100%">
                    <h1 style="margin: 0px; ">Patient Details</h1>
                </div>
                <div style="display: flex; flex-direction:row; justify-content:space-between; width :100%">
                    <div class="details">
                        <?php
                        echo "Name  : " . $patient["name"];
                        echo "<br>";
                        echo "<br>";
                        echo "Patient Age  : " . $patient["age"];
                        echo "<br>";
                        echo "<br>";
                        echo "Gender  : " . $patient["gender"];
                        echo "<br>";
                        echo "<br>";
                        echo "Address  : " . $patient["address"];
                        echo "<br>";
                        echo "<br>";
                        echo "Contact  : " . $patient["phonenumber"];
                        echo "<br>";
                        echo "<br>";
                        echo "Gaurdian Name  : " . $patient["guardianName"];
                        echo "<br>";
                        echo "<br>";
                        echo "Gaurdian Phone  : " . $patient["guardianPhone"];
                        echo "<br>";
                        echo "<br>";
                        echo "Type  : " . $patient["type"];

                        ?>


                </div>
            </div>


        </div>

        </div>
        </div>
    </article>
</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php");?>
