<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<aside class="sidenav">
    <ul>
        <img src="<?=URLROOT."/resources/user.png"?>" ><br><br>
        <li id="Dashboard" onclick="y('Dashboard')">Dashboard</li>
        <li id="ViewAppointment" onclick="y('ViewAppointment')">Appointment</li>
        <li id="ViewReminder" onclick="y('ViewReminder')">Reminder</li>
    </ul>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

</aside>
<article class="dashboard">
    <div style="margin-left:24%;">


        <?php
            echo '<table>';
            echo '<tr>';
            echo '<th> refence_No </th>';
            echo '<th> Date </th>';
            echo '<th> Appointment_Time </th>';
            echo '<th> Name </th>';
            echo '<th> Age </th>';
            echo '<th> Days_left </th>';
            echo '<th> Total_Amount </th>';
            echo '<th> Patient_ID </th>';
            echo '<th> More </th>';
            echo '</tr>';
            
            foreach ($appointments as $row) {
                echo '<tr>';
                echo '<td>'.$row['refence_No'].'</td>';
                    echo '<td>'.$row['Appointment_Date'].'</td>';
                    echo '<td>'.$row['Appointment_Time'].'</td>';
                    echo '<td>'.$row['Name'].'</td>';
                    echo '<td>'.$row['Age'].'</td>';
                    echo '<td>'.$row['Days_left'].'</td>';
                    echo '<td>'.$row['Total_Amount'].'</td>';
                    echo '<td>'.$row['Patient_ID'].'</td>';
                    echo '<td><button class="bluebutton" onclick="window.location.href=\''.URLROOT.'/Doctor/ViewMoreAppoinment/'.$row['Appointment_Id'].'\'">More</button></td>';
                    
                echo '</tr>';
            }
            echo '</table>';
      
        ?>
    </div>
    </div>
    </div>
</article>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>