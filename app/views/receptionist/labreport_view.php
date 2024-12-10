<?php require_once(APPROOT . "/views/receptionist/navbar_view.php"); ?>
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
            margin-left: 60px;
            /* Adjust the margin between buttons */
            padding: 5px 10px;
            /* Adjust button padding */
            background-color: var(--Gomez-Blue);
            /* Green background */
            color: white;
            /* White text */
            border: none;
            /* No border */
            border-radius: 4px;
            /* Rounded corners */
            cursor: pointer;
            /* Cursor on hover */
        }

        .action-buttons {
            padding: 17%;
        }

        .action-button1 {
            margin-left: 1000px;
            /* Adjust the margin between buttons */
            padding: 5px 10px;
            /* Adjust button padding */
            background-color: var(--Gomez-Blue);
            /* Green background */
            color: white;
            /* White text */
            border: none;
            /* No border */
            border-radius: 4px;
            /* Rounded corners */
            cursor: pointer;
            /* Cursor on hover */

            display: flex;
            justify-content: flex-end;
            /* Align buttons to the right */
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

        td,
        th {
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

<pre></pre>
<div class="complainttext" style="width: 65%;margin-left: 23%; margin-top:2%; margin-bottom: 1%;">Lab Receipts</div>
<pre></pre>
</div>
<table style="margin-left: 23%; border-spacing:0">
    <tbody style="background-color: transparent; !important">

        <tr>
            <th>Ref No</th>
            <th>Patient Name</th>
            <th>Test Name</th>
            <th>Contact No</th>
            <th>Actions</th>
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
                    <td><?= $row['refno'] ?></td>
                    <td><?= $row['patientName'] ?></td>
                    <td><?= $row['testname'] ?></td>
                    <td><?= $row['contactNo'] ?></td>
                    <td>
                        <button class="action-button" onclick="window.location.href='<?= URLROOT . '/receptionist/labdetails/' . $row['refno'] ?>'">View</button>
                    </td>
                </tr><br>
            <?php endif; ?>
        <?php endforeach; ?>
</table>



</div>


</center>
</article>




</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<script>
    var $URLROOT = '<?= URLROOT ?>';
</script>;
<script>
    var $usertype = '<?= $_SESSION['userType'] ?>'
</script>
<script src="<?= URLROOT ?>/javascript/dashboard.js"></script>

</html>