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
<style>
   
.details {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}


.details p {
    margin: 0; 
    line-height: 1.5; 
}
</style>
<body>
    <div style="margin-left:23%;">
            <div class="details-container" style="display: flex; flex-direction:column; justify-content:flex-start; width :100%;margin-top:2%">
                <div style="display: flex; flex-direction:row">
                    <div class="details" style="width:50%">
                        <?php 
                            echo "<p>Patient Name  : ".$patient["name"]."</p>";
                            echo "<br>";
                            echo "<br>";
                            echo "<p>Patient Email  : ".$patient["age"]."</p>";
                            echo "<br>";
                            echo "<br>";
                            echo "<p>Patient Phone Number  : ".$patient["gender"]."</p>";
                        ?>

                    </div>
                    <div class="details" style="width:50%">
                        <?php   echo "<p>Appointment Date  : ".$appointment["Date"]."</p>"; 
                                echo "<br>";
                                echo "<br>";
                                echo "<p>Appointment Time  : ".$appointment["Appointment_Time"]."</p>";
                                echo "<br>";
                                echo "<br>";
                                echo "<p>Appointment Status  : ".$appointment["Days_left"]."</p>";
                        ?>
                    </div>
                </div>
                <div class="details" style="width:95%;">
                    <?php 
                        echo "<p>Medications  : ".$prescription[0]["Medications"]."</p>";
                        echo "<br>";
                        echo "<br>";
                        echo "<p>instructions  : ".$prescription[0]["instructions"]."</p>";
                        echo "<br>";
                        echo "<br>";
                        echo "<p>labtesting  : ".$prescription[0]["labtesting"]."</p>";
                    ?>

                </div>
            </div>
    </div>
</body>
<?php require_once(APPROOT."/views/Admin/footer_view.php");?>