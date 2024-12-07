<?php require_once(APPROOT . "/views/patient/navbar_view.php"); ?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/dashboard.css">
<style>
    #grad1 {
        height: 200px;
        background-color: red;
        /* For browsers that do not support gradients */
        background-image: linear-gradient(to right, red, yellow);

        .h {
            background-color: black;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.6;
            transition: 0.3s;
        }

        .h:hover {
            opacity: 1
        }
    }
</style>

<article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->
    <div style="    line-height: 300px;flex-direction: column;margin-left: 36%;display: flex;">
        <div style="display:flex; line-height: 15rem;">
            <div style="background:var(--Gomez-Option-Box);
    margin: 5% 0% 0% -20%;
    /* background: floralwhite; */
    box-shadow: 1px 1px 7px;
    border-radius: 44px;
    flex-basis: 69%;
    height: 17.5rem;">
                <div style="text-align: center;font-size: x-large;font-weight: bolder;margin: -14% 0% 0% 0%;">Welcome Back!</div>
                <article style="color: var(--Gomez-Pears);font-weight: bolder;font-family: 'Inter';font-size: 43px;line-height: 131%;margin: -12% 0% 0% 6%;">Check Your Health <br>Regularly</article>
                <a href="<?= URLROOT . "/patient/appointments/make" ?>"><button class="h" style="font-weight: bold;color: #11235A;background-color: #f6f5ed;padding: 1% 2% 1% 2%;border-radius: 15px;font-size: larger;width: max-content;margin: 1% 0% 0% 6%;"> Make Appointment</button></a>
                <img src="<?= URLROOT . "/public/resources/heart1.png" ?>" style="margin: -25% 67%;width: 26%;" class="beating-container">

            </div>
            <div style="flex-basis: 50%;">
                <div>
                    <div style="line-height: 46px;text-align: center;">
                        <button onclick="prevMonth()">&#9665;</button>
                        <span id="month-year"></span>
                        <button onclick="nextMonth()">&#9655;</button>
                    </div>
                    <table class="caltable" style="height: 17.5rem;width: 89%;margin-top: 1%;border-radius: 20px;padding: 3%;">
                        <thead>

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
                    <!-- <button onclick="addEvent()" style="margin-left: 44%;">Add Event</button> -->
                </div>
                <article id="events-container"></article>
            </div>
        </div>
        <div style="display: flex;">
            <div class="" style="width:71rem;margin: 3% 0% 0% -20%;background: white;box-shadow: 1px 1px 7px;flex-basis: 115%;height:16rem;flex-direction: row;display:flex;line-height: 1px;">
                <div class='flex-scroll-container' style='display: flex;flex-direction: column;height: 16rem;width:50%'>
                    <div style="border-block-end: 1px solid;text-align: center;align-items: center;font-weight: bolder;font-size: xx-large;line-height: 3rem;">Appointments</div>
                    <div>
                        <?php
                        $length = 3;

                        // Get the current date
                        $currentDate = date('Y-m-d');

                        // Filter data for current and future dates only
                        $filteredData = array_filter($data, function ($appointment) use ($currentDate) {
                            return strtotime($appointment['date']) >= strtotime($currentDate);
                        });

                        // Check if there is any filtered data
                        if (empty($filteredData)) {
                            echo "<div style='text-align: center; font-size: large; font-weight: bold; line-height:8'>No related data found.</div>";
                        }

                        // Determine the length of data to display
                        $length = min($length, count($filteredData));
                        $filteredData = array_slice($filteredData, 0, $length);

                        // Display filtered data
                        foreach ($filteredData as $appointment) {
                            echo "
        <div class='flex-scroll-item' style='line-height: 2;'>
            <div style='border-radius: 7px; flex-basis: 69%; height: 4rem; width: 23.5rem;'>
                <img src='" . URLROOT . "/public/resources/doctor1.png' style='padding: 0.5rem 0rem 0rem 0.5rem; width: 14%;'>
                <div style='text-align: center; font-size: x-large; font-weight: bolder; margin: -14% 0% 0% -35%;'>" . $appointment['fullname'] . "</div>
                <div style='text-align: center; font-size: x-large; font-weight: bolder; margin: -13% 0% 0% 43%;'>" . $appointment['date'] . "</div>
            </div>
        </div>";
                        }
                        ?>
                    </div>

                </div>
                <!-- <div style="    width: 33rem;">
                    <div style="border-block-end: 1px solid;text-align: center;align-items: center;font-weight: bolder;font-size: xx-large;line-height: 3rem;">Time Remaining</div>
                    <div id="countdown" style="margin: 23% 0% 0% 14%;"></div>
                </div> -->
                <div class='flex-scroll-container' style='display: flex;flex-direction: column;height: 16rem;width:50%'>
                    <div style="border-block-end: 1px solid;text-align: center;align-items: center;font-weight: bolder;font-size: xx-large;line-height: 3rem;">Lab Reports</div>
                    <div><?php
                            $length = 2;
                            if (empty($data)) {
                                echo "<div style='text-align: center; font-size: large; font-weight: bold;line-height:8'>No related data found.</div>";
                            }
                            if (sizeof($data) < 2) {
                                $length = sizeof($data);
                            }
                            for ($i = 0; $i < $length; $i++) {

                                echo "
                <div class='flex-scroll-item' style= 'line-height: 2;'>
                <div  style='border-radius: 7px;flex-basis: 69%;height: 4rem;width: 23.5rem;'>
                <img src='" . URLROOT . "/public/resources/doctor1.png' " . "style=' padding: 0.5rem 0rem 0rem 0.5rem; width: 14%;' >
                <div style='text-align: center;font-size: x-large;font-weight: bolder;margin: -14% 0% 0% -35%;'>" . $data[$i]['fullname'] . "</div>
                
                

            </div></div>
            ";
                            }

                            ?></div>
                </div>
            </div>

        </div>
    </div>
    </div>
