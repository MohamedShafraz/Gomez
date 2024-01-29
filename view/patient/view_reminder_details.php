<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View reminder details</title>
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
                <a href="appointment.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect4">Appointments<br></div></a>
                <a href="treatment.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect5"> Treatments<br></div></a>
                <a href="report.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect6">Reports<br></div></a>
                <a href="payment.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect10">Payments<br></div></a>
                <a href="reminder.php" style="text-decoration: none;"> 
                    <div class="sidebarselected" id="unselect3">Reminders<br></div></a>
                <a href="patient_detail.php" style="text-decoration: none;">
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
    <center><div class="titlebox"> Reminder Details</div></center>
    <br><br>
    <form style="align-content:center;">
    <b>
        <label for="reference_no">Reference No:</label>
        001245<br><br>
        <label for="treatment_id">Treatment ID : </label>01<br><br>
        <label for="patient_id">Patient ID : </label>01<br><br>
        <label for="doctor_name">Doctor name : </label>Shamath<br><br>
        <label for="type">Type : </label>kidney<br><br>
        <label for="date">Date : </label>18/09/2024<br><br>
        <label for="name">Name : </label>Samar<br><br>
        <label for="age">Age : </label>22<br><br>
        <label for="nic_no">NIC No : </label>200124900067<br><br>
        <label for="days">Days left : </label>30<br><br>
        
    </b>
        
    </form>

    </section>
</body>
</html>