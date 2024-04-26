<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">

<style>
    #grad1 {
  height: 200px;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right, red , yellow);
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
    
}
tr{
    border-radius: 10px;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
    
}

.appointmentsection {
    background-color: #FFF;
    height: 150px;
}

button{
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
  font-size: initial;height: max-content;width: max-content;
}

</style>
<div id="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999; display: none;"></div>

<div id="alertBox" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 5px; z-index: 1000; display: none;">
  <div id="alertMessage"></div> <!-- Alert message will be displayed here -->
  <button onclick="closeAlert()" style="display: block; margin: 0 auto;">Close</button> <!-- Close button -->
</div>


<?php
  if(isset($message)){
    echo "<script>
            // Show the overlay and alert box
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('alertBox').style.display = 'block';
            // Set the alert message
            document.getElementById('alertMessage').innerHTML = '<p>$message</p>';
          </script>";
  }
?>


</aside>
<article class="dashboard" style="margin-left:36%;font-family: inter;">

        <div style="display: flex;   margin-left: -11rem;">
            <div class="scrollable-container">
            <ul class="horizontal-scroll" style="    width: 84rem;height: 12rem;margin: 3rem 0rem 0rem 0rem;line-height: normal;">
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                    <div><br> Total Appointments<br><a style="font-size:8vh"><?php echo count($totalmonthappointment) ?></a><br>
                </li>
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/PatientCount2.png" ?>></div>
                    <div><br>Total Patients<br><a style="font-size:8vh"><?php echo count($patients) ?></a></div><br><br>
                </li>
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                    <div><br>Today Appointments<br><a style="font-size:8vh"><?php echo count($appointments) ?></a></div><br><br>
                </li>
                
             </ul>
            </div>
        </div>
                    

        <div id="appointmentSlots" style="margin-top:50px;background-color:grey;margin-left:-18%;padding:2%">
                <?php
                
                $hourlyCounts = array_fill(0, 24, 0); 
                $currentDate = date('n/j/Y'); // Format: Month/Day/Year
                $currentWeekday = date('l');
                            
                foreach ($appointments as $appointment) {
                    
                    $hour = (int)substr($appointment['Appointment_Time'], 0, 2);
                    
                    $hourlyCounts[$hour]++;
                }
                
               
                for ($hour = 0; $hour < 24; $hour++) {
                    
                    if ($hourlyCounts[$hour] > 0) {
                        echo "<div class='appointmentsection' style='display: flex; align-items: center; justify-content: space-around; margin-bottom: 10px;font-weight:bolder;color:darkblue; border-left:solid black 5px'>";
                        echo "<div class='current-date'>";
                        echo "<p>Today is $currentDate ($currentWeekday)</p>";
                        echo "</div>";
                        echo "<p style='font-size: 18px; margin-right: 20px;'>$hour:00 - " . ($hour + 1) . ":00</p>";
                        echo "<p style='font-size: 18px; margin-right: 20px;'>{$hourlyCounts[$hour]}</p>";
                        echo "<button style='width:200px;text-align: center;' onclick='viewtimeslot($hour, " . ($hour + 1) . ")'>View</button>";
                        echo "</div>";
                    }
                }
                ?>
        </div>

</article>
<script>

function viewtimeslot(startTime,endTime){
    window.location.href = '<?= URLROOT ?>/Doctor/ShowPatientsAllocatedTimeSlot/' + encodeURIComponent(startTime) + '/' + encodeURIComponent(endTime);
}

function closeAlert() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('alertBox').style.display = 'none';
    document.getElementById('alertMessage').innerHTML = '';
    window.location.href = '<?= URLROOT ?>/Doctor/dashboard';
  }

</script>



<?php require_once(APPROOT . "/views/doctor/footer_view.php")?>