<?php require_once(APPROOT."/views/receptionist/navbar_view.php");?>
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
            <div style="margin-left: -2.5rem;margin: 3rem 0rem 0rem orem;flex-basis: 42%;margin-top: 3rem;">
            <div  style="background: var(--Gomez-Option-Box);margin: 3% 0% 0% -33%;box-shadow: 1px 1px 7px;border-radius: 44px;flex-basis: 69%;height: 9rem;">
                <div style="    margin: 1rem 0rem 0rem 4rem;position: fixed;height: 6rem;width: 6rem;"><img src="<?=URLROOT."/public/resources/appointment-book.png"?>" style="    margin: 0rem 0rem 0rem 0rem;width: 100%;" alt=""></div>
                <button style="font-weight: bold;color: #11235A;background-color: #f7f9f9;;padding: 1% 2% 1% 2%;border-radius: 15px;font-size: xx-large;width: max-content;margin: 8% 0% 0% 36%;"> Make Appointment</button>

            </div>
            <div  style="background: var(--Gomez-Option-Box);margin: 3% 0% 0% -33%;box-shadow: 1px 1px 7px;border-radius: 44px;flex-basis: 69%;height: 9rem;">
                <div style="    margin: 1rem 0rem 0rem 4rem;position: fixed;height: 6rem;width: 6rem;"><img src="<?=URLROOT."/public/resources/medical-report.png"?>" style="    margin: 0rem 0rem 0rem 0rem;width: 100%;" alt=""></div>
                <button style="font-weight: bold;color: #11235A;background-color: #f7f9f9;;padding: 1% 2% 1% 2%;border-radius: 15px;font-size: xx-large;width: max-content;margin: 8% 0% 0% 36%;"> Get Labreport</button>

            </div>
            </div>
            <div style="padding: 0rem 0rem 0rem 2rem;flex-basis: 53%;"><div>
                <div style="line-height: 46px;text-align: center;">
                <button onclick="prevMonth()">&#9665;</button>
                <span id="month-year"></span>
                <button onclick="nextMonth()">&#9655;</button>
                </div>
                <table class="caltable" style="height: 19rem;width: 94%;margin-top: 3%;    padding: 3%;">
                    <thead>
                        <tr>
                            
                        </tr>
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
            <article id="events-container" style=""></article></div>
        </div>
        <div style="display: flex;   margin-left: -11rem;">
        <div class="scrollable-container">
        <ul class="horizontal-scroll" style="    width: 84rem;height: 12rem;margin: 3rem 0rem 0rem 0rem;line-height: normal;">
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/ReceptionistCount.png" ?>></div>
                <div><br> Total Appointments<br><a style="font-size:8vh">20</a><br>
            </li>
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/PatientCount2.png" ?>></div>
                <div><br>Total Patients<br><a style="font-size:8vh">5</a></div><br><br>
            </li>
            <li class="option">
                <div><img src=<?php echo URLROOT . "/resources/DoctorCount.png" ?>></div>
                <div><br>Active Doctors<br><a style="font-size:8vh">2</a></div><br><br>
            </li>
             
        </ul>
        
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
    
            </script>
<?php require_once(APPROOT."/views/Admin/footer_view.php");?>