<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
<style>
    .test:hover {
        background: var(--Gomez-highlight);
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
<?php require_once(APPROOT . "/views/Admin/navbar_view.php"); ?>

<br><br>
<div class="complainttext">Lab Assistant</div>
<table class="complainttable">


    <tbody class="complaint">
        <tr style="background-color: beige;">
            <td style="width: 111px;">Name</td>
            <td style="width: 146px;">NIC</td>
            <td style="width: 170px;">Mobile Number</td>
        </tr>
        <tr style='color:white;margin: 3%;'></tr>
        <?php
        for ($index = 0; $index < sizeof($data); $index++) {
            echo "<tr><td style='width: 120px;'>" . $data[$index]['full name'] . "</td><td style='width: 156px;'>" . $data[$index]['NIC'] . "</td><td style='width: 144px;'>" . $data[$index]['phonenumber'] . "</td><td><button class=test>view</button></td></tr><tr style='color:white;margin: 3%;'></tr>";
        }
        ?>

    </tbody>

</table>
<button onclick="window.location.href += '/create'" style="    padding: 1%;margin:0%;
    margin-left: 28%;margin-top:1%" class="test">Create new</button>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>