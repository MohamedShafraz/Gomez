<?php
$message = "";
if(isset($_POST["submit"])&&$_POST["submit"]=="Log in") {	
	include("../Model/db_connect.php");	
   $user = $_POST["username"];
   $Password = ($_POST["password"]);
   $statement = mysqli_prepare($dbcon, "SELECT `Username` FROM user_db WHERE `Username`=? AND `Password`=?");
mysqli_stmt_bind_param($statement, "ss", $user, $Password);

// Execute statement
mysqli_stmt_execute($statement);

// Get result
$result = mysqli_stmt_get_result($statement);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION["uname"] = $row["username"]; 
    header("Location: Dashboard.php");
    exit;
  } else {
    // Check if username is invalid or password is incorrect
    $query = "SELECT `Username` FROM user_db WHERE `Username` = '$user'";
    $result = mysqli_query($dbcon, $query);
    if (mysqli_num_rows($result) == 0) {
      $message = "<font color=red size=2><b>Incorrect username.<br>Please try again.</b></font>";
    } else {
      $message = "<font color=red size=2><b>Incorrect password.<br>Please try again.</b></font>";
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../GMZ.css">
    <script defer src="login.js"></script>
</head>

<body class="body1">
    
<header class="header">
        <nav class="navbar">
            <div>
            <img src="../resources/gomezlogo1.jpg" class="logo">
</div>
            <a href="Home.html" id="set1">Home</a>
            <a href="#Contact" id="set">Contact Us</a>
            <a href="login.php">
                <div class="selected">
                    <font class="GMfont">Login</font>
                </div>
            </a>
            <a href="signup.php">
                <div class="selected">
                    <font class="GMfont">Sign Up</font>
                </div>
            </a>
            </div>
        </nav>
</header>
    <br><br><br><br><br>
    <form action="" method="post">
        <div class="container">
        <div class="row">
            <div class="columns">
            <img src="../resources/signup.png" alt="signup_image" class="signup_image">
            </div>
            <div class="columns">
            <div class="lay">
                <h1>Sign in</h1>
                <?php
    echo $message;
    ?>
                <div class="email">Invalid Username or password.please check it</div>
                <label for="username" class>Username</label>
                <input type="username" name="username" id="username" placeholder="eg: Shaf@live.com" class="login" required>
                <div class="email" id="email">Invalid Email</div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="**********" class="login" required>
                <div class="email" id="pwd">Invalid password</div>
                <a href="forget_password.php" class="hyperLink">Forget password</a>
                <input name="submit" type="submit" value="Log in" class="logbutton" id="submit">
            </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>