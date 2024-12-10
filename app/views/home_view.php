<?php
include_once(APPROOT . '/views/header_view.php');
session_start();
if ($_SESSION != null && isset($_SESSION['status'])) {
    print_r($_SESSION['status']);
    $_SESSION['status'] = '';
}
?>

<div style="scrollbar-width: none">

    <div>
        <img src=<?= URLROOT . "/resources/home.jpg" ?> alt="" width="100%" height="2%" style="position: relative;margin-left: -2%;width: 103%;height: 95vh;">

        <div style="background-color: rgb(164,193,201,-2.9);position: absolute;bottom: 16%;;left: 0%;z-index: 2;width: 53%;margin-top: 81px;">
            <b>
                <p style="font-size: 67px;color: rgb(42, 42, 152);margin-left: 3%;margin-top: 162px;">Welcome to Gomez</p>
            </b>
            <p style="font-size: 51px;color: rgb(36, 44, 82);margin-left: 29px;"><b>Serving your health <br>
                    needs is our priority</b></p>
            <p style="font-size: 20px;color: rgb(36, 44, 82);margin-left: 42px;">There nothing more important than our good health,cause <br>that's our principal capital asset for our good future.</p>
            <a href="#make" style="
    text-decoration: none;
">
                <div class='logbutton' id="make1">
                    <font class="font1">Make appointment</font>
                </div>
            </a>
        </div>

    </div>
    <div class="images" id="b1">
        <div><a href=<?= URLROOT . "/Users/labreport" ?> style="text-decoration: none;">
                <img src=<?= URLROOT . "/resources/medical_report1.png" ?> alt="online lab reports" id="lab"><br><b style="color: #054f7d;">lab reports</b></a></div>
        <div><a href=<?= URLROOT . "/Users/consultation" ?> style="text-decoration: none;">
                <img src=<?= URLROOT . "/resources/consultation.png" ?> alt="online consultation" id="consult"><br><b style="color: #054f7d;">online consultation</b></a></div>
        <div><a href=<?= URLROOT . "/registration" ?> style="text-decoration: none;">
                <img src=<?= URLROOT . "/resources/registration.png" ?> alt="pre registration" id="prereg"><br><b style="color: #054f7d;">pre registration</b></a></div>
    </div>
    <div class="Welcome">
        <h1>Welcome to Gomez, Your Trusted Healthcare Partner for Over 35 Years!</h1>
    </div>
</div>
<div class="container">
    <section class="make1" id="make">
        <form action="appointment" method="get" style="display: flex;flex-direction:column;padding:5%;gap:2px;align-content: center;
  align-items: center;
">
            <h1>Make Appointment</h1>
            <label for="Doctor">Doctor Name</label>
            <input style="width: 100%;" type="text" name="fullname" id="Doctor" placeholder="Max- 20 Characters" class="holder">
            <label for="Specialization">Specialization</label>
            <select style="width: 100%;" placeholder="Any Specialization" name="specialization" id="Specialization" class="holder">
                <option value="" selected>Specialization</option>
                <?php
                for ($i = 0; $i < sizeof($data); $i++) {
                    echo "<option value='" . $data[$i]['specialization_id'] . "' data-area='" . $data[$i]['specialization_id'] . "'>" . $data[$i]['specialization_name'] . "</option>";
                }
                ?>
                <!-- <option value="0" data-area="0">Psychotherapist</option>
                <option value="1" data-area="1">Dentist</option>
                <option value="2" data-area="2">Psychotherapist</option>
                <option value="3" data-area="3">ENT</option>
                <option value="4" data-area="4">Eye surgeon</option>
                <option value="5" data-area="5">Pediatrician</option> -->
            </select>
            <label for="Date">Date</label>

            <input style="width: 100%;" type="date" name="date" id="Date" date-placeholder="11/6/2023" class="holder">
            <script>
                const today = new Date();

                const formattedToday = today.toISOString().split('T')[0];


                const maxDate = new Date();
                maxDate.setDate(today.getDate() + 7);
                const formattedMaxDate = maxDate.toISOString().split('T')[0];


                document.getElementById('Date').setAttribute('min', formattedToday);
                document.getElementById('Date').setAttribute('max', formattedMaxDate);
            </script><br>
            <div class='logbutton' id="maked">
                <input type="submit" style="text-decoration: none;
  width: 100%;
  background: transparent;
  border: none;
  color: white;" value="Make appointment">
            </div>
            <br>
        </form>
    </section>
    <section class="make1">
        <br><br><br>
        <p style="font-size: 28px;margin-left: 29px;text-align:center;"><b>If you want to save you details and appointment history</b></p>
        <br>
        <a href="registration" style="text-decoration: none;">
            <div class="logbutton" id="reg">
                <font class="font1" style="color:white">Register</font>
            </div>
        </a>
    </section>
</div>
<div class="aboutus">
    <p> Gomez is a healthcare institution known for its commitment to quality care and continuous investment in staff training. They offer a wide range of services, from routine check-ups to complex surgeries, with a state-of-the-art OPD lab facility for quick and accurate diagnostics. They prioritize patient health and are at the forefront of medical technology, incorporating minimally invasive procedures and shorter recovery times. They treat patients like family, creating personalized treatment plans and adhering to infection control protocols. Gomez is conveniently located, providing immediate care for medical emergencies. </p>
</div>


<section class="footer">
    <div class="box-container">
        <div class="column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#"> Home </a></li>
                <li><a href="/contactus"> Contact us </a></li>
            </ul>
        </div>
        <hr>
        <div class="column">
            <h3>Facilities</h3>
            <ul>
                <li><a href="#b1"> Prescription</a></li>
                <li><a href="#b1"> Pre Registeration </a></li>
                <li><a href="#b1"> online consultation </a></li>
                <li><a href="#b1"> online payment </a></li>
                <li><a href="#b1"> lab reports </a></li>
            </ul>
        </div>
        <hr>
        <div class="column">
            <h3 id="contact">Contact info</h3>
            <ul>
                <li><a href="">0766414857/0766654712 </a></li>
                <li><a href="">gomezhospital@gmail.com</a></li>
                <li><a href="">No 63, Avissawella,<br> Sri Lanka</a></li>
            </ul>
        </div>
        <hr>
        <script src="script.js"></script>
        <!-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                const dateInput = document.getElementById('Date');
                const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format

                const maxDate = new Date();
                maxDate.setDate(maxDate.getDate() + 14); // Add 14 days to the current date
                const maxDateString = maxDate.toISOString().split('T')[0]; // Get max date in YYYY-MM-DD format

                dateInput.setAttribute('min', today); // Set the minimum date to today
                dateInput.setAttribute('max', maxDateString); // Set the maximum date to 14 days from today
            });
        </script> -->

        </body>

        </html>