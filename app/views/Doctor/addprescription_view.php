<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
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

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            /* Change to block to make it a block element */
            margin: 0 auto;
            /* Center horizontally */
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        label {
            text-align: center;
            color: darkblue;
        }

        /* Center the form */
        .dashboard {
            text-align: center;
        }

        .card{
            border-radius: 27px;
            background: #ffffff;
            box-shadow:  5px 5px 10px #b0b0b0,
                        -5px -5px 10px #ffffff;
            padding: 20px;
        }

    </style>

</aside>
<article class="dashboard">
    <div style="margin-left:24%; display:flex; justify-content:center;">
    
  
    <form class="card" action="<?=URLROOT."/Doctor/AddPrescription"?>" method="post" style="margin-top:5%;">
            <input type="hidden" name="appointment_id" value="<?php echo $appointments[0]['Appointment_Id']?>">
            <input type="hidden" name="patient_id" value="<?php echo $patientid?>">
            <input type="hidden" name="Doctor_id" value="<?php echo $doctorid?>">


            <label for="medications">Medications</label><br>
            <textarea id="medications" name="medications" rows="4" cols="50"></textarea><br><br>

            <label for="instructions">Instructions</label><br>
            <input type="text" id="instructions" name="instructions" value=""><br><br>

            <label for="labTesting">Lab Testing</label><br>
            <input type="text" id="labTesting" name="labTesting" value=""><br><br>

            <input type="hidden" id="dateSigned" name="dateSigned" value="<?= date('Y-m-d'); ?>">

            <input type="submit" value="Submit">
        </form>


    </div>
    </div>
    </div>
</article>

<?php require_once(APPROOT . "/views/Admin/footer_view.php");?>