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
            <input type="text" id="labReportNumber" name="labReportNumber" required class="input" value= '<?= $data['refno']+1?>' >
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
        <label for="unregister"> <input  id="unregister" type="hidden" name="unregister"  class="input">
        
        </input>  
        </label>
        
             
        
            <select id="Username" name="Username" required class="input" placeholder='Username'>
            
            <?php foreach ($patient as $fullname): ?>
                    <option ><?= $fullname['fullname'] ?></option>
                <?php endforeach; ?>
</select>
        
</select>



          
</select>
        </div>
        <div class="form-group">
            <label for="testname">Test Name:</label>
            <select id="testname" name="testname" required class="input">
                <?php foreach ($labtest as $testName): ?>
                    <option ><?= $testName['testName'] ?></option>
                <?php endforeach; ?>
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
