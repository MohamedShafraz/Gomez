<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/LabAssisstant/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">

<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/LabAssistant/navbar_view.php"); ?>
<?php require_once(APPROOT . "/views/LabAssistant/sidenav_view.php"); ?>
<!-- <a>Welcome to Gomez</a> -->
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
        margin-right: 5px; /* Adjust the margin between buttons */
        padding: 5px 10px; /* Adjust button padding */
        background-color: #4CAF50; /* Green background */
        color: white; /* White text */
        border: none; /* No border */
        border-radius: 4px; /* Rounded corners */
        cursor: pointer; /* Cursor on hover */
    }

    .action-buttons{
        padding:17%;
    }
</style>
<article>
<div style="text-align: center; margin-bottom: 20px; margin-left:100px;background-color:white;padding:3%;">
        <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="refnoSearch">Ref_No:</label>
        <input type="text" id="refnoSearch" onkeyup="filterTable('refnoSearch', 'patientIdSearch', 'complainttable')" placeholder="Search by Ref_No">

        <label for="patientIdSearch">Patient_Id:</label>
        <input type="text" id="patientIdSearch" onkeyup="filterTable('refnoSearch', 'patientIdSearch', 'complainttable')" placeholder="Search by Patient_Id">


        <input type="submit" class="button" value="Search" name="search" >
        </form>
    </div>
    <div class="complainttext">Reports</div>
<div class="complaintheader" style="
    width: 26%;margin-bottom: 0.4%;
">
    <a >Ref_No</a>
    <a >Patient_Id</a>
    <a >Test_Name</a>
    <a  >Status</a>
    <a style="
    margin-left: 2%;
" >Actions</a>
</div>
<table class="complainttable" style="height: 19vh;">
    <tbody class="complaint">
    
    <?php foreach ($data as $row): ?>
        <?php
            // Filter logic based on search inputs
            $refno = isset($_GET['search_refno']) ? $_GET['search_refno'] : '';
            $patient_id = isset($_GET['search_patient_id']) ? $_GET['search_patient_id'] : '';
            
            // Perform filtering
            if ((!$refno || $row['refno'] == $refno) && (!$patient_id || $row['patient_id'] == $patient_id)):
            ?>
        <tr style='color:black;margin: 3%;'>
            <td style='width: 120px;'><?= $row['refno'] ?></td>
            <td style='width: 156px;'><?= $row['patient_id'] ?></td>
            <td style='width: 130px;'><?= $row['testname'] ?></td>
            <td style='width: 100px;'><?= $row['status'] ?></td>
            <td style='width: 60px;'>
            <div class="action-buttons" >
                <div style="display:flex">
                <button onclick="window.location.href='<?=URLROOT.'/LabAssistant/ReportView/'.$row['refno']?>'" >View</button>
                <div id="chartContainer"></div>
        <button onclick="document.getElementById('uploadpdf').style.display = 'flex';" style="float:right" class="button">Upload</button>
    </ul>
    </div>
    
                </div>
        </div>
            </td>
    </tr>
    <?php endif; ?>
    <?php endforeach; ?>
</table>
<div id="uploadpdf" style="display:none;margin-left:20%; justify-content:center;background-color:white;padding:6% 4;">
    <form id="uploadForm<?= $row['refno'] ?>" action="<?= URLROOT ?>/LabAssistant/uploadReport" method="post" enctype="multipart/form-data">
            <input type="file" name="file" style="" accept=".pdf" onchange="document.getElementById('uploadForm<?= $row['refno'] ?>').submit()">
            <input type="hidden" name="refno" value="<?= $row['refno'] ?>">
            <button onclick="document.getElementById('uploadInput<?= $row['refno'] ?>').click()">Upload</button>
        </form>
    
  
    
    
    
</div>
</article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<script>
    function filterTable(refnoInputId, patientIdInputId, tableClass) {
        // Declare variables
        var refnoInput, patientIdInput, filterRefno, filterPatientId, table, tr, tdRefno, tdPatientId, i;
        refnoInput = document.getElementById(refnoInputId);
        patientIdInput = document.getElementById(patientIdInputId);
        filterRefno = refnoInput.value.toUpperCase();
        filterPatientId = patientIdInput.value.toUpperCase();
        table = document.getElementsByClassName(tableClass)[0];
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            tdRefno = tr[i].getElementsByTagName("td")[0];
            tdPatientId = tr[i].getElementsByTagName("td")[1];
            if (tdRefno && tdPatientId) {
                var txtValueRefno = tdRefno.textContent || tdRefno.innerText;
                var txtValuePatientId = tdPatientId.textContent || tdPatientId.innerText;
                if (txtValueRefno.toUpperCase().indexOf(filterRefno) > -1 && txtValuePatientId.toUpperCase().indexOf(filterPatientId) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>