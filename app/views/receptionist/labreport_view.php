<?php require_once(APPROOT."/views/receptionist/navbar_view.php");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home - Copy_files/GMZ.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="<?= URLROOT ?>/css/patient/dashboard.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
    <style>
        
        
        .heading {
        position: fixed;
        padding: 0% 8.0% 0% 9%;
        margin-top: 0.7%;
        width: 70%;
        margin-left: 27.6%;
        padding: 8px 10px;
        border-radius: 9px;
        color: var(--Gomez-Blue);

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
    .action-buttons button {
        margin-left: 60px; /* Adjust the margin between buttons */
        padding: 5px 10px; /* Adjust button padding */
        background-color: var(--Gomez-Blue); /* Green background */
        color: white; /* White text */
        border: none; /* No border */
        border-radius: 4px; /* Rounded corners */
        cursor: pointer; /* Cursor on hover */
    }

    .action-buttons{
        padding:17%;
    }
    .action-button1 {
        margin-left: 1000px; /* Adjust the margin between buttons */
        padding: 5px 10px; /* Adjust button padding */
        background-color: var(--Gomez-Blue); /* Green background */
        color: white; /* White text */
        border: none; /* No border */
        border-radius: 4px; /* Rounded corners */
        cursor: pointer; /* Cursor on hover */
        
        display: flex;
        justify-content: flex-end; /* Align buttons to the right */
        margin-top: 60px;
        
    }

    button {
        height: 31px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: 'inter-bold';
        font-size: 10px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        padding: 10px;
        background-color: blue;
        border-style: hidden;
        border-radius: 6px;
        font-size: initial;
        height: max-content;
        width: max-content;
        background-color: blue;
        color: white;
    }

    tbody {
        background-color: #fff09e;
    }

    td , th{
        padding: 10px;
        text-align: center;
        width: 23%;
        border: none;
        font-family: inter;
    }
    
    </style>
    <article>
   
        <center>
    
</head>

<div id="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999; display: none;"></div>

<div id="alertBox" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 5px; z-index: 1000; display: none;">
  <div id="alertMessage"></div> <!-- Alert message will be displayed here -->
  <button onclick="closeAlert()" style="display: block; margin: 0 auto;">Close</button> <!-- Close button -->
</div>
<?php
  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }
  if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    echo "<script>
            // Show the overlay and alert box
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('alertBox').style.display = 'block';
            // Set the alert message
            document.getElementById('alertMessage').innerHTML = '<p>$message</p>';
          </script>";
  }
  unset($_SESSION['message']);
?>


<pre></pre>
<div class="complainttext" style="width: 65%;margin-left: 23%; margin-top:2%; margin-bottom: 1%;">Lab Receipts</div>
<pre></pre>
</div>
<table  style="margin-left: 23%; background-color: beige ">
    <tbody style="background-color: beige !important" >
        <tr>
            <th >Ref No</th>
            <th >Patient Name</th>
            <th >Test Name</th>
            <th> Status </th>
            <th >Actions</th>
        </tr>
    
    <?php foreach ($data as $row): ?>
        <?php
            // Filter logic based on search inputs
            $refno = isset($_GET['search_refno']) ? $_GET['search_refno'] : '';
            $patientName = isset($_GET['search_patientName']) ? $_GET['search_patientName'] : '';
            
            // Perform filtering
            if ((!$refno || $row['refno'] == $efno) && (!$patientName || $row['patientName'] == $patientName)):
            ?>
            <tr style='margin: 3%; '>
                <td ><?= $row['refno'] ?></td>
                <td ><?= $row['patientName'] ?></td>
                <td ><?= $row['testname'] ?></td>
                <td ><?= $row['status'] ?></td>
                <td>
                    <button class="action-button" onclick="window.location.href='<?=URLROOT.'/receptionist/labdetails/'.$row['refno']?>'" >View</button>
                </td>
            </tr>
    <?php endif; ?>
    <?php endforeach; ?>
</table>
    
    
    
</div>


    </center>
    </article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<script>var $URLROOT = '<?=URLROOT?>'; </script>;
<script>var $usertype = '<?=$_SESSION['userType']?>'</script>
<script src="<?=URLROOT?>/javascript/dashboard.js"></script>
<script>
function closeAlert() {
    // Hide the overlay and alert box
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('alertBox').style.display = 'none';
  }

</script>
</html>