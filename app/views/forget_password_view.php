<?php
include_once(APPROOT . '/views/header_view.php');
$message = "";
?>
<br>

<body style="overflow-x: hidden;background-image:var(--Gomez-Login-Box-Purple);"'>
    
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
    <form action="" method="post">
        <div class="container" style="
  margin-top: 2%;width:64%;padding: 0%;
  height: 100%;
  margin-left: 2%;">
        <div class="column" style="margin-left: 25%;
  width: max-content;
padding: 0%;
margin: 0% 0% 0% 8%;
height: initial;">
                <!-- sdnfjfnj -->
                <img src="<?= URLROOT . "/resources/forget.jpeg" ?>" alt="image" srcset="" width="50%" style="margin-left: 34%;
  width: 66%;height:100%;
padding: 0% 0% 0% 0%;
box-shadow: 0 4px 12px rgba(0,0,0,0.15);
border-radius: 8px 0px 0px 8px;"></div>
                <div class="column">
            <div class="lay" style="gap:15px;border-radius:0%;padding: 7% 28% 40% 29%;width: 100%;font-family: inter;border-radius: 0px 8px 8px 0px;">
                <h1 width="120%" style="margin-right: -16%;">Forget Password</h1>
                <?php
                //             if(isset($_POST["submit"]) && $_POST["submit"] == "Log in") {
                //             echo $usertype;
                //             //echo $_SESSION["userType"];
                if (isset($_POST['submit'])) {
                    echo "<div style='color:red'>Incorrect Email or Password</div>";
                }
                //             }
                ?>
                <label for="username" >Username</label>
                <input type="username" name="username" id="username" placeholder="eg: Shaf123" class="login" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="**********" class="login" required>
                
                <a href="login" class="hyperLink">login</a>
                <input name="submit" type="submit" value="reset password" class="logbutton" id="submit" style=' font-family: inter;'>
    </div>
    </div>
    </div>
    </form>
</body>

</html>