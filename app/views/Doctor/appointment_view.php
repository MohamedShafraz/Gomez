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

        tr:nth-child(even) {
            background-color: white;
            font-weight: bolder;
        }

        /* Apply styles to odd rows */
        tr:nth-child(odd) {
            background-color: lightskyblue;
            font-weight: bolder;
        }

        .card{
            border-radius: 27px;
            background: #ffffff;
            box-shadow:  5px 5px 10px #b0b0b0,
                        -5px -5px 10px #ffffff;
            padding: 20px;
        }

        td {
            color: darkblue;
        }
    </style>

</aside>
<article class="dashboard">
    <div class="card" style="margin-left:24%; margin-top:20px">


        <?php
            echo '<table>';
            echo '<tr style="background-color: darkblue; color:white">';
            echo '<th> Reference No </th>';
            echo '<th> Date </th>';
            echo '<th> Appointment Time </th>';
            echo '<th> Name </th>';
            echo '<th> More </th>';
            echo '</tr>';
            
            foreach ($appointments as $row) {
                echo '<tr>';
                echo '<td>'.$row['refence_No'].'</td>';
                    echo '<td>'.$row['Appointment_Date'].'</td>';
                    echo '<td>'.date('H:i:s', strtotime($row['Appointment_Time'])).'</td>';
                    echo '<td>'.$row['Name'].'</td>';
                    echo '<td><button class="bluebutton" onclick="window.location.href=\''.URLROOT.'/Doctor/ViewMoreAppoinment/'.$row['Appointment_Id'].'\'">More</button></td>';
                    
                echo '</tr>';
            }
            echo '</table>';
      
        ?>
    </div>
    </div>
    </div>
</article>

<?php require_once(APPROOT . "/views/Admin/footer_view.php");?>