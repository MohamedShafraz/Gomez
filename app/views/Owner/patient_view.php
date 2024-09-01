<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
<style>
    .test:hover {
        background: #5998ff;
        color: white;
    }

    .test {
        margin: 30% 0%;
        padding: 33%;
        border-radius: 6px;
        background: #fff;
        color: var(--Gomez-highlight);
        border: none;
    }

    .test#c {
        margin: 10% 0%;
        padding: 27%;
    }
</style>
<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/Owner/navbar_view.php"); ?>

<br>
<div class="complainttext">Patient</div>
<br>
<table class="complainttable" style="height:80%">


    <tbody class="complaint">
        <tr id="header">
            <td style="width: 99px;">Name</td>
            <td style="width: max-content;">Mobile Number</td>
            <td style="width: 65px;">Type</td>

            <td></td>
        </tr>
        <tr style='color:white;margin: 9.9%;'></tr>
        <?php
        for ($index = 0; $index < sizeof($data); $index++) {
            $id = $data[$index]['id'];
            $_SESSION['id'] = $data[$index]['id'];
            echo "<tr><td style='width:100px'>" . $data[$index]['userName'] . "</td><td style='width: max-content;'>0d" . $data[$index]['phonenumber'] . "</td><td style='width: 144px;'>" . explode("'", $data[$index]['type'])[1] . "</td><td><button onclick = 'z($index)' class=test >view</button></td></tr><tr style='color:white;margin: 0.2%;'></tr>";
        }
        ?>

    </tbody>

</table>


<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>