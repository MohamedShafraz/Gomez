<?php require_once(APPROOT."/views/receptionist/navbar_view.php");?>
<!DOCTYPE html>
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
    
    button {
        height: 31px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: inter;
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

    td, th {
        padding: 10px;
        text-align: center;
        width: 20%;
        border: none;
        font-family: inter;
    }

    table {
        border-collapse: collapse;
    }
    
    </style>
    <article>
   
        <center>
    
</head>

<pre></pre>
<div class="complainttext" style="width: 55%;
    margin-top:2%; margin-bottom: 1%;">Lab Receipts</div>
<pre></pre>
   
</div>
<table style="margin-left: 23%;">
    <tbody style="background-color: beige !important">
        <tr>
            <th>Test ID</th>
            <th>Prescription ID</th>
            <th>Test Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php if (!empty($reports)) { // Check if $reports is not empty ?>
            <?php foreach ($reports as $row) { ?>
                <tr>
                    <td><?= htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($row['prescriptionnumber'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($row['test_name'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td>
                    <?php 
                        $url = URLROOT . '/receptionist/createlabreciept/' . $row['unique_id'] . '/' . $row['id'];
                    ?>

                        <button onclick="window.location.href='<?= $url ?>'">
                            Create Lab Receipt
                        </button>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="5" style="text-align: center;">No Records Found</td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<div class="action-buttons">
    <button onclick="window.location.href='<?= URLROOT . '/receptionist/externalcreatelabreciept' ?>'">Create External Lab Report</button>
</div>
    
<script src="<?=URLROOT?>/javascript/dashboard.js"></script>
