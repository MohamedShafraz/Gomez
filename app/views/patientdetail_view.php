<?php
include_once(APPROOT . '/views/header_view.php');
?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/contactus.css">
<style>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #f2f2f2;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-image {
        margin-right: auto;
    }

    .navbar-links {
        display: flex;
        gap: 20px;
    }

    .navbar-links a {
        text-decoration: none;
        color: #000;
        font-weight: bold;
    }

    .login-button {
        padding: 10px 20px;
        background-color: #007bff;
        width: 75px;
        margin-left: 50px;
        height: 33px;
        margin-top: 5px;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login-button:hover {
        background-color: #0056b3;
    }

    .form-container {
        display: flex;
        justify-content: space-between;
        margin: 20px;
        margin-top: 40px;
        padding: 20px;
        border-radius: 5px;
        background-color: rgb(248, 247, 247);
        color: rgb(46, 46, 46);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-section {
        flex: 1;
        padding: 0 10px;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input {
        width: calc(100% - 20px);
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .button-container {
        text-align: center;
        margin-top: 20px;
    }

    .finish-button {
        padding: 10px 20px;
        background-color: blue;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .finish-button:hover {
        background-color: rgb(9, 9, 172);
    }

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

    <div class="form-container">
        <div class="form-section">
            <!-- Your flex items go here -->
            <form action="" method="post">
                <label for="fullname">Doctor Name:</label>
                <input type="text" name="fullname" id="fullname" value="<?= $_GET['fullname'] ?>" disabled><br>
                <label for="Specialization">Doctor Speciality:</label>
                <input type="text" name="Specialization" id="Specialization" value="<?= $_GET['specialization'] ?>" disabled><br>
                <label for="date">Appointment Date:</label>
                <input type="date" name="date" id="date" value="<?= $_GET['date'] ?>" disabled><br>
                <label for="start_time">Start Time:</label>
                <input type="time" name="start_time" value="<?= $_GET['strt_time'] ?>" disabled><br>
        </div>
        <div class="form-section">
            <label for="end_time">End Time:</label>
            <input type="time" name="end_time" value="<?= $_GET['end_time'] ?>" disabled><br>

            <label for="name">Patient Name:</label>
            <input type="text" name="name" id="name" placeholder="Perera" required><br>
            <label for="date_of_birth">Birth Of Date:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" required><br>
            <label for="phonenumber">Phone Number</label>
            <input type="text" name="phonenumber" id="phonenumber" required><br>

            <input type="submit" name="submitted" id="" value="Finished appointment">
        </div>
        </form>


        <!-- Add more items as needed -->
    </div>


    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.getElementById('date_of_birth');
            const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format

            const maxDate = new Date();
            maxDate.setDate(maxDate.getDate() - 1); // Add 14 days to the current date
            const maxDateString = maxDate.toISOString().split('T')[0]; // Get max date in YYYY-MM-DD format
            dateInput.setAttribute('max', maxDateString); // Set the maximum date to 14 days from today
        });
        document.querySelector('form').addEventListener('submit', function(e) {
            const phoneInput = document.getElementById('phonenumber').value.trim();

            // Sri Lankan phone number regex
            const sriLankanPhoneRegex = /^(?:\+94|0)?[7-9]\d{8}$/;

            if (!sriLankanPhoneRegex.test(phoneInput)) {
                e.preventDefault(); // Prevent form submission
                alert("Invalid Phone Number. Please enter a valid Sri Lankan phone number.");
            }
        });
    </script>

</body>

</html>