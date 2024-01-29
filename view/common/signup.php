<?php
if(isset($_POST["submit"])){
    include("../../db_connect.php");
    $patient_name=$_POST["patient_name"];
    $gender=$_POST[""];
    $ageCategory=$_POST[""];
    $guardianName=$_POST[""];
    $guardianPhone=$_POST[""];
    $guardianaddress=$_POST[""];
    $guardiannic=$_POST[""];
    $nic=$_POST[""];
    $phone=$_POST[""];
    $email=$_POST[""];
    $address=$_POST[""];
    $photo=$_POST[""];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../GMZ.css">
    <!-- <script defer src="dashboardjs.js"></script> -->
<style id="__web-inspector-hide-shortcut-style__">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important;
}
</style>
</head>
<body class="body1">
    <header class="header">
        <nav class="navbar">
        <img src="../resources/gomezlogo1.jpg" class="logo">
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

                function toggleGuardianFields() {
            var ageCategory = document.getElementById("ageCategory").value;
            var guardianFields = document.getElementById("guardianFields");
            var patientFields = document.getElementById("patientFields");

            // If the selected age category is "Under 18", show guardian fields; otherwise, hide them.
            if (ageCategory === "Under18") {
            guardianFields.style.display = "block";
            patientFields.style.display = "none"; // Hide patient fields
            } else {
             guardianFields.style.display = "none"; // Hide guardian fields
             patientFields.style.display = "block"; // Show patient fields
            }
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
    <br><br>
    <form method="post">
        <div class="columns">
        <img src="../resources/signup.png" alt="signup_image" class="signup_image">
        </div>
        <div class="columns">
        <div class="lay">
        
        <table>
        <tr><td ><br> 
        <h1><center>Sign Up</center></h1>   
        <label for="Patient_namel Name:" >Full Name :</label><br>
        <input type="text" name="patient_name" id="Patient_name"  placeholder="Eg:Sam Andrus" required >
        <br><br>
        <label for="Gender">Gender :</label><br>
         <select name="gender" id="Gender"  required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Custom">Custom</option>
        </select>
        <br><br>
        <label for="ageCategory">Age Category:</label><br>
        <select id="ageCategory" name="ageCategory" onchange="toggleGuardianFields()"  required>
            <option value="">Select Age Category</option>
            <option value="Under18">Under 18</option>
            <option value="18AndAbove">18 and Above</option>
        </select><br><br>

        <div id="guardianFields" style="display: none;">
            <label for="guardianName">Guardian's Name:</label><br>
            <input type="text" id="guardianName" name="guardianName"  placeholder="Eg:Sam Andrus" required><br><br>

            <label for="guardianPhone">Guardian's Phone:</label><br>
            <input type="text" id="guardianPhone" name="guardianPhone"  placeholder="Eg:0766414825" required><br><br>

            <label for="guardianAddress">Guardian's Address:</label><br>
            <input type="text" id="guardianAddress" name="guardianaddress"  placeholder="Eg:17/71 king road,colombo" required><br><br>
            <label for="guardianNIC">Guardian NIC Number</label><br>
            <input type="text" name="guardiannic"  placeholder="Eg:200126800079 " id="guardianNIC" required><br><br>
        </div> 
        
        <div id="patientFields" style="display: none;">
            <label for="nic">NIC Number</label><br>
            <input type="text" name="nic"  placeholder="Eg:200126800079 " id="nic" required>
            <br><br>
        </div>

        <label for="phone">Phone Number</label><br>
        <input type="text" name="phone" id="phone" placeholder="Eg:0766414825" required>
        <br><br>
        <label for="email">Email</label><br>
        <input type="text" name="email"  placeholder="Eg:email@gmail.com" id="email" required>
        <br><br>
        <label for="address">Address</label><br>
        <input type="text" name="address"class="rounded-box" placeholder="Eg:17/71 king road,colombo" id="address" required>
        <br><br>
        <label for="photo">Upload your photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*"><br>
        <p>By signing up, you agree to our <a href="privacy.html" target="_blank">Privacy Policy</a>.</p>

        <input type="submit" name="submit" value="Create User">
        </td></tr>
    </table>
    </div>
    </div>
    </form>
</body>
</html>

