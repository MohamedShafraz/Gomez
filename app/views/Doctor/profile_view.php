<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<aside class="sidenav">
    <ul>
        <img src="<?= URLROOT . "/resources/user.png" ?>"><br><br>
        <li id="Dashboard" onclick="y('Dashboard')">Dashboard</li>
        <li id="ViewAppointment" onclick="y('ViewAppointment')">Appointment</li>
        <li id="ViewPrescription" onclick="y('ViewPrescription')"> Prescription </li>
        <li id="ViewReminder" onclick="y('ViewReminder')"> Reminder </li>
    </ul>


</aside>
<article class="dashboard">
    <div style="margin-left:23%;">

        <div class="profile-container" style="display: flex; flex-direction:column; width :96% ; margin-top: 2%; padding: 1% ; background-color: #f2f2f2;">
            <div style="display: flex; flex-direction: row; justify-content: space-between; height: 50px; width :100%">
                <div style="margin: 0px; ">Doctor Details</div>
                <div style="display: flex; flex-direction: row;">
                    <button class="bluebutton" onclick="location.href='<?= URLROOT . "/Doctor/EditProfileView" ?>'">Edit</button>
                    <button class="redbutton" onclick="location.href='<?= URLROOT . "/Doctor/DeactivateView" ?>'">Deactivate</button>
                </div>
            </div>
            <div style="display: flex; flex-direction:row; justify-content:space-between; width :100%">
                <div class="details">
                    <?php
                    echo "Full Name  : " . $data["doctor"]["fullname"];
                    echo "<br>";
                    echo "<br>";
                    echo "Email  : " . $data["user"]["Email"];
                    echo "<br>";
                    echo "<br>";
                    echo "Phone Number  : " . $data["doctor"]["phonenumber"];
                    ?>

                </div>
                <div class="details">
                    <?php echo "Specialization  : " . $data["doctor"]["Specialization"];
                    echo "<br>";
                    echo "<br>";
                    echo "Gender  : " . $data["doctor"]["gender"];
                    echo "<br>";
                    echo "<br>";
                    echo "Age  : " . $data["doctor"]["age"];
                    ?>
                </div>
                <div class="details">
                    <?php
                    echo "Username  : " . $data["user"]["Username"];
                    echo "<br>";
                    echo "<br>";
                    echo "NIC  : " . $data["doctor"]["NIC"];
                    echo "<br>";
                    ?>
                </div>
            </div>
        </div>


    </div>
    </div>
</article>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>