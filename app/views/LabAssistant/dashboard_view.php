<?php require_once(APPROOT . "/views/LabAssistant/navbar_view.php"); ?>
<?php require_once(APPROOT . "/views/LabAssistant/sidenav_view.php"); ?>

<style>
    .donut-chart {
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin: 30px 0 30px 400px; /* Adjust margin to shift the chart left under the first card */
        background: conic-gradient(
            #151A7B 0% <?php echo ($data['status']['completed'] / $data['totalnumber']) * 100; ?>%, 
            green <?php echo ($data['status']['completed'] / $data['totalnumber']) * 100; ?>% 100%
        );
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
        font-size: 16px;
    }

    .donut-chart-text {
        display: flex;
        justify-content: center;
        margin-top: -30px;
        margin-left:370px;
        text-align: center;
    }

    .color-box {
        width: 15px;
        height: 15px;
        margin-right: 5px;
        display: inline-block;
        border-radius: 3px;
        vertical-align: middle;
    }

    .dashboard {
        display: flex;
        flex-direction: column;
        align-items: flex-start; /* Align items to the left */
        width: 100%;
        padding-left: 100px; /* Shift layout a bit to the right */
    }

    .card-container {
        display: flex;
        justify-content: flex-end; /* Align cards to the left */
        width: 60%;
        margin-bottom: 30px;
        margin-left: 300px;
        gap: 20px; /* Add space between the cards */
        flex-wrap: wrap; /* Allow cards to wrap if screen is small */
    }

    li.option {
        list-style-type: none;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin: 10px; /* Add margin around each card */
        text-align: center;
        width: 250px; /* Fixed width for consistency */
        flex: 1 1 45%; /* Flex settings to adjust responsiveness */
    }

    li.option img {
        width: 150px;
    }

    /* Container for aligning Donut Chart and Calendar horizontally */
    .chart-calendar-container {
        display: flex;
        flex-direction: row; /* Align horizontally */
        gap: 90px; /* Add space between the chart and calendar */
        margin-top: 20px;
    }

    /* Style for the calendar container */
    .month-navigation-container {
        width: 400px; /* Adjust width to fit calendar */
        height: auto;
        border: 2px solid blue;
        border-radius: 10px;
        overflow: hidden;
        background-color:#151A7B;
    }

    .month-navigation {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        background-color: #ffffff;
    }

    .month-navigation button {
        width: 40px;
        height: 40px;
        background-color: transparent;
        border: none;
        font-size: 20px;
        cursor: pointer;
        outline: none;
    }

    #month-year {
        font-size: 18px;
        font-weight: bold;
    }

    .month-navigation button:hover {
        background-color: #ccc;
        border-radius: 50%;
        width: 33px;
        height: 33px;
    }

    table.caltable {
        width: 100%;
        border-collapse: collapse;
    }

    table.caltable th, table.caltable td {
        padding: 10px;
        text-align: center;
    }

    /* New CSS to make dates white */
    .caltable td {
        color: white; /* Set text color to white */
    }

    .today-date {
    background-color: green; /* Set a color to distinguish today's date */
    color: white;
    border-radius: 50%; /* Make it round */
    padding: 10px;
    font-weight: bold;
}

</style>

<article class="dashboard">
    <!-- Cards Section -->
    <div class="card-container">
        <li class="option">
            <div><img src=<?php echo URLROOT . "/resources/lab2.png" ?>></div>
            <div><br>Total Reports<br><a style="font-size:4vh"><?php echo $data['totalnumber'] ?? 9 ?></a></div>
        </li>

        <li class="option">
            <div><img src=<?php echo URLROOT . "/resources/lab1.png" ?>></div>
            <div><br>Completed Reports<br><a style="font-size:4vh"><?php echo $data['status']['completed'] ?? 7 ?></a></div>
        </li>
    </div>

    <!-- Donut Chart and Calendar Section -->
    <div class="chart-calendar-container">
        <!-- Donut Chart Section -->
        <div class="donut-chart">
            <div class="center-circle"></div>
            <div class="label"><?php echo round($data['status']['completed'] / $data['totalnumber'] * 100); ?>% Completed</div>
        </div>

        <!-- Calendar Section -->
        <div class="month-navigation-container">
            <div class="month-navigation">
                <button onclick="prevMonth()">&lt;</button>
                <span id="month-year">May 2024</span>
                <button onclick="nextMonth()">&gt;</button>
            </div>
            <table class="caltable">
                <thead>
                    <tr></tr>
                    <tr>
                        <th style="color: #f6eca9;">Sun</th>
                        <th style="color: #f6eca9;">Mon</th>
                        <th style="color: #f6eca9;">Tue</th>
                        <th style="color: #f6eca9;">Wed</th>
                        <th style="color: #f6eca9;">Thu</th>
                        <th style="color: #f6eca9;">Fri</th>
                        <th style="color: #f6eca9;">Sat</th>
                    </tr>
                </thead>
                <tbody id="calendar-body"></tbody>
            </table>
        </div>
    </div>

    <!-- Pie Chart Legend -->
    <div class="donut-chart-text">
        <div class="color-box" style="background-color:#151A7B;"></div> Completed Reports
        <div class="color-box" style="background-color:green; margin-left: 10px;"></div> Pending Reports
    </div>
</article>

<script>
    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    function generateCalendar(month, year) {
    const monthYearText = document.getElementById("month-year");
    const calendarBody = document.getElementById("calendar-body");
    const firstDay = new Date(year, month).getDay(); // Get the first day of the month
    const daysInMonth = new Date(year, month + 1, 0).getDate(); // Get total days in the month
    const today = new Date(); // Get today's date
    const todayDay = today.getDate();
    const todayMonth = today.getMonth();
    const todayYear = today.getFullYear();

    monthYearText.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;

    let days = '';
    for (let i = 0; i < firstDay; i++) {
        days += '<td></td>'; // Empty cells before the first day
    }

    for (let day = 1; day <= daysInMonth; day++) {
        let isToday = (todayDay === day && todayMonth === month && todayYear === year); // Check if it's today
        if ((firstDay + day - 1) % 7 === 0) {
            days += '<tr>';
        }

        // Add the "today-date" class if it's today's date
        if (isToday) {
            days += `<td class="today-date">${day}</td>`;
        } else {
            days += `<td>${day}</td>`;
        }

        if ((firstDay + day) % 7 === 0) {
            days += '</tr>';
        }
    }

    calendarBody.innerHTML = days;
}


    function prevMonth() {
        if (currentMonth === 0) {
            currentMonth = 11;
            currentYear--;
        } else {
            currentMonth--;
        }
        generateCalendar(currentMonth, currentYear);
    }

    function nextMonth() {
        if (currentMonth === 11) {
            currentMonth = 0;
            currentYear++;
        } else {
            currentMonth++;
        }
        generateCalendar(currentMonth, currentYear);
    }

    generateCalendar(currentMonth, currentYear); // Initial call to generate the calendar
</script>

<?php require_once(APPROOT . "/views/LabAssistant/footer_view.php"); ?>
