<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
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

    .card {
        border-radius: 27px;
        background: #ffffff;
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
    <div style="margin-left:23%;font-family: inter;">
        <div class="details-container" style="display: flex; flex-direction:column; justify-content:flex-start; width :100%;margin-top:2%">
            <div class="card" style="display: flex; flex-direction:row ;box-shadow: -1px 1px 2px rgba(0, 0, 0, 0.5);">
                <div class="details" style="width:50%">
                    <?php
                    echo "<p>Patient Name  : " . $patient["fullname"] . "</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<p>Patient Age  : " . $prescription["age"] . "</p>";
                    echo "<br>";
                    echo "<br>";
                    echo "<p>Patient Gender  : " . $patient["gender"] . "</p>";
                    ?>

                </div>
            </div>
            <div class="card" style="width:96%;box-shadow: -1px 1px 2px rgba(0, 0, 0, 0.5);">
                <form action="<?= URLROOT . "/Doctor/EditPrescription" ?>" method="post">


                    <label for="otherremarks">Other Remarks:</label><br>
                    <textarea id="otherremarks" name="otherremarks"><?php echo $prescription["otherremarks"]; ?></textarea>
                    <br><br>

                    <input type="hidden" name="prescriptionnumber" value="<?php echo $prescription["prescriptionnumber"]; ?>">
                    <input type="hidden" name="Appointment_Id" value="<?php echo $prescription["Appointment_Id"]; ?>">
                    <input type="hidden" name="patientid" value="<?php echo $prescription["patientid"]; ?>">
                    <input style="width: 200px;background-color: blue ;color: white;" class="bluebutton" type="submit" value="Save Changes">
                </form>

            </div>
        </div>
    </div>


</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>