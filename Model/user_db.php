<?php
$message = "";
if(isset($_POST["submit"])&&$_POST["submit"]=="Log in") {	
  
	include("db_connect.php");	
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
    session_start();
    $_SESSION["uname"] = md5($row["Username"]); 
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