<?php require_once(APPROOT."/views/Doctor/navbar_view.php");?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Doctor/doctorcommon.css">
<style>
   
    .details {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }


    .details p {
        margin: 0; 
        line-height: 1.5; 
    }

    .card{
                border-radius: 27px;
                background: #ffffff;
                box-shadow:  5px 5px 10px #b0b0b0,
                            -5px -5px 10px #ffffff;
                padding: 20px;
            }
            textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
</style>
<body>
    <div style="margin-left:23%;">
            <div class="details-container" style="display: flex; flex-direction:column; justify-content:flex-start; width :100%;margin-top:2%">
                <div class="card" style="display: flex; flex-direction:row">
                    <div class="details" style="width:50%">
                        <?php 
                            echo "<p>Patient Name  : ".$patient["fullname"]."</p>";
                            echo "<br>";
                            echo "<br>";
                            echo "<p>Patient Age  : ".$patient["age"]."</p>";
                            echo "<br>";
                            echo "<br>";
                            echo "<p>Patient Phone Number  : ".$patient["gender"]."</p>";
                        ?>

                    </div>
                </div>
                <div class="card" style="width:96%;">
                    <form  action="<?=URLROOT."/Doctor/EditPrescription"?>" method="post">
                        
                        <label for="disease">Dicease:</label><br>
                        <textarea id="disease" name="disease"><?php echo $prescription["disease"]; ?></textarea>
                        <br><br>

                        <label for="instructions">Prescription:</label><br>
                        <textarea id="instructions" name="prescription"><?php echo $prescription["prescription"]; ?></textarea>
                        <br><br>

                        <label for="labtesting">Lab Testing:</label><br>
                        <textarea id="labtesting" name="labtesting"><?php echo $prescription["labtesting"]; ?></textarea>
                        <br><br>

                        <label for="otherremarks">Other Marks:</label><br>
                        <textarea id="otherremarks" name="otherremarks"><?php echo $prescription["otherremarks"]; ?></textarea>
                        <br><br>

                        <input type="hidden" name="prescriptionnumber" value="<?php echo $prescription["prescriptionnumber"]; ?>">
                        <input type="hidden" name="Appointment_Id" value="<?php echo $prescription["Appointment_Id"]; ?>">
                        <input type="hidden" name="patientid" value="<?php echo $prescription["patientid"]; ?>">
                        <input style="width: 200px;"  class="bluebutton" type="submit" value="Save Changes">
                </form>

                </div>
            </div>
    </div>
  
    
</body>
<?php require_once(APPROOT."/views/Admin/footer_view.php");?>