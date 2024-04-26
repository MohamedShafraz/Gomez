<?php
// include_once(APPROOT."/views/header_view.php");
?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">

<!-- background-color:#E9F3FD -->

<body style="background-image:linear-gradient(90deg,#E9F3FD,#E9F3FD);overflow:hidden">
    <img src="<?= URLROOT . "/resources/gomezlogo2.png" ?>" alt="" class="image">
    <br>
    <br>
    <br>

    <header class="header">
        <nav class="navbar">
            <img src="<?= URLROOT . "/resources/user.png" ?>" class="profilepic">
            <a href="./logout">
                <div class="selected">
                    <font class="GMfont" style="font-family: 'inter';" onclick="windows.location.href = 'location:logout'"> Hello, Lak</font>
                </div>
            </a>
        </nav>
    </header>
    <?php include APPROOT . '/views/Admin/sidebar.php' ?>
    <article>
