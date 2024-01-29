<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My dashbboard</title>
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
                    <div class="sidebarunselected" id="unselect5"> Treatment<br></div></a>
                <a href="report.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect6">Report<br></div></a>
                <a href="payment.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect10">Payment<br></div></a>
                <a href="reminder.php" style="text-decoration: none;"> 
                    <div class="sidebarunselected" id="unselect3">Reminder<br></div></a>
                <a href="patient_detail.php" style="text-decoration: none;">
                    <div class="sidebarselected" id="unselect10">User Info<br></div></a>
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
            <a href="logout.php"><div class="selected"><font class="GMfont">Log out</font></div>   
            </a></nav>
        </header><br><br><br>
        
    <section id = "section" style="margin-left: 22%">
    <h1 style="color:var(--Gomez-Light-Blue)">Hello Samar</h1>
    <br>
    
    <div class="d" style="margin-left: 15%;">
        <a class="m">
            Full Name<br><b>Paran Samar</b>
        </a>
        <a class="m">
            Gender<br><b>Male</b>
        </a>
        <a class="m">
            Phone Number<br><b>0766414945</b>
        </a>
        <a class="m">
            Email<br><b>samar@gamil.com</b>
        </a>
        <a class="m">
            Age<br><b>23</b>
        </a>
        <a class="m">
            Blood Group<br><b>o+</b>
        </a>
        <a class="m">
            NIC<br><b>200124900067</b>
        </a>
        <a class="m">
            Address<br><b>1/A Queens road,wellawatha</b>
        </a>
        
    </div>
    
    <!-- <div class="selected3" id="id">
    <a href="edit_profile.php"><div class="selected"><font class="GMfont"> Edit Profile</font></div> <br>
    <a href="deactivate_profile.php"><div class="selected"><font class="GMfont">Deactivate Profile</font></div>  
        </div>    -->
        <a href="edit_profile.php"><button class="button" style="margin-left: 80%;">Edit Profile</button></a>
        <button id=""  class="button">Deactivate Account</button>

    
        
    

    <script src="script.js"></script>
    
</section>

</a></body></html>