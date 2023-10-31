<?php
include("Model/user_db.php");	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="View/GMZ.css">
    <script defer src="login.js"></script>
</head>

<body class="body1">
    
<!-- <header class="header">
        <nav class="navbar">
            <div>
            <img src="View/logo.jpg" class="logo">
</div>
            <a href="Index.php" id="set1">Home</a>
            <a href="#Contact" id="set">Contact Us</a>
            <a href="./Login">
                <div class="selected">
                    <font class="GMfont">Login</font>
                </div>
            </a>
            </div>
        </nav>
</header> -->
    <br><br><br><br>
    <form action="/Gomez/Login" method="post">
        <div class="container">
        <div class="row">
            <div class="column">
            <img src="View/signup.png" alt="signup_image" class="signup_image">
            </div>
            <div class="column">
            <div class="lay">
                <h1>Sign in</h1>
                <?php
                echo $usertype;
                //echo $_SESSION["userType"];
    echo $message;
    ?>
                <label for="username" class>Username</label>
                <input type="username" name="username" id="username" placeholder="eg: Shaf123" class="login" required>
                <div class="email" id="email">Invalid Username</div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="**********" class="login" required>
                <div class="email" id="pwd">Invalid password</div>
                <a href="forgetpassword" class="hyperLink">Forget password</a>
                <input name="submit" type="submit" value="Log in" class="logbutton" id="submit">
            </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>