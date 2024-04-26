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

.option{
    min-width: 22rem;
}

</style>


</aside>
<article class="dashboard" style="margin-left:36%;font-family: inter;">

        <div style="display: flex;   margin-left: -11rem;">
            <div class="scrollable-container">
            <ul class="horizontal-scroll" style="    width: 84rem;height: 12rem;margin: 3rem 0rem 0rem 0rem;line-height: normal;">
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                    <div><br>Total Appointments<br><a style="font-size:8vh"><?php echo count($totalappointment) ?></a><br>
                </li>
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                    <div><br><?php echo date('F') ?> Appointments<br><a style="font-size:8vh"><?php echo count($totalmonthappointment) ?></a><br>
                </li>
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                    <div><br>Today Appointments<br><a style="font-size:8vh"><?php echo count($appointments) ?></a></div><br><br>
                </li>
                
             </ul>
            </div>
        </div>
        <div style="display: flex;   margin-left: -11rem;">
            <div class="scrollable-container">
            <ul class="horizontal-scroll" style="    width: 84rem;height: 12rem;margin: 3rem 0rem 0rem 0rem;line-height: normal;">
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/PatientCount2.png" ?>></div>
                    <div><br>Today Patients<br><a style="font-size:8vh"><?php echo count($totalmonthappointment) ?></a></div><br><br>
                </li>
                
             </ul>
            </div>
        </div>
                 
</article>
<script>


</script>



<?php require_once(APPROOT . "/views/doctor/footer_view.php")?>
