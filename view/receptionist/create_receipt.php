<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <link rel="stylesheet" href="../GMZ.css">
    <!-- <script defer src="dashboardjs.js"></script> -->
<style id="__web-inspector-hide-shortcut-style__">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important;
}
</style></head>
<body style="background-image: var(--Gomez-Login-Box-Purple);">
    
    <aside class="sidenav">
        
        <div class="sidenavbarspace">
        
        <center>
                <img src="../resources/icon.png" alt="logo" class="logo1">
                <a href="receptionist_appointment.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect4">Appointments<br></div></a>
                <a href="rec_payment.php" style="text-decoration: none;">
                    <div class="sidebarselected" id="unselect10">Payment<br></div></a>
                <a href="rec_reminder.php" style="text-decoration: none;"> 
                    <div class="sidebarunselected" id="unselect3">Reminder<br></div></a>
                <a href="receptionist_detail.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect10">User Info<br></div></a>
                </center>
        </div>
        
    </aside>





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/GMZ.css">
    <!-- <script defer src="./View/loginjs.js"></script> -->
    <!-- <script defer src="./View/dashboardjs.js"></script> -->
    <title>Document</title>



    <header class="header">
    <img src="../resources/gomezlogo1.jpg" class="logo">
    <div class="navUnchange">
        <label class="menu">
<input type="checkbox" id="check" onclick="select2()"></label>
            
</div>
<script>
    function select2()
{if(document.getElementsByClassName("navbar")[0].style.display=="none"){
    document.getElementsByClassName("navbar")[0].style.display="flex";
}
else{
    document.getElementsByClassName("navbar")[0].style.display="none";
}
}
    
</script>
        <nav class="navbar" id="id">
        

            <a href="home.html" id="set1" class="unselected">Home</a>
            <a href="contactus.html" id="set1" class="unselected">Contact Us</a>
            <a href="dashboard.html" id="set1" class="unselected">Dashboard</a>
            <a href="logout.php"><div class="selected"><font class="GMfont">Log out</font></div> </a>      
        </nav>
    
    </header><br><br><br>
    <section id = "section" style="margin-left: 22%">
    <h1>Hello Samar</h1>
    <br>
    <center><div class="titlebox"> Payments</div></center>
    <form style="margin-left: 40%;">
    <b>
        <label for="name">Name : </label>
        <input type="text"><br><br>
        <label for="patient_id">Patient ID : </label>
        <input type="text"><br><br>
        <label for="number">Contact Number : </label>
        <input type="text"><br><br>
        <label for="appointment_number">Appointment Number : </label>
        <input type="text"><br><br>
        <label for="doctor_name">Doctor Name : </label>
        <input type="text"><br><br>
        <label for="lab_apontment_number">Lab Appointment No : </label>
        <input type="text"><br><br>
        <label for="test">Test : </label>
        <input type="text"><br><br>
        <label for="total_amount">Total amount : </label>
        <input type="text"><br><br>
        
    </b>
        
    </form><br>
    <button class="button">Send receipt</button>
    </section>
</body>
</html>