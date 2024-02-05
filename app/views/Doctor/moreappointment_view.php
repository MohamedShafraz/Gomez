<?php require_once(APPROOT."/views/Doctor/navbar_view.php");?>
<aside class="sidenav">
    <ul>
        <img src="<?=URLROOT."/resources/user.png"?>" ><br><br>
        <li><a href="<?=URLROOT."/DoctorController"?>">Dashboard</a></li>
        <li><a href="<?=URLROOT."/DoctorController/ViewAppointment/"?>">Appointment</a></li>
        <li><a href="<?=URLROOT."/DoctorController/ViewPrescription"?>">Prescription</a></li>
        <li><a href="<?=URLROOT."/DoctorController/ViewReminder"?>">Reminder</a></li>
    </ul>
</aside>

<body>
    <article class="dashboard">
        <div style="margin-left:23%;">

            <div class="profile-container" style="display: flex; flex-direction:column; width :96% ; margin-top: 2%; padding: 1% ; background-color: #f2f2f2;">
                <div style="display: flex; flex-direction: row; justify-content: space-between; height: 50px; width :100%">
                    <div style="margin: 0px; ">Appoinment Details</div>
                    <div style="display: flex; flex-direction: row;">
                        <button style="width: 150px;" class="bluebutton" onclick="location.href='<?=URLROOT."/DoctorController/AddprescriptionView"?>'">Add Prescription</button>
                    </div>
                </div>
                <div style="display: flex; flex-direction:row; justify-content:space-between; width :100%">
                    <div class="details">
                        <?php 
                            echo "Appointment ID  : ".$appointments["Appointment_Id"];
                            echo "<br>";
                            echo "<br>";
                            echo "Name  : ".$appointments["Name"];
                            echo "<br>";
                            echo "<br>";
                            echo "Patient ID  : ".$appointments["Patient_ID"];
                            echo "<br>";
                            echo "<br>";
                            
                            
                        ?>

                    </div>
                    <div class="details">
                        <?php   
                            echo "Date  : ".$appointments["Date"];
                            echo "<br>";
                            echo "<br>";
                            echo "Time  : ".$appointments["Appointment_Time"];
                            echo "<br>";
                            echo "<br>";

                        ?>
                    </div>
                </div>   
            </div>
            
            <div class="profile-container" style="display: flex; flex-direction:column; width :96% ; margin-top: 2%; padding: 1% ; background-color: #f2f2f2;">
                <div style="display: flex; flex-direction: row; justify-content: space-between; height: 50px; width :100%">
                    <div style="margin: 0px; ">Patient Details</div>
                </div>
                <div style="display: flex; flex-direction:row; justify-content:space-between; width :100%">
                    <div class="details">
                        <?php 
                            echo "Appointment ID  : ".$patient["ID"];
                            echo "<br>";
                            echo "<br>";
                            echo "Name  : ".$patient["name"];
                            echo "<br>";
                            echo "<br>";
                            echo "Patient Age  : ".$patient["age"];
                            echo "<br>";
                            echo "<br>";
                            
                            
                        ?>

                    </div>
                    <div class="details">
                        <?php   
                            echo "Gender  : ".$patient["gender"];
                            echo "<br>";
                            echo "<br>";
                            echo "Address  : ".$patient["address"];
                            echo "<br>";
                            echo "<br>";
                            echo "Contact  : ".$patient["phonenumber"];
                        ?>
                    </div>
                    <div class="details">
                        <?php   
                            echo "Gaurdian Name  : ".$patient["guardianName"];
                            echo "<br>";
                            echo "<br>";
                            echo "Gaurdian Phone  : ".$patient["guardianPhone"];
                            echo "<br>";
                            echo "<br>";
                            echo "type  : ".$patient["type"];
                        ?>
                    </div>

                </div>   
            </div>
            
        
        </div>
        
    </div>
        </div>
    </article>
</body>
<?php require_once(APPROOT."/views/Admin/footer_view.php");?>