<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
<style>
    .test:hover
{
  background: var(--Gomez-highlight);
  color: white;
}
.test
{
  margin: 30% 0%;
  padding: 33%;
  border-radius: 6px;
  background: #fff;
  color: var(--Gomez-highlight);
  border: none;
}
.test#c{
    margin: 10% 0%;
    padding: 27%;
}
</style>
<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/Admin/navbar_view.php"); ?>


<div class="complainttext">Patient</div>
<table class="complainttable">


    <tbody class="complaint">
    <tr><td style="width: 99px;">Name</td><td style="width: 87px;">Type</td><td style="width: max-content;">Mobile Number</td><td></td></tr>    <tr style='color:white;margin: 3%;'></tr>
        <?php
            for ($index = 0; $index < sizeof($data); $index++) {
                echo "<tr><td style='width:100px'>".$data[$index]['userName']."</td><td style='width: max-content;'>".$data[$index]['type']."</td><td style='width: 144px;'>".$data[$index]['phonenumber']."</td><td><button class=test>view</button></td></tr><tr style='color:white;margin: 3%;'></tr>";
            }
        ?>

    </tbody>

</table>


<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>