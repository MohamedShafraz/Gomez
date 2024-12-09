<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Doctor/doctorcommon.css">
<link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">
<style>
    body {
        background-image: linear-gradient(90deg, white, #E9F3FD);
        font-family: 'Inter', sans-serif;
    }

    .details-container {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        width: 100%;
        margin-top: 2%;
    }

    .details {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .details p {
        margin: 0;
        line-height: 1.5;
        padding-bottom: 8px;
    }

    .card {
        border-radius: 27px;
        background: #ffffff;
        padding: 20px;
        margin-bottom: 20px;
        border: 2px solid darkblue;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    textarea {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid darkblue;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }

    .bluebutton {
        width: 200px;
        background-color: blue;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .bluebutton:hover {
        background-color: darkblue;
    }


    /* Additional styles for form labels */
    label {
        font-weight: bold;
        color: darkblue;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .card {
            margin-left: 10%;
            margin-right: 10%;
        }

        .bluebutton {
            width: 100%;
            margin-top: 10px;
        }
    }
</style>

<body>
    <div style="margin-left: 23%;">
        <div class="details-container">
            <!-- Patient Information Card -->
            <div class="card">
                <div class="details">
                    <p>Patient Name: <?= htmlspecialchars($patient["fullname"]) ?></p>
                    <p>Patient Age: <?= htmlspecialchars($prescription["age"]) ?></p>
                    <p>Patient Gender: <?= htmlspecialchars($patient["gender"]) ?></p>
                </div>
            </div>

            <!-- Separator -->
            <div class="separator"></div>

            <!-- Prescription Edit Form -->
            <div class="card" style="width: 96%;">
                <form action="<?= URLROOT . "/Doctor/EditPrescription" ?>" method="post">
                    <label for="otherremarks">Other Remarks:</label><br>
                    <textarea id="otherremarks" name="otherremarks" rows="4"><?= htmlspecialchars($prescription["otherremarks"]); ?></textarea>
                    <br><br>

                    <!-- Hidden Inputs -->
                    <input type="hidden" name="prescriptionnumber" value="<?= htmlspecialchars($prescription["prescriptionnumber"]); ?>">
                    <input type="hidden" name="Appointment_Id" value="<?= htmlspecialchars($prescription["Appointment_Id"]); ?>">
                    <input type="hidden" name="patientid" value="<?= htmlspecialchars($prescription["patientid"]); ?>">

                    <input class="bluebutton" type="submit" value="Save Changes">
                </form>
            </div>
        </div>
    </div>
</body>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>
