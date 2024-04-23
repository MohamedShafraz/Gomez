<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/Admin/navbar_view.php"); ?>

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
</style>
<br><br>
<div class="complainttext">Appointments</div>
<div class="complaintheader">
    <table>


        <!-- <tr>
            <td style='width: 120px;'>Saj</td>
            <td style='width: 156px;'>Doc</td>
            <td style='width: 144px;'>Reactivate</td>
            <td style='width: 120px;'>4/1/2024</td>
            <td style='width: 60px;'>11:59</td>
        </tr>
        <tr style='color:white;margin: 3%;'></tr>
        <tr>
            <td style='width: 120px;'>Saj</td>
            <td style='width: 156px;'>Doc</td>
            <td style='width: 144px;'>Reactivate</td>
            <td style='width: 120px;'>4/1/2024</td>
            <td style='width: 60px;'>11:59</td>
        </tr>
        <tr style='color:white;margin: 3%;'></tr>
        <tr>
            <td style='width: 120px;'>Saj</td>
            <td style='width: 156px;'>Doc</td>
            <td style='width: 144px;'>Reactivate</td>
            <td style='width: 120px;'>4/1/2024</td>
            <td style='width: 60px;'>11:59</td>
        </tr>
        <tr style='color:white;margin: 3%;'></tr> -->
        </tbody>

    </table>
</div>

</article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>