<?php
require_once(APPROOT."/views/receptionist/navbar_view.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home - Copy_files/GMZ.css">

    <style>
        h2{
            margin-top: 5%;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
           
        }

        form {
            max-width: 60%; /* Set a maximum width for the form */
           
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        label {
            flex: 1; /* Allow labels to grow to take available space */
            margin-right: 20px;
            white-space: nowrap; /* Prevent line breaks within the label */
        }

        .input {
            flex: 1; /* Allow inputs to grow to take available space */
            padding: 5px;
            box-sizing: border-box;
        }
        .button {
            /* background-color: var(--gomez-blue);
            padding: 5px;
            box-sizing: border-box; */
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
  flex-shrink: 0;
  border-radius: 10px;
  background: var(--Gomez-highlight);
  position: relative;
  padding: 1.4%;
  filter: drop-shadow(3px 3px 7px --Gomez-Black);
  width: max-content;
  border-style: none;
  box-shadow: 2px 2px 1px var(--Gomez-Black);
  font-family: inter;
        }
        .images{
            display: flex;
    gap: 100px;
    padding-bottom: 100px;
    padding-top: 50px;
    justify-content: center;
    font-family: inter;
    padding-bottom: 34px;
    padding-top: 79px;
        }
        .images img{
            width: 100px;
        }
        .heading {
        position: fixed;
        padding: 0% 8.0% 0% 9%;
        margin-top: 0.7%;
        width: 70%;
        margin-left: 27.6%;
        padding: 8px 10px;
        border-radius: 9px;
        color: var(--Gomez-Blue);
        font-family: inter;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(13rem, 0fr));
        gap: 1.5rem;
        display: flex;
        flex-direction: row;
        align-content: center;
        gap: 85px;
        font-size: large;
        /* width: 795px; */
        background-color: beige;
        width: 679px;
        padding: 0% 7.9% 0% 9.1%;
        line-height: 7vh;
        border-radius: 8px;
    }
   
        
    </style>
   
    <title>Lab Report</title>
</head>

<h2  style="margin: 5% 0% 0% 37%;">Lab Reports</h2>

    <form  action="" method='post' style="margin-top: 5%;margin-left:37%;align-content: start;text-align: justify;">
    
        <div class="form-group">
            <label for="labReportNumber">Lab Report Reference Number:</label>
            <input type="text" id="labReportNumber" name="labReportNumber" required class="input">
        </div>

        <div class="form-group">
            <label for="patientName">Name:</label>
            <input type="text" id="patientName" name="patientName" required class="input">
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
            <input type="text" id="age" name="age" required class="input">
        </div>
        <div class="form-group">
            <label for="register">Registered or Unregistered</label>
            <select id="register" name="register" required class="input" onchange="document.getElementById('register').value=='Registered'?document.getElementById('Username').style.display='flex':document.getElementById('Username').style.display='none';">
        <option value="Registered">Registered</option>
        <option value="Unregistered">Unregistered</option>
        </select>  
        
            <input id="Username" name="Username" class="input" placeholder='Username'>
        </div>
        <div class="form-group">
            <label for="testname">Test Name:</label>
            <select id="testname" name="testname" required class="input">
        <option value="FBS">FBS</option>
        <option value="Lipid">Lipid</option>
        <option value="CBC">CBC</option>
        <option value="PTT">PTT</option>
        <option value="UA">UA</option>
        <option value="X-rays">X-rays</option>
        <option value="CT Scan">CT Scan</option>
        <option value="ECG">ECG</option>
        <option value="GTT">GTT</option>
        <option value="TB Testing">TB Testing</option>
        <option value="Stool Culture">Stool Culture</option>
        <option value="Blood Drug Test">Blood Drug Test</option>
        <option value="Urine Full Report (UFR)">Urine Full Report (UFR)</option>
        <option value="Thyroid Profile (TSH / fT4)">Thyroid Profile (TSH / fT4)</option>
        <option value="Vitamin D (25-Hydroxy)">Vitamin D (25-Hydroxy)</option>
        <option value="VDRL/RPR (Quantitative)">VDRL/RPR (Quantitative)</option>
        <option value="Urine Pregnancy Test">Urine Pregnancy Test</option>
        <option value="Urine for Albumin">Urine for Albumin</option>
        <option value="Uric Acid">Uric Acid</option>
        <option value="Urea">Urea</option>
        <option value="TSH">TSH</option>
        <option value="Troponin T (High Sensitive)">Troponin T (High Sensitive)</option>
        <option value="Troponin I">Troponin I</option>
        <option value="TPHA">TPHA</option>
        <!-- Add more options as needed -->
    </select>
           
        </div>
        
        <div class="form-group">
        <button type="submit" class="button" >Submit</button>
        </div>
        <form  action="<?=URLROOT."/receptionist/labreports"?>" method='post' style="margin-top: 5%;margin-left:37%;align-content: start;text-align: justify;">
    <div class="form-group">
        <button onclick="history.go(-1)" name="cancel" class="button" >Back</button>
        </div>
      </form>
</ul>
        
        
       
        
        
       
        </div>
    </form>
    
</body>
</html>
