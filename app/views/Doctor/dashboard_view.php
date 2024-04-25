<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">

<style>
    #grad1 {
  height: 200px;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right, red , yellow);
}

.buttonspace{
    display: flex;
    justify-content: end;
    font-size: 30px;
    grid-template-columns: repeat(auto-fit, minmax(1rem, 0.3fr));
    gap: 1rem;
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

.complaint tr{
    display: flex;
    flex-direction: row;
    align-content: center;
    gap: 16px;
    font-size: large;
    /* width: 795px; */
    background-color: beige;
    width: 1023px;
    padding: 0% 5% 0% 5%;
    line-height: 7vh;
    border-radius: 8px;

}

.complaint {
        margin-top: 50px;
        margin-left: -16%; /* Adjust the margin-left value to move the table to the left */
        width: 70%; /* Adjust the width if necessary */
    }


</style>


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
                    

        <div class="complaint"style="margin-top:50px;">
            <?php

                echo '<table style="width:70%">';
                echo '<tr>';
                echo '<td style="width: 20%;"> Reference No </td>';
                echo '<td style="width: 20%;"> Date </td>';
                echo '<td style="width: 20%;"> Appointment Time </td>';
                echo '<td style="width: 20%;"> Name </td>';
                echo '<td style="width: 20%;"> More </td>';
                echo '<tr style="color:white;margin: 1%;"></tr>';
                echo '</tr>';

                foreach ($appointments as $row) {
                    echo '<tr>';
                    echo '<td style="width: 20%;">'.$row['refence_No'].'</td>';
                    echo '<td style="width: 20%;">'.$row['Appointment_Date'].'</td>';
                    echo '<td style="width: 20%;">'.date('H:i:s', strtotime($row['Appointment_Time'])).'</td>';
                    echo '<td style="width: 20%;">'.$row['Name'].'</td>';
                    echo '<td style="width: 20%;"><button onclick="window.location.href=\''.URLROOT.'/Doctor/ViewMoreAppoinment/'.$row['Appointment_Id'].'\'">More</button></td>';
                    echo '<tr style="color:white;margin: 1%;"></tr>';
                    echo '</tr>';
                }

            ?>
        </div>
    </div>
</article>

<?php require_once(APPROOT . "/views/doctor/footer_view.php")?>