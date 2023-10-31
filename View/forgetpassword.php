<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="GMZ.css">
    <script defer src="login.js"></script>
</head>

<body class="body1">
 
    <br><br><br><br><br>
    <form action="dashboard.php" method="POST"  >
        <div class="container">
        <div class="row">
            <div class="column">
            <img src="View/signup.png" alt="signup_image" class="signup_image">
            </div>
            <div class="column">
            <div class="lay">
                <h1>Forget Password</h1>
                <div class="email">Invalid Username or password.please check it</div>
                <label for="username" class>Username</label>
                <input type="username" name="username" id="username" placeholder="eg: Shaf" class="login" required>
                <div class="email" id="email">Invalid Email</div>
                <label for="password">Email</label>
                <input type="password" name="password" id="password" placeholder="eg: Shaf@live.com" class="login" required>
                <div class="email" id="pwd">Invalid password</div>
                <div class="">If you remember the password
                <a href="login.php" class="hyperLink">Login</a>
                <input type="submit" value="Reset Password" class="logbutton" id="submit" onclick="location.href='dashboard.php'">
            </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>