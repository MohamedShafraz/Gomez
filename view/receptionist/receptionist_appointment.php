<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Appointments</title>
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
                    <div class="sidebarselected" id="unselect4">Appointments<br></div></a>
                <a href="rec_payment.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect10">Payments<br></div></a>
                <a href="rec_reminder.php" style="text-decoration: none;"> 
                    <div class="sidebarunselected" id="unselect3">Reminders<br></div></a>
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
        

            <a href="../common/home.html" id="set1" class="unselected">Home</a>
            <a href="../common/contactus.html" id="set1" class="unselected">Contact Us</a>
            <a href="rec_dashboard.html" id="set1" class="unselected">Dashboard</a>
            <a href="../common/logout.php"><div class="selected"><font class="GMfont">Log out</font></div> </a>      
        </nav>
    
    </header><br><br><br>
    <section id = "section" style="margin-left: 22%">
    <h1>Hello Samar</h1>
    <br>
    <center><div class="titlebox"> Appoitments</div></center>
    <div class="d" style="margin-left: 10%;">
        <a class="search">
           <b> Doctor: </b>
            <input type="text" placeholder="Search.." name="search" class="searchbox">
        </a>
        <a class="search">
           <b> Date: </b>
            <input type="text" placeholder="Search.." name="search" class="searchbox">
        </a>
        <br>
        <table >
        <thead >
            <tr>
                <th >Reference Number</th>
                <th >Appointment ID</th>
                <th >Date</th>
                <th>Time</th>
                <th>Payment</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001245</td>
                <td>01</td>
                <td>18/09/2024</td>
                <td>08.00 AM</td>
                <td>Paid</td>
                <td><a href="../patient/view_appointment_details.php"><button class="" style="width:110%;border-radius: 6px;">more</button></a></td>
            </tr>
            <tr>
                <td>001246</td>
                <td>02</td>
                <td>30/09/2024</td>
                <td>07.00 PM</td>
                <td>Pending</td>
                <td><a href="view_appointment_details.php"><button class="" style="width:110%;border-radius: 6px; ">more</button></a></td>

            </tr>
        </tbody>
        </table>
    </div><br>
        <a href="rec_make_appointment.php"><button class="button" style="margin-left: 55%;">Make appointment</button></a>
        <a href="rec_edit_appointment.php"><button class="button" >Edit appointment</button></a>

    </section>
</body>
</html>