<!DOCTYPE html>
<!-- saved from url=(0070)file:///C:/Users/Student/Desktop/view/view/common/home%20-%20Copy.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?=URLROOT.'/css/new.css'?>">
</head>
<body >
    <header class="header">
        <nav class="navbar">
        <div class="navbar-image">
            <img src=<?=URLROOT."/resources/gomezlogo1.jpg"?> class="logo">
        </div>
            <a href="<?=URLROOT.'/#'?>" id="set1" onmouseenter="select()" onmouseleave="unselect()" class="">Home</a>
            <a href="contactus.html" id="set" onmouseenter="select1()" onmouseleave="unselect1()" class="">Contact us</a>
            <a href="#b1" id="set2" onmouseenter="select2()" onmouseleave="unselect2()" class="">Facilities</a>
            </a>
            <a href="#make"><div class="selected">
                <font class="GMfont" style="font-family: 'inter';">Appointment </font></div>
            </a>
            <script>
                function select() {
                    document.getElementById("set1").innerHTML = "<font class='GMfont'>"+document.getElementById("set1").innerText+"</font>" ;
                    document.getElementById("set1").className = "selected" ;
                }
                function unselect(){
                    document.getElementById("set1").innerHTML = "Home";
                    document.getElementById("set1").className = "";
                }
                document.getElementById("set").onmouseenter=function select1() {
                    document.getElementById("set").innerHTML = "<font class='GMfont'>"+document.getElementById("set").innerText+"</font>" ;
                    document.getElementById("set").className = "selected" ;
                }
                document.getElementById("set").onmouseleave=function unselect1(){
                    document.getElementById("set").innerHTML = "Contact Us";
                    document.getElementById("set").className = "";
                }
                document.getElementById("set2").onmouseenter=function select2() {
                    document.getElementById("set2").innerHTML = "<font class='GMfont'>"+document.getElementById("set2").innerText+"</font>" ;
                    document.getElementById("set2").className = "selected" ;
                }
                document.getElementById("set2").onmouseleave=function unselect2(){
                    document.getElementById("set2").innerHTML = "Facilities";
                    document.getElementById("set2").className = "";
                }
            </script>
            
        </nav>
    </header>
