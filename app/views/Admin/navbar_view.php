<?php
// include_once(APPROOT."/views/header_view.php");
?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">

<!-- background-color:#E9F3FD -->
<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
<img src="<?=URLROOT."/resources/gomezlogo2.png"?>" alt="" class="image">
<br>
<br>
<br>

<header class="header">
        <nav class="navbar">
            <img src="<?=URLROOT."/resources/user.png"?>" class="profilepic" >
            <a href="./logout"><div class="selected">
                <font class="GMfont" style="font-family: 'inter';" onclick="windows.location.href = 'location:logout'"> Hello, Shaf</font></div>
            </a>
        </nav>
    </header>
    <aside class="sidenav">
    <ul>
    <script>
    var $URLROOT = '<?=URLROOT?>';
</script>
        <img src="<?=URLROOT."/resources/user.png"?>" alt=""><br>
        <?='Admin'?><br><br>
        <li id="dashboard" onclick="y('dashboard')">Dashboard
        </li><br>
        <li  id="manageuser" onclick="y('manageuser')">
            Manage User
        </li><br>
        <li id="userinfo" onclick="y('userinfo')">
            User information
        </li>
    </ul>
</aside>
<article > 

