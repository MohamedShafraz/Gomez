<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="GMZ.css">
</head>
<body >
    <header class="header">
        <nav class="navbar">
        <div class="navbar-image">
            <img src="../photos/gomezlogo1.jpg" alt="Logo">
        </div>
            <a href="Home.html"  id="set1" onmouseenter="select()" onmouseleave="unselect()">Home</a>
            <a href="contactus.html"  id="set" >Contact Us</a>
            <script>
                function select() {
                    document.getElementById("set1").innerHTML = "<font class='GMfont'>"+document.getElementById("set1").innerText+"</font>" ;
                    document.getElementById("set1").className = "selected" ;
                }
                function unselect(){
                    document.getElementById("set1").innerHTML = "Home";
                    document.getElementById("set1").className = "";
                }
                document.getElementById("set").onmouseenter=function select1() {
                    document.getElementById("set").innerHTML = "<font class='GMfont'>"+document.getElementById("set").innerText+"</font>" ;
                    document.getElementById("set").className = "selected" ;
                }
                document.getElementById("set").onmouseleave=function unselect1(){
                    document.getElementById("set").innerHTML = "Contact Us";
                    document.getElementById("set").className = "";
                }

            </script>
            <a href="signup.php"><div class="selected">
                <font class="GMfont">signup</font></div>
            </a>
            <a href="login.php"><div class="selected">
                <font class="GMfont">Login</font></div>
            </a>
                
        </nav>
    </header>
    <h1>Hello Samar</h1>
    <br>
    <div class="d">
        <a class="m">
            Full Name<br>Paran Samar
        </a>
        <a class="m">
            Gender<br>Male
        </a>
        <a class="m">
            Phone Number<br>0766414945
        </a>
        <a class="m">
            Email<br>samar@gamil.com
        </a>
        <a class="m">
            Age<br>23
        </a>
        <a class="m">
            Blood Group<br>o+
        </a>
        <a class="m">
            NIC<br>200124900067
        </a>
        <a class="m">
            Address<br>1/A Queens road,wellawatha
        </a>
    </div>
    <div class="selected3">
        <a href="edit.php" class="selected3">
            <font class="GMfont">Edit Profile</font>
        </a><br>
        <a href="deactivate.php" class="selected3">
            <font class="GMfont">Deactivate Profile</font>
        </a>
        </div>      
</body>
</html>




















