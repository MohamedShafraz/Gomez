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
                <a href="receptionist_appointment.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect4">Appointments<br></div></a>
                <a href="rec_payment.php" style="text-decoration: none;">
                    <div class="sidebarunselected" id="unselect10">Payment<br></div></a>
                <a href="rec_reminder.php" style="text-decoration: none;"> 
                    <div class="sidebarunselected" id="unselect3">Reminder<br></div></a>
                <a href="receptionist_detail.php" style="text-decoration: none;">
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
        

            <a href="../common/home.html" id="set1" class="unselected">Home</a>
            <a href="../common/contactus.html" id="set1" class="unselected">Contact Us</a>
            <a href="rec_dashboard.html" id="set1" class="unselected">Dashboard</a>
            <a href="../common/logout.php"><div class="selected"><font class="GMfont">Log out</font></div>   
            </a></nav>
        </header><br><br><br>
        <form action="" method="post">
        <section style="margin-left: 22%;">
            <h1>Hello Samar</h1>
            <br>
            <div class="d" style="margin-left: 15%;">
                <a class="m" >
                    Phone Number
                    <img src="../resources/pen.png" alt="" style="width: 15px; height: 17px;" id="editPhoneNumber">
                    <br><span id="phoneNumber">0766414945</span>
                </a>
                <a class="m">
                    Email
                    <img src="../resources/pen.png" alt="" style="width: 15px; height: 17px;" id="editEmail">
                    <br><span id="email">samar@gmail.com</span>
                </a>
                <a class="m">
                    NIC
                    <img src="../resources/pen.png" alt="" style="width: 15px; height: 17px;" id="editNIC">
                    <br><span id="nic">200124900067</span>
                </a>
                <a class="m">
                    Address
                    <img src="../resources/pen.png" alt="" style="width: 15px; height: 17px;" id="editAddress">
                    <br><span id="address">1/A Queens road, Wellawatha</span>
                </a>
                <a class="m">
                    Profile photo
                    <img src="../resources/pen.png" alt="" style="width: 15px; height: 17px;">
                    <br><input type="file" id="myFile" name="filename">
                </a>
            </div>
            <button class="button" style="margin-left: 80%;" type="submit" value="Submit">Save changes</button>
            <!-- <button type="reset" value="Reset">Cancel changes</button> -->
            <input class="button" type="button" value="Reset">
        </section>
    </form>

    <script>
        const editPhoneNumber = document.getElementById('editPhoneNumber');
        const editEmail = document.getElementById('editEmail');
        const editNIC = document.getElementById('editNIC');
        const editAddress = document.getElementById('editAddress');

        editPhoneNumber.addEventListener('click', () => {
            const phoneNumberSpan = document.getElementById('phoneNumber');
            phoneNumberSpan.contentEditable = true;
            phoneNumberSpan.focus();
        });

        editEmail.addEventListener('click', () => {
            const emailSpan = document.getElementById('email');
            emailSpan.contentEditable = true;
            emailSpan.focus();
        });

        editNIC.addEventListener('click', () => {
            const nicSpan = document.getElementById('nic');
            nicSpan.contentEditable = true;
            nicSpan.focus();
        });

        editAddress.addEventListener('click', () => {
            const addressSpan = document.getElementById('address');
            addressSpan.contentEditable = true;
            addressSpan.focus();
        });
    </script>

</body>
</html>