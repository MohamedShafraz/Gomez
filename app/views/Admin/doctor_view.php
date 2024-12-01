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


    <tbody class="complaint" style="margin-top: 6%;height:20rem">
        <tr style="color:white;margin: 5%;"></tr>
        <tr style="position: fixed;
  background-color: #5998ff;
  left: 28%;
  display: flex;
  top: 24%;
  padding: 0% 21% 0% 8%;
  width: 30.3%;
  font-family: 'inter';
  color: var(--Gomez-Blue);
  color: white;
  gap: 36%;">
            <td>Name</td>
            <td>NIC</td>
            <td>Specialization</td>
        </tr>



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
<button onclick="window.location.href += '/create'" style="    padding: 1%;margin:0%;
    margin-left: 28%;margin-top:1%" class="test">Create new</button>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>