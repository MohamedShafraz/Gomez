<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Reset password</title>
    <link rel="stylesheet" href="../GMZ.css">
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
    <form action="Signin" method="get">
        <div class="columns">
        <img src="../resources/signup.png" alt="signup_image" class="signup_image">
        </div>
        <div class="columns" style="margin-top: 5%;">
        <div class="lay">
        
        <table>
        <tr><td ><br> 
        <h1>Reset Password</h1>
        <label for="Username">New Password</label><br><br>
        <input type="password" name="password" id="password" placeholder="********" class="login_space">
        <br><br>
        <label for="password">Re-enter NewPassword</label><br><br>
        <input type="password" name="password" id="password" placeholder="********" class="login_space">
        <br><br>
        <input type="submit" value="submit" class="selected1"><br><br>
                
        <a href="login.php  " class="hyperLink">Back to login</a>
        
        </td></tr>
    </table>
    </div>
    </div>
    </form>
</body>
</html>