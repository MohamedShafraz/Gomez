<?php
// include_once(APPROOT."/views/header_view.php");
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
</head>
<!-- background-color:#E9F3FD -->

<body style="background-image:linear-gradient(90deg,#E9F3FD,#E9F3FD);overflow:hidden">
    <img src="<?= URLROOT . "/resources/gomezlogo2.png" ?>" alt="" class="image">
    <br>
    <br>
    <br>

    <header class="header">
        <nav class="navbar">
            <img style="border-radius: 41px;
    height: 41px;
    width: 46px;
    border: 1px solid black;" src="<?= 'data:image/png;base64,' . base64_encode($_SESSION["USER"]["profilepicture"]) ?>" class="profilepic">
            <a href="<?= URLROOT . '/logout' ?>">
                <div class="selected">
                    <font class="GMfont" style="font-family: 'inter';" onclick="windows.location.href = 'location:logout'"> Hello, Bhag</font>
                </div>
            </a>
        </nav>
    </header>
    <?php include APPROOT . '/views/LabAssistant/sidenav_view.php' ?>
    <article>