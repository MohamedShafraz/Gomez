<?php
// include_once(APPROOT."/views/header_view.php");
?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<!-- <link rel="stylesheet" href="<?= URLROOT ?>/css/Doctor/doctorcommon.css"> -->
<link rel="stylesheet" href="<?= URLROOT ?>/css/GMZ.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">

<!-- background-color:#E9F3FD -->

<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
    <img src="<?= URLROOT . "/resources/gomezlogo2.png" ?>" alt="" class="image">
    <br>
    <br>
    <br>

    <?php

    if (!isset($_SESSION)) {
        session_start();
    }

    ?>

    <header class="header">
        <nav class="navbar">
            <img src="<?= URLROOT . "/resources/user.png" ?>" class="profilepic">
            <a href="<?php echo URLROOT . "/LabAssistant/ViewProfile"; ?>">
                <div class="selected">
                    <font class="GMfont" style="font-family: 'inter';"><?php echo $_SESSION["USER"]["Username"]; ?></font>
                </div>
            </a>
        </nav>
    </header>