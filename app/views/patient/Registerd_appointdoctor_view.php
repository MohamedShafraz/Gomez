<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<style>
  .flex-container {
    display: flex;
    flex-wrap: wrap;

    /* justify-content: space-between; Adjust as needed */
  }

  .flex-item {
    width: calc(50% - 10px);
    /* Adjust width and margin as needed */

    box-sizing: border-box;
    border: 1px solid #ccc;
    /* Optional: Add borders for clarity */
    grid-column-gap: 3rem;
    /* flex-direction: column; */
    display: flex;
    flex-direction: row;
  }

  img {
    max-width: 100%;
    height: auto;
  }
</style>

<!-- background-color:#E9F3FD -->

<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
  <?php include APPROOT . '/views/patient/navbar_view.php' ?>

  <div class="popup" style="margin-top:9%;margin-right:29%;margin-left:29%;display:none">
    Are you sure you want to deactivate your account<br>
    <br>
    <div class="buttonspace" style="justify-content:center"><button class="button" style="background-color:red;padding-left: 5%;
  padding-right: 5%;
  padding-top: 2%;
  padding-bottom: 4%;" id="yes">yes</button><br><button id="no" class="button" style="background-color:green;padding-right: 5%;padding-left: 5%;
  padding-top: 2%;
  padding-bottom: 4%;">no</button></div>
  </div>
  <article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->

    <ul style="height: 26rem;background-color: white;padding: 5%;width: 62rem;">

      <!-- Your JavaScript Code -->
      <div style="margin: -3rem 0rem 0rem -4.7rem;height: fit-content;align-self: center;width: 72.7rem;">
        <div class="flex-container" style="margin-top: 3rem; border-left:solid 5px">
          <!-- Your flex items go here -->
          <div class="flex-item" style="padding: 0.5rem;">
            <div style="width: 73%;display: flex;flex-direction: row;">
              <div><img src="<?= URLROOT . "/public/resources/doctor1.png" ?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;"></div>
              <div style="margin:-1rem 0rem 0rem 0rem;;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;">
                <ul style="list-style-type: none;padding:0;">
                  <li>Dr.Shamath</li>
                  <li style="font-size: medium;">Heart specialist</li>
                </ul>
              </div>
            </div>
            <div style="width: 27%;">
              <div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
                <a href="<?= URLROOT . "/" . $_SESSION['userType'] . "/appointments/make/ShowDoc/bookappo" ?>" style="text-decoration: none;">
                  <font class="font1">Chanel</font>
                </a>
              </div>
            </div>
          </div>
          <div class="flex-item" style="padding: 0.5rem;">
            <div style="width: 73%;display: flex;flex-direction: row;">
              <div><img src="<?= URLROOT . "/public/resources/doctor1.png" ?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;"></div>
              <div style="margin: -1rem 0rem 0rem 0rem;;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;">
                <ul style="list-style-type: none;padding:0;">
                  <li>Dr.sajini</li>
                  <li style="font-size: medium;">Child specialist</li>
                </ul>
              </div>
            </div>
            <div style="width: 27%;">
              <div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
                <a href="<?= URLROOT . "/" . $_SESSION['userType'] . "/appointments/make/ShowDoc/bookappo" ?>" style="text-decoration: none;">
                  <font class="font1">Chanel</font>
                </a>
              </div>
            </div>
          </div>
          <div class="flex-item" style="padding: 0.5rem;">
            <div style="width: 73%;display: flex;flex-direction: row;">
              <div><img src="<?= URLROOT . "/public/resources/doctor1.png" ?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;"></div>
              <div style="margin: -1rem 0rem 0rem 0rem;;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;">
                <ul style="list-style-type: none;padding:0;">
                  <li>Dr.Shaf</li>
                  <li style="font-size: medium;">ENT specialist</li>
                </ul>
              </div>
            </div>
            <div style="width: 27%;">
              <div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
                <a href="<?= URLROOT . "/" . $_SESSION['userType'] . "/appointments/make/ShowDoc/bookappo" ?>" style="text-decoration: none;">
                  <font class="font1">Chanel</font>
                </a>
              </div>
            </div>
          </div>

          <div class="flex-item" style="padding: 0.5rem;">
            <div style="width: 73%;display: flex;flex-direction: row;">
              <div><img src="<?= URLROOT . "/public/resources/doctor1.png" ?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;"></div>
              <div style="margin: -1rem 0rem 0rem 0rem;;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;">
                <ul style="list-style-type: none;padding:0;">
                  <li>Dr.Shamath</li>
                  <li style="font-size: medium;">Heart specialist</li>
                </ul>
              </div>
            </div>
            <div style="width: 27%;">
              <div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
                <a href="<?= URLROOT . "/" . $_SESSION['userType'] . "/appointments/make/ShowDoc/bookappo" ?>" style="text-decoration: none;">
                  <font class="font1">Chanel</font>
                </a>
              </div>
            </div>
          </div>
          <div class="flex-item" style="padding: 0.5rem;">
            <div style="width: 73%;display: flex;flex-direction: row;">
              <div><img src="<?= URLROOT . "/public/resources/doctor1.png" ?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;"></div>
              <div style="margin: -1rem 0rem 0rem 0rem;;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;">
                <ul style="list-style-type: none;padding:0;">
                  <li>Dr.sajini</li>
                  <li style="font-size: medium;">Child specialist</li>
                </ul>
              </div>
            </div>
            <div style="width: 27%;">
              <div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
                <a href="<?= URLROOT . "/" . $_SESSION['userType'] . "/appointments/make/ShowDoc/bookappo" ?>" style="text-decoration: none;">
                  <font class="font1">Chanel</font>
                </a>
              </div>
            </div>
          </div>
          <div class="flex-item" style="padding: 0.5rem;">
            <div style="width: 73%;display: flex;flex-direction: row;">
              <div><img src="<?= URLROOT . "/public/resources/doctor1.png" ?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;"></div>
              <div style="margin: -1rem 0rem 0rem 0rem;;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;">
                <ul style="list-style-type: none;padding:0;">
                  <li>Dr.Shaf</li>
                  <li style="font-size: medium;">ENT specialist</li>
                </ul>
              </div>
            </div>
            <div style="width: 27%;">
              <div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
                <a href="<?= URLROOT . "/" . $_SESSION['userType'] . "/appointments/make/ShowDoc/bookappo" ?>" style="text-decoration: none;">
                  <font class="font1">Chanel</font>
                </a>
              </div>
            </div>
          </div>
          <!-- Add more items as needed -->
        </div>
      </div>

    </ul>
    </div>
  </article>
</body>
<script src="<?= URLROOT ?>./javascript/dashboard.js"></script>
<script>
  function select2() {
    if (document.getElementsByClassName("navbar")[0].style.display == "none") {
      document.getElementsByClassName("navbar")[0].style.display = "flex";
    } else {
      document.getElementsByClassName("navbar")[0].style.display = "none";
    }
  }
  document.getElementById("deactivate").onclick = function() {
    document.getElementsByClassName("popup")[0].style.display = "block";
    document.getElementsByClassName("dashboard")[0].style.filter = "blur(3px)";
  };
  document.getElementById("no").onclick = function() {
    document.getElementsByClassName("popup")[0].style.display = "none";
    document.getElementsByClassName("dashboard")[0].style.filter = "";
  }
  document.getElementById("yes").onclick = function() {
    document.getElementsByClassName("popup")[0].style.display = "none";
    document.getElementsByClassName("dashboard")[0].style.filter = "";
  }
</script>