<?php
require_once(APPROOT."/views/receptionist/navbar_view.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home - Copy_files/GMZ.css">
    <title>Lab Report</title>
    <style>
        h2 {
            margin-top: 5%;
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 60%;
            margin-top: 5%;
            margin-left: 37%;
            align-content: start;
            text-align: justify;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        label {
            flex: 1;
            margin-right: 20px;
            white-space: nowrap;
        }
        .input {
            flex: 1;
            padding: 5px;
            box-sizing: border-box;
        }
        .button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-shrink: 0;
            color: var(--Gomez-White);
            font-family: 'inter-bold';
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            border-radius: 10px;
            background: var(--Gomez-highlight);
            position: relative;
            padding: 1.4%;
            filter: drop-shadow(3px 3px 7px --Gomez-Black);
            width: max-content;
            border-style: none;
            box-shadow: 2px 2px 1px var(--Gomez-Black);
        }
    </style>
</head>
<body>
    <h2>Lab Reports</h2>

    <form action="<?=URLROOT."/receptionist/createrecieptexternal"?>" method='post'>
        <div class="form-group">
            <label for="labReportNumber">Lab Report Reference Number:</label>
            <p><?= $data['refno']+1 ?></p>
            <input type="hidden" id="labReportNumber" name="labReportNumber" required value="<?= $data['refno']+1 ?>">
        </div>

        <div class="form-group">
            <label for="register">Registered or Unregistered:</label>
            <select id="register" name="register" required class="input" onchange="toggleUserFields()">
                <option value="Unregistered">Unregistered</option>
                <option value="Registered">Registered</option>
            </select>
        </div>

        <div id="registeredFields" class="form-group" style="display: none;">
            <label for="patientUsername">Name:</label>
            <select id="patientName" name="patientData" class="input">
                <?php foreach ($patients as $patient): ?>
                    <option value="<?= htmlspecialchars($patient['ID'], ENT_QUOTES, 'UTF-8') . '|' . htmlspecialchars($patient['fullname'], ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($patient['fullname'], ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>


        <div id="unregisteredFields" class="form-group">
            <label for="patientName">Name:</label>
            <input type="text" id="patientName" name="patientName" class="input">
        </div>

        <div class="form-group">
            <label for="passcode">Passcode:</label>
            <input type="password" id="passcode" name="passcode" required class="input">
        </div>

        <div class="form-group">
            <label for="contactNo">Contact No:</label>
            <input type="text" id="contactNo" name="contactNo" required class="input">
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required class="input">
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" class="input">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="testname">Test Name:</label>
            <select name="testname" id="testname" class="input">
                <?php 
                    foreach($tests as $test) { // Iterate over $tests
                        echo "<option value='" . htmlspecialchars($test['test'], ENT_QUOTES, 'UTF-8') . "'>" 
                            . htmlspecialchars($test['test'], ENT_QUOTES, 'UTF-8') . 
                            "</option>";
                    }
                ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="button">Submit</button>
            <button type="button" onclick="history.go(-1)" class="button" style="margin-left: 10px;">Back</button>
        </div>
    </form>

    <script>
        function toggleUserFields() {
            var registerSelect = document.getElementById('register');
            var registeredFields = document.getElementById('registeredFields');
            var unregisteredFields = document.getElementById('unregisteredFields');
            var patientUsernameSelect = document.getElementById('patientUsername');
            var patientNameInput = document.getElementById('patientName');
            var ageField = document.getElementById('age');
            var contactField = document.getElementById('contactNo');

            if (registerSelect.value === 'Registered') {
                // Show registered user fields
                registeredFields.style.display = 'flex';
                unregisteredFields.style.display = 'none';

                // Hide and remove validation for age and contact fields
                ageField.parentNode.style.display = 'none';
                contactField.parentNode.style.display = 'none';
                ageField.required = false;
                contactField.required = false;

                // Enable validation for the patientUsername field
                patientUsernameSelect.required = true;
                patientNameInput.required = false;
            } else {
                // Show unregistered user fields
                registeredFields.style.display = 'none';
                unregisteredFields.style.display = 'flex';

                // Show and enable validation for age and contact fields
                ageField.parentNode.style.display = 'flex'; // Make visible
                contactField.parentNode.style.display = 'flex'; // Make visible
                ageField.required = true;
                contactField.required = true;

                // Disable validation for the patientUsername field
                patientUsernameSelect.required = false;
                patientNameInput.required = true;
            }
        }

        // Trigger toggleUserFields on page load to set the initial state
        document.addEventListener('DOMContentLoaded', toggleUserFields);
    </script>

</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<script>
    var $URLROOT = '<?=URLROOT?>';
    var $usertype = '<?= $_SESSION['userType'] ?>';
</script>
<script src="<?=URLROOT?>/javascript/dashboard.js"></script>
</html>
