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
<?php require_once(APPROOT . "/views/Owner/navbar_view.php"); ?>


<div class="complainttext">Doctors</div>
<table class="complainttable">


    <tbody class="complaint" style="margin-top: 6%;">
        <tr style="position:fixed;padding: 0% 8.5%;margin-top: 0%;">
            <td style="width: 111px;">Name</td>
            <td style="width: 146px;">NIC</td>
            <td style="width: 129px;">Specialization</td>
        </tr>


        <tr style="color:white;margin: 14%;"></tr>

        <?php
        if ($data != null) {
            for ($index = 0; $index < sizeof($data); $index++) {
                $id = $data[$index]['id'] ?? 0;
                $_SESSION['id'] = $data[$index]['id'];
                echo "<tr><td style='width: 120px;'>" . $data[$index]['userName'] ?? "" . "</td><td style='width: 156px;'>200068300174</td><td style='width: 144px;'>Cardiology</td><td><button onclick = 'z($id)' class=test>view</button></td></tr><tr style='color:white;margin: 3%;'></tr>";
            }
        } else {
            echo "<tr><td style='width: 120px;'>" . 'userName' . "</td><td style='width: 156px;'>200068300174</td><td style='width: 144px;'>Cardiology</td><td><button onclick = 'z(0)' class=test>view</button></td></tr><tr style='color:white;margin: 3%;'></tr>";
        }
        ?>

    </tbody>

</table>


<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>

<!-- Id has not been  get from db its hardcoded -->