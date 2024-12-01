<?php require_once(APPROOT . "/views/receptionist/navbar_view.php"); ?>
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

        .action-button1 button {
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
    </style>
    <article>

        <center>

</head>

<div class="complainttext" style="width: 65%;">Lab Receipts</div>
<div class="complaintheader" style="
    width: 350px;margin-bottom: 0.4%;
">
    <a>Ref_No</a>
    <a>patientName</a>
    <a>Test_Name</a>
    <a>Contact_No</a>
    <a>Actions</a>
</div>
<table class="complainttable" style="height: 30vh;margin-left: 30.4%;">
    <tbody class="complaint">

        <?php foreach ($data as $row) : ?>
            <?php
            // Filter logic based on search inputs
            $refno = isset($_GET['search_refno']) ? $_GET['search_refno'] : '';
            $patientName = isset($_GET['search_patientName']) ? $_GET['search_patientName'] : '';

            // Perform filtering
            if ((!$refno || $row['refno'] == $efno) && (!$patientName || $row['patientName'] == $patientName)) :
            ?>
                <tr style='color:black;margin: 3%;'>
                    <td style='width: 300px;'><?= $row['refno'] ?></td>
                    <td style='width: 1500px;'><?= $row['patientName'] ?? "test" ?></td>
                    <td style='width: 130px;'><?= $row['testname'] ?></td>
                    <td style='width: 30px;'><?= $row['contactNo'] ?? "test" ?></td>
                    <td style='width: 60px;'>
                        <div class="action-buttons">
                            <div>
                                <button onclick="window.location.href='<?= URLROOT . '/receptionist/labreports/' . $row['refno'] ?>'">View</button>

                                </ul>
                            </div>

                        </div>
                        </div>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
</table>
<div class="action-button1">

    <button onclick="window.location.href='<?= URLROOT . '/receptionist/labreceipt/' . $row['refno'] ?>'">Create Lab receipt</button>


</div>
<div id="uploadpdf" style="display:none;margin-left:20%; justify-content:center;background-color:white;padding:6% 4;">
    <form id="uploadForm<?= $row['refno'] ?>" action="<?= URLROOT ?>/LabAssistant/uploadReport" method="post" enctype="multipart/form-data">
        <input type="file" name="file" style="" accept=".pdf" onchange="document.getElementById('uploadForm<?= $row['refno'] ?>').submit()">
        <input type="hidden" name="refno" value="<?= $row['refno'] ?>">
        <button onclick="document.getElementById('uploadInput<?= $row['refno'] ?>').click()">Upload</button>
    </form>





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