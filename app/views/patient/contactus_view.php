<?php
include_once(APPROOT.'/views/header_view.php');
?>
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/contactus.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home - Copy_files/GMZ.css">

    <style>
        h2{
            margin-top: 5%;
        }
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
        .button {
            /* background-color: var(--gomez-blue);
            padding: 5px;
            box-sizing: border-box; */
            display: flex;
  flex-direction: row;
  justify-content: center;
  flex-shrink: 0;
  color: var(--Gomez-White);
  font-family: 'inter-bold';
  font-size: 12px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
  flex-shrink: 0;
  border-radius: 10px;
  background: var(--Gomez-highlight);
  position: relative;
  padding: 1.4%;
  filter: drop-shadow(3px 3px 7px --Gomez-Black);
  width: max-content;
  border-style: none;
  box-shadow: 2px 2px 1px var(--Gomez-Black);
  font-family: inter;
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
    
    <title>contact us</title>
</head>
<body >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/GMZ.css">
    <!-- <script defer src="./View/loginjs.js"></script> -->
    <!-- <script defer src="./View/dashboardjs.js"></script> -->
    <title>Document</title>



    <header class="header">
    <img src="../resources/gomezlogo1.jpg" class="logo">
    <div class="navUnchange">
        <label class="menu">
<input type="checkbox" id="check" onclick="select2()"></label>
            
</div>
<script>
    function select2()
{if(document.getElementsByClassName("navbar")[0].style.display=="none"){
    document.getElementsByClassName("navbar")[0].style.display="flex";
}
else{
    document.getElementsByClassName("navbar")[0].style.display="none";
}
}
    
</script>
        <nav class="navbar" id="id">
        

            <a href="home.html" id="set1" class="unselected">Home</a>
            <a href="contactus.html" id="set1" class="unselected">Contact Us</a>
            <a href="../common/signup.php"><div class="selected"><font class="GMfont">Sign Up</font></div></a>
            <a href="../common/login.php"><div class="selected"><font class="GMfont">Log in</font></div>        </a>
        </nav>
    </header><br><br><br>

        <div class="bgimage" style="background-image: url(../resources/contact.jpg);background-size: contain;background-repeat:inherit;">
            
            <div class="columns" style="width: 50%;">
                
            
            
                <form action="" class="lay" style="background: linear-gradient(64deg, #b2d3f4, #c0ddff);margin-left:-3%;padding: 4% 11% 17% 11%;">
                <h2 style="text-align: left;">Contact US</h2>
                    <label for="Name">Name</label><br>
                    <input type="text" class="login"><br>
                    <label for="mobile">Mobile</label><br>
                    <input type="text" class="login"><br>
                    <label for="email">Email</label><br>
                    <input type="text" class="login"><br>
                    <label for="message">Message</label><br>
                    <textarea name="" id="" cols="30" rows="5"></textarea><br>
                    <button type="submit" class="logbutton">submit</button>

                </form>
            </div>
            <div class="columns">
                <article class="dashboard" style="margin-top: 0%;"> 
                    <ul>
                    
                        <li class="option"  style="background-color:#21519f"><img src="../resources/phone.png" width="40px" height="40px"><a style="font-size:6vh">Call us</a><br>0766414857 <br>0766654712<br><br></li>
                        <li class="option" style="background-color:#21519f"><img src="../resources/location.png" width="40px" height="40px"><a style="font-size:6vh">Location</a><br>No,63, Avissawella, Sri Lanka<br><br></li>
                        <li class="option" style="background-color: #21519f;"><img src="../resources/mail.png" width="40px" height="40px"><a style="font-size:6vh">Email</a><br>gomezhospital@gmail.com<br><br></li>
                        <li class="option" style="background-color: #21519f;"><img src="../resources/time.png" width="40px" height="40px"><a style="font-size:6vh">Hours</a><br>Always open<br><br></li>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4685081687035!2d80.20674997456995!3d6.953930118012695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3a998aefebc93%3A0xca78961aaa430a47!2sGomez%20Hospital%20Pvt%20Ltd!5e0!3m2!1sen!2slk!4v1698814609733!5m2!1sen!2slk" width="700" height="120" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </ul>
                </article>  
            </div>
        </div>
       
    

</body>




</body>
</html>
