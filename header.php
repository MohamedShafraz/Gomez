<?php
    $nav = "<a href='./View/login.php'><div class='selected'><font class='GMfont'>Sign up</font></div><a href='./Login'><div class='selected'><font class='GMfont'>Log in</font></div>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/GMZ.css">
    <script defer src="./View/login.js"></script>
    <title>Document</title>
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="#Home"  id="set1" onmouseenter="select()" onmouseleave="unselect()">Home</a>
            <a href="#Contact"  id="set" >Contact Us</a>
            <?php echo $nav?>
        </nav>
    </header>