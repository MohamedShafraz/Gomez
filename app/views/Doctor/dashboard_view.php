<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<aside class="sidenav">
    
    <ul>
        <img src="<?= URLROOT . "/resources/user.png" ?>"><br><br>
        <li id="Dashboard" onclick="y('Dashboard')">Dashboard</li>
        <li id="ViewAppointment" onclick="y('ViewAppointment')">Appointment</li>
        <li id="ViewReminder" onclick="y('ViewReminder')">Reminder</li>
    </ul>

    <style>
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li a {
            text-decoration: none;
            color: inherit;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            color : darkblue;
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

        .card p{
            font-size: 100px;
            font-weight: bolder;
            margin-top:20px;
        }

        .card h1{
            font-size: 17px;
            font-weight: bolder;
            margin-bottom:0;
        }

    </style>



</aside>
<article class="dashboard" style="margin-left:24%;">
    <div >

                <div  style="width: 100%; margin-top: 40px; display:flex;flex-direction:row;justify-content:space-between;text-align:center; color:darkblue">
                    
                            <div class="card" style="width: 20%;height:200px;">
                                <h1>Today Appointments</h1>
                                <p><?php echo count($appointments) ?></p>
                            </div>
                            <div class="card" style="width: 20%;height:200px;">
                                <h1>Today Patients</h1>
                                <p><?php echo count($patients) ?></p>
                            </div>
                            <div class="card" style="width: 20%;height:200px;">
                                <h1>Appointments This Month</h1>
                                <p><?php echo count($totalmonthappointment) ?></p>
                            </div>
                            <div class="card" style="width: 20%;height:200px;">
                                <h1>Total Appointments</h1>
                                <p><?php echo count($totalappointment)  ?></p>
                            </div>
                 </div>
                    

        <div class="card" style="width: 96%; margin-top:20px">
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

            ?>
        </div>
    </div>
</article>

<?php require_once(APPROOT . "/views/doctor/footer_view.php")?>