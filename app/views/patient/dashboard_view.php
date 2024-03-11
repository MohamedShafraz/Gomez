<?php require_once(APPROOT."/views/patient/navbar_view.php");?>
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/dashboard.css">
<style>
    #grad1 {
  height: 200px;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right, red , yellow);
}
</style>

<article class="dashboard">
    
    <!-- <a>Welcome to Gomez</a> -->
    <div style="    line-height: 300px;flex-direction: column;margin-left: 36%;display: flex;">
        <div style="display:flex; line-height: 15rem;" >
            <div  style="background: var(--Gomez-Option-Box);
    margin: 3% 0% 0% -20%;
    /* background: floralwhite; */
    box-shadow: 1px 1px 7px;
    border-radius: 44px;
    flex-basis: 69%;
    height: 19rem;">
                <div style="text-align: center;font-size: x-large;font-weight: bolder;margin: -12% 0% 0% 0%;">Welcome Back!</div>
                <article style="color: var(--Gomez-Pears);font-weight: bolder;font-family: 'Inter';font-size: 43px;line-height: 131%;margin: -8% 0% 0% 6%;">Check Your Health <br>Regularly</article>
                <button style="font-weight: bold;color: orangered;background-color: gainsboro;padding: 1% 2% 1% 2%;border-radius: inherit;font-size: larger;width: max-content;margin: 1% 0% 0% 6%;"> Make Appointment</button>
                <img src="<?=URLROOT."/public/resources/heart1.png"?>" style="margin: -25% 67%;width: 26%;" class="beating-container">

            </div>
            <div style="flex-basis: 50%;"><div>
                <div style="line-height: 46px;text-align: center;">
                <button onclick="prevMonth()">&#9665;</button>
                <span id="month-year"></span>
                <button onclick="nextMonth()">&#9655;</button>
                </div>
                <table class="caltable" style="height: 15rem;width: 76%;margin-top: -41%;">
                    <thead>
                        <tr>
                            <br>
                        </tr>
                        <tr>
                            <th style="color: rgb(37, 42, 176);">Sun</th>
                            <th style="color: rgb(37, 42, 176);">Mon</th>
                            <th style="color: rgb(37, 42, 176);">Tue</th>
                            <th style="color: rgb(37, 42, 176);">Wed</th>
                            <th style="color: rgb(37, 42, 176);">Thu</th>
                            <th style="color: rgb(37, 42, 176);">Fri</th>
                            <th style="color: rgb(37, 42, 176);">Sat</th>
                        </tr>
                    </thead>
                    <tbody id="calendar-body"></tbody>
                </table>
                <button onclick="addEvent()" style="margin-left: 44%;">Add Event</button>
            </div>
            <article id="events-container" style=""></article></div>
        </div>
        <div style="display: flex;">
            <div class="" style="width:71rem;margin: 3% 0% 0% -20%;background: white;box-shadow: 1px 1px 7px;flex-basis: 69%;height:16rem;flex-direction: row;display:flex;line-height: 1px;"> 
            <div class='flex-scroll-container' style='display: flex;flex-direction: column;height: 16rem;width:50%'>
            <div style="border-block-end: 1px solid;text-align: center;align-items: center;font-weight: bolder;font-size: xx-large;line-height: 3rem;">Appointments</div>
            <div>
            <?php 
            for ($i=0; $i < 2; $i++) { 
                
            echo "
                <div class='flex-scroll-item' style= 'line-height: 2;'>
                <div  style='border-radius: 7px;flex-basis: 69%;height: 4rem;width: 23.5rem;'>
                <img src='".URLROOT."/public/resources/doctor1.png' ". "style=' padding: 0.5rem 0rem 0rem 0.5rem; width: 14%;' >
                <div style='text-align: center;font-size: x-large;font-weight: bolder;margin: -14% 0% 0% -35%;'>".$data[$i]['Doctor_name']."</div>
                
                

            </div></div>
            ";
            }
              ?>
              </div>
              </div >
              <div style="    width: 33rem;">
              <div style="border-block-end: 1px solid;text-align: center;align-items: center;font-weight: bolder;font-size: xx-large;line-height: 3rem;">Time Remaining</div>
                 <div id="countdown" style="margin: 23% 0% 0% 14%;"></div>
              </div>
              <div class='flex-scroll-container' style='display: flex;flex-direction: column;height: 16rem;width:50%'>
            <div style="border-block-end: 1px solid;text-align: center;align-items: center;font-weight: bolder;font-size: xx-large;line-height: 3rem;">Lab Reports</div>
            <div><?php 
            for ($i=0; $i < 2; $i++) { 
                
            echo "
                <div class='flex-scroll-item' style= 'line-height: 2;'>
                <div  style='border-radius: 7px;flex-basis: 69%;height: 4rem;width: 23.5rem;'>
                <img src='".URLROOT."/public/resources/doctor1.png' ". "style=' padding: 0.5rem 0rem 0rem 0.5rem; width: 14%;' >
                <div style='text-align: center;font-size: x-large;font-weight: bolder;margin: -14% 0% 0% -35%;'>".$data[$i]['Doctor_name']."</div>
                
                

            </div></div>
            ";
            }
              ?></div>
              </div >
            </div >
            
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
    
                                cell.addEventListener("click", function () {
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
<?php require_once(APPROOT."/views/Admin/footer_view.php");?>