<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">

<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>

<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/appointments.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">

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
</style>

</aside>
<article class="dashboard">
    <div class="complaint" style="margin-left:24%; margin-top:50px;font-family: inter;">


        <?php
            echo '<table>';
            echo '<tr>';
            echo '<td style="width: 20%;"> Name </td>';
            echo '<td style="width: 20%;"> Age </td>';
            echo '<td style="width: 20%;"> More </td>';
            echo '</t style="width: 20%;"r>';
            echo '<tr style="color:white;margin: 1%;"></tr>';
            foreach ($appointments as $row) {
                echo '<tr>';
                    echo '<td style="width: 20%;">'.$row['Name'].'</td>';
                    echo '<td style="width: 20%;">'.$row['Age'].'</td>';
                    echo '<td style="width: 20%;"><a><button onclick="window.location.href=\''.URLROOT.'/Doctor/ViewMoreAppoinment/'.$row['Appointment_Id'].'\'">More</button></a></td>';
                    echo '<tr style="color:white;margin: 1%;"></tr>';
                echo '</tr>';
            }
            echo '</table>';
      
        ?>
    </div>
    </div>
    </div>
</article>
</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php");?>