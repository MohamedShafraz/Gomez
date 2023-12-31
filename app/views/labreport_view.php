<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=URLROOT.'/css/GMZ.css'?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
           
        }

        form {
            max-width: 60%; /* Set a maximum width for the form */
           
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        label {
            flex: 1; /* Allow labels to grow to take available space */
            margin-right: 20px;
            white-space: nowrap; /* Prevent line breaks within the label */
        }

        .input {
            flex: 1; /* Allow inputs to grow to take available space */
            padding: 5px;
            box-sizing: border-box;
        }
        .button1#test{
           
            padding: 5px;
            box-sizing: border-box;
            background-color: var(--Gomez-highlight);
            color: white;
            border: none;
        }
        .images{
            display: flex;
    gap: 100px;
    padding-bottom: 100px;
    padding-top: 50px;
    justify-content: center;
    font-family: inter;
    padding-bottom: 34px;
    padding-top: 79px;
        }
        .images img{
            width: 100px;
        }
        
    </style>
    <title>Lab Report Form</title>
</head>
<body style="background-color: var();">

<header class="header">
        <nav class="navbar">
        <div class="navbar-image">
            <img src=<?= URLROOT."/resources/gomezlogo1.jpg"?> class="logo">
        </div>
            <a href="#" id="set1" onmouseenter="select()" onmouseleave="unselect()" class="">Home</a>
            <a href="contactus.html" id="set" onmouseenter="select1()" onmouseleave="unselect1()" class="">Contact us</a>
            <a href="#" id="set2" onmouseenter="select2()" onmouseleave="unselect2()" class="">Facilities</a>
            </a>
            <a href="#make"><div class="selected">
                <font class="GMfont" style="font-family: 'inter';">Make Appointment</font></div>
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



<h2>Lab Reports</h2>
    <form style="margin-top: 10%;margin-left:17%;">
        <div class="form-group">
            <label for="labReportNumber">Lab Report Reference Number:</label>
            <input type="text" id="labReportNumber" name="labReportNumber" required class="input">
        </div>

        <div class="form-group">
            <label for="passcode">Passcode(printed on bill):</label>
            <input type="password" id="passcode" name="passcode" required class="input">
        </div>

        <div class="form-group">
        <button type="submit" class="button1" id='test'>Submit</button>
        </div>
    </form>

</body>
</html>
