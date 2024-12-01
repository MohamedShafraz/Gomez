<?php
require_once(APPROOT . "/views/receptionist/navbar_view.php");
?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<style>
  .flex-container {
    display: flex;
    flex-wrap: wrap;

    /* justify-content: space-between; Adjust as needed */
  }

  .flex-item {
    width: calc(50% - 10px);
    /* Adjust width and margin as needed */

    box-sizing: border-box;
    border: 1px solid #ccc;
    /* Optional: Add borders for clarity */
    grid-column-gap: 3rem;
    /* flex-direction: column; */
    display: flex;
    flex-direction: row;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  .custom-div:hover {
    background-color: #8393ca;
    /* Change to the desired hover background color */
  }

  .flex-container {
    display: flex;
    flex-wrap: wrap;

    /* justify-content: space-between; Adjust as needed */
  }

  .flex-item {
    width: calc(50% - 10px);
    /* Adjust width and margin as needed */

    box-sizing: border-box;
    border: 1px solid #ccc;
    /* Optional: Add borders for clarity */
    grid-column-gap: 3rem;
    /* flex-direction: column; */
    display: flex;
    flex-direction: row;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  form {
    max-width: 60%;
    /* Set a maximum width for the form */

  }

  .form-group {
    margin-bottom: 20px;
    display: flex;
    align-items: center;
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
</style>

<!-- background-color:#E9F3FD -->

<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">


  <article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->

    <ul style="height: 26rem;background-color: white;padding: 3%;width: 57rem;">
      <center>
        <h2><b> Lab Reciept Details</b></h2>
      </center>
      <div class="users" style="height: 9rem;margin: 2rem;gap: 5%;width: 10rem;">
        <ul style="width: max-content;">

          <li>Reference No: <?= $data[0]['refno'] ?></li><br>
          <li>Patient Name:<?= $data[0]['patientName'] ?></li><br>
          <li>Age:<?= $data[0]['age'] ?></li><br>
          <li>Test Name:<?= $data[0]['testname'] ?></li><br>
          <li>Contact No:<?= $data[0]['contactNo'] ?></li>

        </ul>

      </div>

      <form action="<?= URLROOT . "/receptionist/labreports" ?>" method='post' style="margin-top: 5%;margin-left:37%;align-content: start;text-align: justify;">
        <div class="form-group">
          <button onclick="history.go(-1)" name="cancel" class="button">Back</button>
        </div>
      </form>
    </ul>



</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>