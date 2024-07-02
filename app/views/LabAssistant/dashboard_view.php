<?php require_once(APPROOT . "/views/LabAssistant/navbar_view.php"); ?>
<?php require_once(APPROOT . "/views/LabAssistant/sidenav_view.php"); ?>
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

    li.option {
        margin-bottom: 20px;
        /* Add space between each content box */
        padding: 20px;
        /* Optional: Add padding for additional space inside each content box */
    }

    .dashboard {
        display: flex;
        flex-wrap: wrap;
        /* Allow content boxes to wrap to the next line */
        justify-content: space-between;
        /* Distribute content boxes evenly across the container */
    }
</style>
<article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->
    <div class="scrollable-container">
        <ul class="horizontal-scroll" style="overflow-x: initial">
            <ul style="display:flex;flex-direction:row;">
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/lab2.png" ?> style="width:150px"></div>
                    <div><br>Total Reports<br><a style="font-size:8vh"><?php echo $data['totalnumber'] ?? 9 ?></a></div><br><br>
                </li>
                <li class="option">
                    <div><img src=<?php echo URLROOT . "/resources/lab1.png" ?> style="width:150px"></div>
                    <div><br>Completed Reports<br><a style="font-size:8vh"><?php echo $data['status']['completed'] ?? 7 ?></a><br>
                </li>



            </ul>

</article>
<?php require_once(APPROOT . "/views/LabAssistant/footer_view.php"); ?>