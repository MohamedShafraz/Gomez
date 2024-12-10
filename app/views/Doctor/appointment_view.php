<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">

  <?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>

  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
  <link rel="stylesheet" href="<?= URLROOT ?>/css/patient/appointments.css">
  <link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">

  <style>
    #grad1 {
      height: 200px;
      background-color: red;
      /* For browsers that do not support gradients */
      background-image: linear-gradient(to right, red, yellow);
    }

    .buttonspace {
      display: flex;
      justify-content: end;
      font-size: 30px;
      grid-template-columns: repeat(auto-fit, minmax(1rem, 0.3fr));
      gap: 1rem;
    }

    button {
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
      font-size: initial;
      height: max-content;
      width: max-content;
      background-color: blue;
    }
  </style>
  <div id="overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999; display: none;"></div>

  <div id="alertBox" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 5px; z-index: 1000; display: none;">
    <div id="alertMessage"></div> <!-- Alert message will be displayed here -->
    <button onclick="closeAlert()" style="display: block; margin: 0 auto;">Close</button> <!-- Close button -->
  </div>


  <?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    echo "<script>
            // Show the overlay and alert box
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('alertBox').style.display = 'block';
            // Set the alert message
            document.getElementById('alertMessage').innerHTML = '<p>$message</p>';
          </script>";
  }
  unset($_SESSION['message']);
  ?>

  </aside>
  <article class="dashboard">
    <ul style="height: 26rem;padding: 5%;width: 60rem ; margin-top:2%">

      <div style="display:flex ;width: 70rem;margin-top: -4.7rem;height: 25rem;flex-direction: column;    margin-left: -4.8rem;gap:0.5rem">
        <div><br></div>

        <div class="complainttext" style="margin: 0% 0% 0% 1%;
    width: 96%;
    color: white;">Today Sessions</div>



        <div><br></div>

        <?php

        if (empty($sessions)) {
          echo "<div style='display: flex; flex-direction:row;'><div style='margin-left: 10rem;'><h1>No Sessions Available</h1></div></div>";
        } else {
          foreach ($sessions as $session) {
            echo "<div class='custom-div' style='align-self: center;
            width: 98%;
            background-color: #fff;
            height: fit-content;
            display: flex
        ;
            flex-direction: row;'>";
            echo "<div style='display: flex; flex-direction:row;width:100%'>";
            echo "<div style=' width:max-content;display:flex'>";
            echo "<ul style='flex-direction: column;
            display: flex
        ;    flex-direction: row;
        column-gap: 8em;
            list-style-type: none;
            text-align: left;
            margin: 1rem 0rem 0rem 0rem;'><div style='width: max-content;
            flex-direction: column;
            display: flex
        ;'>
                            
                            <li style='width: max-content;
            font-weight: bold;
            font-size: large;'>Date: </li>
                            <li> " . $session['date'] . "</li>
                            </div>";
            echo "
                            
                            <div style='width: max-content;display: flex;flex-direction: column;'>
                                <li style='width: max-content;
            font-weight: bold;
            font-size: large;'>Start Time: </li> <li style='font-size: medium;'>" . $session['start_time'] . "</li>
                            </div>
                            <div style='width: max-content;display: flex;flex-direction: column;'>
                                <li style='width: max-content;
            font-weight: bold;
            font-size: large;'>End Time: </li> <li style='width: max-content;display: flex;flex-direction: column;'> " . $session['end_time'] . "</li>
                            </div></ul>";
            echo "</div>";
            echo "<div style='width: 30rem;'>";
            echo "<ul style='list-style-type: none; text-align: left;'><div style='flex-direction: row; display: flex; margin-left:14rem'><div style='margin-top: -1.75rem;'><li><div style='width: 27%;'><div class='logbutton' style='height: fit-content; padding: 0.5rem; margin: 2rem 0rem 0rem 0rem; '><a onclick='viewtimeslot(" . $session['session_id'] . ")' style='text-decoration: none;'><font class='font1'>View Appointments</font></a></div></div></li></div><div style='margin-left: 1rem; margin-top: 0.75rem; width: 10rem;'><li style='font-weight: bold; font-size: x-large; width: 10rem;'></li></div></div></ul>";
            echo "</div></div></div>";
            echo "<br>";
          }
        }
        ?>


      </div>

    </ul>
    </div>
    </div>
  </article>
  <script>
    function viewtimeslot(sessionid) {
      window.location.href = '<?= URLROOT ?>/Doctor/ShowPatientsAllocatedTimeSlot/' + sessionid;
    }

    // Function to close the alert box
    function closeAlert() {
      // Hide the overlay and alert box
      document.getElementById('overlay').style.display = 'none';
      document.getElementById('alertBox').style.display = 'none';
    }
  </script>
</body>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>