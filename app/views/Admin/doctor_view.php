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
<div class="complainttext">Doctors</div>
<table class="complainttable">


    <tbody class="complaint" style="margin-top: 6%;">
        <tr style="    position: fixed;
    padding: 0% 7.2% 0% 7.8%;
    margin-top: 0%;
    gap: 10.7rem;background-color:beige">
            <td>Name</td>
            <td>NIC</td>
            <td>Specialization</td>
        </tr>

        <tr style="color:white;margin: 5%;"></tr>\

        <tr style="color:white;margin: 14%;"></tr>

        <?php

        for ($index = 0; $index < sizeof($data); $index++) {
            $id = $data[$index]['id'];
            $_SESSION['id'] = $data[$index]['id'];
            echo "<tr><td style='width: 120px;'>" . $data[$index]['userName'] . "</td><td style='width: 156px;'>200068300174</td><td style='width: 144px;'>Cardiology</td><td><button onclick = 'z($id)' class=test>view</button></td></tr><tr style='color:white;margin: 3%;'></tr>";
        }
        ?>

    </tbody>

</table>


<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>