<?php require_once(APPROOT . "/views/Admin/navbar_view.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <div><br>Total Patients<br><a style="font-size:8vh"><?php echo $data['Patient'] ?? 9 ?></a></div><br><br>
            </li>
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/DoctorCount.png" ?>></div>
                <div><br>Active Doctors<br><a style="font-size:8vh"><?php echo $data['Doctor'] ?? 7 ?></a></div><br><br>
            </li>
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                <div><br>Active Receptionists<br><a style="font-size:8vh"><?php echo $data['Receptionist'] ?? 7 ?></a><br>
            </li>
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/LabAssistantCount.png" ?>></div>
                <div><br>Active <br>Lab Assistants<br><a style="font-size:8vh"><?php echo $data['Lab_Assistant'] ?? 1 ?></a>
            </li>
        </ul>
        <ul style="display: flex;
  flex-direction: row;">
            <div style="width: 15rem;
  height: 15rem;box-shadow: 1px 1px 3px;
  background: whitesmoke;">
                <canvas style="width:100px;height:100px;background:#f5f5f5;margin-top:-6%" id="myChart1"></canvas>
            </div>
            <!-- <div style="width: 15rem;
  height: 15rem;box-shadow: 1px 1px 3px;
  background: whitesmoke;">
                <canvas style="width:100px;height:100px;background:#f5f5f5;margin-top:-6%" id="myChart"></canvas>
            </div> -->
            <div style="width: 15rem;
  height: 15rem;box-shadow: 1px 1px 3px;
  background: whitesmoke;">
                <canvas style="width:200px;height:200px;background:#f5f5f5;margin-top:-6%" id="myChart2"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                // const ctx = document.getElementById('myChart');
                const ctx1 = document.getElementById('myChart1');
                const ctx2 = document.getElementById('myChart2');
                // new Chart(ctx, {
                //     type: 'line',
                //     data: {
                //         labels: ['Solved', 'Unsolved', 'check', 'need to check'],
                //         datasets: [{
                //             label: 'Issues',
                //             data: [60, 50, 70, 40],
                //             borderWidth: 1
                //         }]
                //     },
                //     hoverOffset: 4,

                // });
                new Chart(ctx1, {
                    type: 'doughnut',
                    data: {
                        labels: ['Registered', 'Unregistered'],
                        datasets: [{
                            label: 'Registered and unregistered Patient',
                            data: [<?php echo 2 * 100 / ($data['Patient']); ?>, <?php echo 2 * 100 / ($data['Patient']); ?>],
                            borderWidth: 1
                        }]
                    },
                    hoverOffset: 4,
                });
                new Chart(ctx2, {
                    type: 'bar',
                    data: {
                        labels: ['2024-04-29', '2024-04-30', '2024-05-01', '2024-05-02', '2024-05-03', '2024-05-04', '2024-05-05'],
                        datasets: [{
                            label: 'Appointments',
                            data: [3, 11, 0, 0, 0, 0, 0],
                            backgroundColor: [
                                'rgba(13, 71, 128)',
                                'rgb(54, 162, 235)',
                            ],
                            hoverOffset: 4,
                        }]
                    },
                    animation: {
                        animateRotate: true,
                    }
                });
            </script>



            </li>
        </ul>
    </div>

    </div>
    </div>
</article>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>