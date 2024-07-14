<?php require_once(APPROOT . "/views/Owner/navbar_view.php"); ?>
<style>
    .tested {
        display: flex;
        flex-direction: row;
        gap: 1.5rem;
    }

    .MIS {
        color: var(--Gomez-Blue);
        position: fixed;
        top: 3rem;
        left: 20rem;
        font-size: 5rem;
        font-style: 'Inter';
        font-family: inter;
        display: none;
    }

    .next {
        display: flex;
        flex-direction: row;
        width: 67rem;
        overflow-x: scroll;
        scrollbar-width: none;
        /* margin-left: 22%; */
        overflow-y: clip;
        height: 17rem;
    }

    .testing {
        width: 15rem;
        height: 15rem;
        box-shadow: 1px 1px 3px;
        background: whitesmoke;
        padding-top: 3%
    }

    .print_button {
        background: white;
        border: 1px aliceblue;
        padding: 3%;
        border-radius: 4px;
        color: var(--Gomez-Blue);
    }

    .print_button:hover {
        background: var(--Gomez-Blue);
        color: white;
    }

    #image {

        display: none;
    }

    @media print {
        .MIS {
            display: block;
        }

        .print_button {
            display: none;
        }

        #image {

            display: block;
        }

        .testing {
            width: 20rem;
            height: 20rem;
            scale: 1.05;
            box-shadow: none;
        }

        .next {
            height: 50rem;
            gap: 50rem;
            width: 60rem;
        }

        .dashboard ul {
            margin: 2% 0%;
        }


        .horizontal-scroll {
            overflow-x: visible;
            margin-left: 0%;
        }

        .tested {
            flex-direction: column;
        }

        #idOdTableNotToPrint {
            display: none;
        }

        .navbar {
            display: none;
        }

        #myChart1,
        #myChart2,
        #myChart3,
        #myChart5,
        #myChart4,
        #myChart {
            box-shadow: none;
        }

        #disabled {
            display: block;
        }



        .dashboard ul {
            margin: 1% 0%;
        }

        #flexed {
            flex-direction: column;
        }
    }

    #printit {
        margin: 0% 22%;
    }

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

    <div class="MIS">MIS report</div>

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
                <div><br>Active Receptionists<br><a style="font-size:8vh"><?php echo $data['Receptionist'] ?></a><br>
            </li>
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/LabAssistantCount.png" ?>></div>
                <div><br>Active <br>Lab Assistants<br><a style="font-size:8vh"><?php echo $data['LabAssistant'] ?></a>
            </li>
        </ul>

        <ul class="next
">
            <div class="tested">
                <div class="testing">
                    <canvas style="width:100px;height:100px;background:#f5f5f5;margin-top:-6%" id="myChart1"></canvas>
                </div>
                <div class="testing">
                    <canvas style="width:100px;height:100px;background:#f5f5f5;margin-top:-6%" id="myChart"></canvas>
                </div>
                <div class="testing">
                    <canvas style="width:200px;height:200px;background:#f5f5f5;margin-top:-6%" id="myChart2"></canvas>

                </div>
            </div>
            <div class="tested">
                <div class="testing">
                    <canvas style="width:200px;height:200px;background:#f5f5f5;margin-top:-6%" id="myChart3"></canvas>
                </div>
                <div class="testing">
                    <canvas style="width:100px;height:100px;background:#f5f5f5;margin-top:-6%" id="myChart4"></canvas>
                </div>
                <div class="testing">
                    <canvas style="width:100px;height:100px;background:#f5f5f5;margin-top:-6%" id="myChart5"></canvas>
                </div>
            </div>

            <div class="tested">
                <div class="testing">
                    <canvas style="width:200px;height:200px;background:#f5f5f5;margin-top:-6%" id="myChart6"></canvas>

                </div>
                <div class="testing">
                    <canvas style="width:200px;height:200px;background:#f5f5f5;margin-top:-6%" id="myChart7"></canvas>
                </div>
                <div class="testing">
                    <canvas style="width:200px;height:200px;background:#f5f5f5;margin-top:-6%" id="myChart8"></canvas>

                </div>
            </div>


        </ul>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const ctx = document.getElementById('myChart');
            const ctx1 = document.getElementById('myChart1');
            const ctx2 = document.getElementById('myChart2');
            const ctx3 = document.getElementById('myChart3');
            const ctx4 = document.getElementById('myChart4');
            const ctx5 = document.getElementById('myChart5');
            const ctx6 = document.getElementById('myChart6');
            const ctx7 = document.getElementById('myChart7');
            const ctx8 = document.getElementById('myChart8');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Solved', 'Unsolved', 'check', 'need to check'],
                    datasets: [{
                        label: 'Issues',
                        data: [60, 50, 70, 40],
                        borderWidth: 1
                    }]
                },
                hoverOffset: 4,

            });
            new Chart(ctx8, {
                type: 'line',
                data: {
                    labels: ['Solved', 'Unsolved', 'check', 'need to check'],
                    datasets: [{
                        label: 'Issues',
                        data: [60, 50, 70, 40],
                        borderWidth: 1
                    }]
                },
                hoverOffset: 4,

            });
            new Chart(ctx6, {
                type: 'line',
                data: {
                    labels: ['Solved', 'Unsolved', 'check', 'need to check'],
                    datasets: [{
                        label: 'Issues',
                        data: [60, 50, 70, 40],
                        borderWidth: 1
                    }]
                },
                hoverOffset: 4,

            });
            new Chart(ctx7, {
                type: 'line',
                data: {
                    labels: ['Solved', 'Unsolved', 'check', 'need to check'],
                    datasets: [{
                        label: 'Issues',
                        data: [60, 50, 70, 40],
                        borderWidth: 1
                    }]
                },
                hoverOffset: 4,

            });
            new Chart(ctx4, {
                type: 'line',
                data: {
                    labels: ['Solved', 'Unsolved', 'check', 'need to check'],
                    datasets: [{
                        label: 'Issues',
                        data: [60, 50, 70, 40],
                        borderWidth: 1
                    }]
                },
                hoverOffset: 4,

            });
            new Chart(ctx5, {
                type: 'line',
                data: {
                    labels: ['Solved', 'Unsolved', 'check', 'need to check'],
                    datasets: [{
                        label: 'Issues',
                        data: [60, 50, 70, 40],
                        borderWidth: 1
                    }]
                },
                hoverOffset: 4,

            });
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
            new Chart(ctx3, {
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
        <div style="display: flex;margin-left: 82%;"><button class="print_button" onclick="window.print()">Print MIS Report</button></div>
    </div>

    </div>
    </div>
</article>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>