</article>
<script>
    const calendarBody = document.getElementById("calendar-body");
    const eventsContainer = document.getElementById("events-container");
    let currentDate = new Date();
    let selectedDate = new Date();

    function generateCalendar() {
        const daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();
        const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1).getDay();

        document.getElementById("month-year").textContent = `${currentDate.toLocaleString('default', { month: 'long' })} ${currentDate.getFullYear()}`;

        while (calendarBody.firstChild) {
            calendarBody.removeChild(calendarBody.firstChild);
        }

        let day = 1;
        for (let week = 0; week < 6; week++) {
            const row = document.createElement("tr");

            for (let i = 0; i < 7; i++) {
                if ((week === 0 && i < firstDay) || day > daysInMonth) {
                    const emptyCell = document.createElement("td");
                    row.appendChild(emptyCell);
                } else {
                    const cell = document.createElement("td");
                    cell.textContent = day;

                    if (
                        day === selectedDate.getDate() &&
                        currentDate.getMonth() === selectedDate.getMonth() &&
                        currentDate.getFullYear() === selectedDate.getFullYear()
                    ) {
                        // Apply the CSS class to highlight the current date.
                        cell.classList.add("highlighted-date");
                    }

                    cell.addEventListener("click", function() {
                        selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), day);
                        const eventTitle = prompt("Enter event title:");
                        if (eventTitle) {
                            addEventToList(eventTitle);
                        }
                    });
                    row.appendChild(cell);
                    day++;
                }
            }

            calendarBody.appendChild(row);
            if (day > daysInMonth) {
                break;
            }
        }
    }

    function addEventToList(eventTitle) {
        const eventDiv = document.createElement("div");
        eventDiv.textContent = `${selectedDate.toLocaleString('default', { month: 'long' })} ${selectedDate.getDate()}: ${eventTitle}`;
        eventsContainer.appendChild(eventDiv);
    }

    function prevMonth() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        generateCalendar();
    }

    function nextMonth() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        generateCalendar();
    }

    function addEvent() {
        if (selectedDate < new Date(currentDate.getFullYear(), currentDate.getMonth(), 1)) {
            alert("You can't add events to past dates.");
            return;
        }
        const eventTitle = prompt("Enter event title:");
        if (eventTitle) {
            addEventToList(eventTitle);
        }
    }

    generateCalendar();


    // Set the date and time of the next appointment (replace with your actual date and time)
    const nextAppointmentDate = new Date('May 14, 2024 15:30:00 GMT+00:00');

    function updateCountdown() {
        const now = new Date().getTime();
        const timeDifference = nextAppointmentDate - now;

        if (timeDifference > 0) {
            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            document.getElementById('countdown').innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        } else {
            document.getElementById('countdown').innerHTML = 'Appointment has started!';
        }
    }

    // Update the countdown every second
    setInterval(updateCountdown, 1000);

    // Initial update
    updateCountdown();
</script>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>