<?php
include_once(APPROOT . '/views/header_view.php');
?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/contactus.css">
<style>
    .flex-container {
        display: flex;
        flex-wrap: wrap;

        /* justify-content: space-between; Adjust as needed */
    }

    .flex-item {
        width: calc(50% - 10px);
        /* Adjust width and margin as needed */

        box-sizing: border-box;
        border: 1px solid #ccc;
        /* Optional: Add borders for clarity */
        grid-column-gap: 3rem;
        /* flex-direction: column; */
        display: flex;
        flex-direction: row;
    }

    img {
        max-width: 100%;
        height: auto;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<br><br><br>

<body>

    <center>
        
        <div class="flex-container" style="margin-top: 3rem; ">
            <!-- Your flex items go here -->
            <form action="" method="post">
                <label>Doctor Name:</label>
                <input type="text" name="fullname" id="" value="<?=$_GET['fullname']?>" disabled><br>
                <label>Doctor Speciality:</label>
                <input type="text" name="Specialization" id="" value="<?=$_GET['specialization']?>" disabled><br>
                <label>Appointment Date:</label>
                <input type="date" name="date" value="<?=$_GET['date']?>" disabled><br>
                <label>Start Time:</label>
                <input type="time" name="start_time" value="<?=$_GET['strt_time']?>" disabled><br>
                <label>End Time:</label>
                <input type="time" name="end_time" value="<?=$_GET['end_time']?>" disabled><br>

                <label>Patient Name:</label>
                <input type="text" name="name" id=""><br>
                <label for="">Birth Of Date:</label>
                <input type="date" name="date_of_birth" id=""><br>
                <label>Phone Number</label>
                <input type="number" name="phonenumber"><br>
                <input type="submit" name="submitted" id="" value="Finished appointment">

            </form>
                

                <!-- Add more items as needed -->
            </div>

    </center>





</body>

</html>