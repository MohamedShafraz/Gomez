<?php

$usertype ="";
$message = "";
$nav = "<a href='./View/login.php'><div class='selected'><font class='GMfont'>Log out</font></div>";
if(isset($_POST["submit"])&&$_POST["submit"]=="Log in") {	
 
	$dbName = "localhost";
    $userName =  "root";
    $passWord = "";
    $tableName = "gomez_hc";
    $dbcon = mysqli_connect($dbName,$userName,$passWord,$tableName) or die("connection failure"); 
  $visitor = gethostbyname(gethostname());
$sql = "INSERT INTO `visitor_db`(`ip_address`) VALUES ('$visitor')";
$dbcon->query($sql);
   $user = $_POST["username"];
   $Password = md5($_POST["password"]);
   
   $statement = mysqli_prepare($dbcon, "SELECT `Username`,`usertype` FROM user_db WHERE `Username`=? AND `Password`=?");
mysqli_stmt_bind_param($statement, "ss", $user, $Password);
   
// Execute statement
mysqli_stmt_execute($statement);

// Get result
$result = mysqli_stmt_get_result($statement);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $_SESSION["userType"]=$row['usertype'];
    $nav = "";
    $islogin = true;
    
    $_SESSION["uname"] = md5($row["Username"]); 
    
    header("Location: Dashboard");
   
    exit;
  } else {
    // Check if username is invalid or password is incorrect
    $query = "SELECT `Username` FROM user_db WHERE `Username` = '$user'";
    $result = mysqli_query($dbcon, $query);
    if (mysqli_num_rows($result) == 0) {
      $message = "<font color=red size=2 class='emailOpen'><b>Incorrect username.<br>Please try again .</b></font>";
    } else {
      $usertype = mysqli_query($dbcon,"SELECT `usertype` FROM `user_db` WHERE `Username` =$user");
      
      $message = "<font color=red size=2 class='emailOpen'><b>Incorrect password.<br>Please try again $Password;.</b></font>";
    }
  }
}
else{
  $nav = "<a href='./Registration'><div class='selected'><font class='GMfont'>Sign up</font></div><a href='./Login'><div class='selected'><font class='GMfont'>Log in</font></div>";
}



?>