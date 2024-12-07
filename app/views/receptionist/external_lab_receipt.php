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

    <form action="<?=URLROOT."/receptionist/createreciept"?>" method='post'>
        <div class="form-group">
            <label for="labReportNumber">Lab Report Reference Number:</label>
            <input type="hidden" id="labReportNumber" name="labReportNumber" required>
        </div>

        <input type="hidden" name="patient_id" value="<?= $data['patient_id']?>">
        <input type="hidden" name="test_id" value="<?= $data['test_id']?>">
    
        <div class="form-group">
            <label for="patientName">Name:</label>
            <input type="text" id="patientName" name="patientName" required class="input" value='<?= $data['patientName']?>'>
        </div>

        <div class="form-group">
            <label for="passcode">Passcode:</label>
            <input type="password" id="passcode" name="passcode" required class="input">
        </div>

        <div class="form-group">
            <label for="contactNo">Contact No:</label>
            <input type="text" id="contactNo" name="contactNo" required class="input" value='<?= $data['contactNo']?>'>
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required class="input" value='<?= $data['age']?>'>
        </div>

        <div class="form-group">
            <label for="register">Registered or Unregistered:</label>
            <select id="register" name="register" required class="input" onchange="toggleUsername()">
                <option value="Unregistered">Unregistered</option>
                <option value="Registered">Registered</option>
            </select>
        </div>

        <div id="Username" class="form-group" style="display: none;">
            <label for="patientUsername">Username:</label>
            <select id="patientUsername" name="Username" class="input">
                <?php foreach ($patients as $fullname): ?>
                    <option><?= $fullname['fullname'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="testname">Test Name:</label>
            <input type="text" id="testname" name="testname" required class="input" value='<?= $data['testname']?>'>
        </div>
        
        <div class="form-group">
            <button type="submit" class="button">Submit</button>
            <button type="button" onclick="history.go(-1)" class="button" style="margin-left: 10px;">Back</button>
        </div>
    </form>

    <script>
        function toggleUsername() {
            var registerSelect = document.getElementById('register');
            var usernameDiv = document.getElementById('Username');
            var usernameSelect = document.getElementById('patientUsername');

            if (registerSelect.value === 'Registered') {
                usernameDiv.style.display = 'flex';
                usernameSelect.required = true;
            } else {
                usernameDiv.style.display = 'none';
                usernameSelect.required = false;
            }
        }
    </script>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<script>var $URLROOT = '<?=URLROOT?>'; </script>;
<script>var $usertype = '<?=$_SESSION['userType']?>'</script>
<script src="<?=URLROOT?>/javascript/dashboard.js"></script>
</html>