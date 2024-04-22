<?php require_once(APPROOT . "/views/Owner/navbar_view.php"); ?>
<style>
    .donut-chart {
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: conic-gradient(red 0% 40%,
                green 40% 70%,
                blue 70% 100%);
        /* margin: 50px auto; */
    }

    .center-circle {
        position: absolute;
        width: 140px;
        height: 140px;
        background-color: #f4f9ff;
        border-radius: 50%;
        top: 30px;
        left: 30px;
    }

    .label {
        position: absolute;
        text-align: center;
        width: 100%;
        top: 50%;
        transform: translateY(-50%);
        color: black;
        font-weight: bold;
    }

    .donut-chart-text {
        position: relative;
        top: 95%;
        /* Adjust the distance from the donut chart */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .color-box {
        width: 15px;
        height: 15px;
        margin-right: 5px;
        display: inline-block;
        border-radius: 3px;
        vertical-align: middle;
    }

    li.doughnet:hover {
        background: #f5f5f5;
        border-radius: 10px;
        box-shadow: 10px 10px 15px -9px;
    }

    li.option:hover {
        box-shadow: 3px 3px 7px black;
    }
</style>
<article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->
    <div class="scrollable-container">
        <ul class="horizontal-scroll">
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/PatientCount2.png" ?>></div>
                <div><br>Total Patients<br><a style="font-size:8vh"><?php echo $data['Patient'] ?></a></div><br><br>
            </li>
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/DoctorCount.png" ?>></div>
                <div><br>Active Doctors<br><a style="font-size:8vh"><?php echo $data['Doctor'] ?></a></div><br><br>
            </li>
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                <div><br>Active Receptionists<br><a style="font-size:8vh"><?php echo $data['Receiptionist'] ?></a><br>
            </li>
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/LabAssistantCount.png" ?>></div>
                <div><br>Active <br>Lab Assistants<br><a style="font-size:8vh"><?php echo $data['Lab_Assistant'] ?></a>
            </li>
        </ul>
        <ul style="display: flex;flex-direction:row">
            <li style="
        /* background: #f4f9ff; */
    width: max-content;
    padding: 7% 7%;
    /* border-radius: 10px; */
    /* box-shadow: 12px 6px 10px 0px; */
    margin: -32px 0px 0px -41px;
" class="doughnet">
                <div class="donut-chart" style="background: conic-gradient(
    rgba(13, 71, 128, 1) 0% <?php echo 2 * 100 / ($data['Patient']); ?>%, 
    rgba(9, 114, 234, 1) <?php echo 2 * 100 / ($data['Patient']); ?>% 100%);">
                    <div class="center-circle"></div>
                    <!-- <div class="label">Patient</div> -->
                    <br>
                    <div class="donut-chart-text">
                        <span class="color-box" style="background-color: rgba(13, 71, 128, 1);"></span>
                        <span>Registered&ensp;</span>
                        <span class="color-box" style="background-color: rgba(9, 114, 234, 1);"></span>
                        <span>Unregistered</span>
                    </div>
                </div>
            </li>
            <img src="<?= URLROOT . '/resources/line-chart.jpg' ?>" alt="line-chart" width="400px" style="margin-left:16%">
            </li>
        </ul>
    </div>

    </div>
    </div>
</article>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>