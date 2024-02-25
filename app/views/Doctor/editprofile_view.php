<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit PROFILE</h1>
    <?php
        var_dump($doctor);
        var_dump($user);
    ?>
    <form action="<?=URLROOT."/DoctorController/UpdateProfile"?>" method="post">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" placeholder="<?php echo $doctor["fullname"] ;?>" ><br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="<?php echo $doctor ["Username"] ;?>"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="<?php echo $doctor ["email"] ;?>"><br>

    <label for="phonenumber">Phone Number:</label>
    <input type="tel" id="phonenumber" name="phonenumber" placeholder="<?php echo $doctor ["phonenumber"] ;?>"><br>

    <input type="submit" value="Update Profile">
</form>
</body>

</html>