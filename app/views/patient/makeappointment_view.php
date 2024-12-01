<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<style>
    .buttonspace {
        display: flex;
        justify-content: end;
        font-size: 30px;
        grid-template-columns: repeat(auto-fit, minmax(1rem, 0.3fr));
        gap: 1rem;
    }

    .popup {
        height: 10vh;
        background-color: white;
        color: black;
        width: 50%;
        align-items: center;
        gap: 1rem;
        position: fixed;
        padding: 5%;
        z-index: 5;
    }

    .button {
        height: 31px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #FFF;
        font-family: 'inter-bold';
        font-size: 10px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        padding: 10px;
        background-color: var(--Gomez-Purple);
        border-style: hidden;
        border-radius: 6px;
    }
</style>

<!-- background-color:#E9F3FD -->

<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
    <?php include APPROOT . '/views/patient/navbar_view.php' ?>

    <div class="popup" style="margin-top:9%;margin-right:29%;margin-left:29%;display:none">
        Are you sure you want to deactivate your account<br>
        <br>
        <div class="buttonspace" style="justify-content:center"><button class="button" style="background-color:red;padding-left: 5%;
  padding-right: 5%;
  padding-top: 2%;
  padding-bottom: 4%;" id="yes">yes</button><br><button id="no" class="button" style="background-color:green;padding-right: 5%;padding-left: 5%;
  padding-top: 2%;
  padding-bottom: 4%;">no</button></div>
    </div>
    <article class="dashboard">

        <!-- <a>Welcome to Gomez</a> -->
        <form action="<?= URLROOT . "/" . $_SESSION['userType'] . "/appointments/make/ShowDoc" ?>" method="get">
            <ul style="height: 26rem;background-color: white;padding: 5%;width: 59rem;">
                <section class="make" id="make" style="margin-top: -4rem;width: 59rem;margin-left: -1rem; background:#FFF;">
                    <h1 style="margin-bottom: 0rem;font-size: xxx-large;font-weight: bold;">Make Appointment</h1>
                    <label for="Doctor" style="font-weight: bold;font-size: 22px;"> Doctor Name</label>
                    <input type="text" name="doctor" id="Doctor" placeholder="Max- 20 Characters" class="holder">
                    <label for="Specialization" style="font-weight: bold;font-size: 22px;">Specialization</label>
                    <select style="width: 50%;" placeholder="Any Specialization" name="specialization" id="Specialization" class="holder">
                        <option value="" selected>Specialization</option>
                        <option value="0" data-area="0">Psychotherapist</option>
                        <option value="1" data-area="1">Dentist</option>
                        <option value="2" data-area="2">Psychotherapist</option>
                        <option value="3" data-area="3">ENT</option>
                        <option value="4" data-area="4">Eye surgeon</option>
                        <option value="5" data-area="5">Pediatrician</option>
                    </select>
                    <label for="Date" style="font-weight: bold;font-size: 22px;">Date</label>
                    <input type="date" name="Date" id="Date" date-placeholder="11/6/2023" class="holder">
                    <div class='logbutton' id="maked">
                        <input type="submit" style="border: none;width: 8rem;background-color: transparent;text-decoration: none;" value="Make Appointment" class="font1">
                    </div>
                    <br>
                </section>
                <!-- Your JavaScript Code -->

            </ul>
        </form>
        </div>
    </article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<script>
    function select2() {
        if (document.getElementsByClassName("navbar")[0].style.display == "none") {
            document.getElementsByClassName("navbar")[0].style.display = "flex";
        } else {
            document.getElementsByClassName("navbar")[0].style.display = "none";
        }
    }
    document.getElementById("deactivate").onclick = function() {
        document.getElementsByClassName("popup")[0].style.display = "block";
        document.getElementsByClassName("dashboard")[0].style.filter = "blur(3px)";
    };
    document.getElementById("no").onclick = function() {
        document.getElementsByClassName("popup")[0].style.display = "none";
        document.getElementsByClassName("dashboard")[0].style.filter = "";
    }
    document.getElementById("yes").onclick = function() {
        document.getElementsByClassName("popup")[0].style.display = "none";
        document.getElementsByClassName("dashboard")[0].style.filter = "";
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dateInput = document.getElementById('Date');
        const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format

        const maxDate = new Date();
        maxDate.setDate(maxDate.getDate() + 14); // Add 14 days to the current date
        const maxDateString = maxDate.toISOString().split('T')[0]; // Get max date in YYYY-MM-DD format

        dateInput.setAttribute('min', today); // Set the minimum date to today
        dateInput.setAttribute('max', maxDateString); // Set the maximum date to 14 days from today
    });
</script>