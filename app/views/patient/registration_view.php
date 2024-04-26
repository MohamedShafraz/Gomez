<?php
include_once(APPROOT.'/views/header_view.php');
$message = "";
?>
<br>
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/patient/registration.css">

<body style="overflow-x: hidden;" cz-shortcut-listen="true">
    
<br>


    <br>
    <form action="" method="post">
        <div class="container" style="
  margin-top: 2%;width:64%;padding: 0%;
  height: 100%;
  margin-left: 2%;">
        <div class="column" style="margin-left: 25%;
  width: max-content;
padding: 0%;
margin: 0% 0% 0% 8%;
height: initial;">
                <img src="<?=URLROOT.'/resources/registration.jpg'?>" alt="image" srcset="" width="50%" style="margin-left: 34%;
  width: 66%;height:100%;
padding: 0% 0% 0% 0%;
box-shadow: 0 4px 12px rgba(0,0,0,0.15);
border-radius: 8px 0px 0px 8px;"></div>
                <div class="column" style="width: 30%;">
            <div class="lay" style="gap:15px;border-radius:0%;padding: 7% 65% 30% 29%;width: 100%;font-family: inter;border-radius: 0px 8px 8px 0px;">
                <h1>Registration</h1>
                                <div>
                    <div style="display: grid;grid-template-columns:minmax(200px,500px) minmax(200px,500px);gap:15px">
                        <div><label for="fullname">
                            Full Name:
                        </label>
                    <input type="text" name="fullname" id="fullname"></div>
                    <div><label for="Username">
                            User Name:
                        </label>
                    <input type="text" name="Username" id="Username"></div>
                    <div>
                            <label for="gender">Gender:</label>
                            <input type="text" name="gender" id="gender">
                        </div>
                        <div>
    <label for="age">Age:</label>
    <select name="age" id="age" onchange="updateNicLabel()" style="width: 86%;
    height: 53%;">
        <option value="below">below eighteen</option>
        <option value="above" selected="selected">above eighteen</option>
    </select>
</div>
<div>
    <label for="nic" id="niclabel">NIC:</label>
    <input type="text" name="nic" id="nic">
</div>

<script>
function updateNicLabel() {
    var ageDropdown = document.getElementById('age');
    var nicLabel = document.getElementById('niclabel');

    if (ageDropdown.value === 'below') {
        nicLabel.textContent = 'Guardian NIC:';
    } else {
        nicLabel.textContent = 'NIC:';
    }
}

updateNicLabel();
</script>

                        <div>
                            <label for="date_of_birth">Date Of Birth:</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" style="width: 10.5rem;">
                        </div>
                        <div>
                            <label for="phonenumber">Phone Number:</label>
                            <input type="phonenumber" name="phonenumber" id="phonenumber">
                        </div>
                        <div>
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div>
                            <label for="address">Address:</label>
                            <input type="address" name="address" id="address">
                        </div>
                        <div>
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" required>
                            <div id='password_err'></div>
                        </div>
                        <div>
                            <label for="confirm_password">Confirm Password:</label>
                            <input type="password" name="repassword" id="confirm_password" oninput="verify()" required>
                            <div id='confirm_password_err' style='display:none;color:lightcoral;font-size:small'>password doesn't match</div>
                        </div>
                        <!-- <div>
                            <label for="date_of_birth">Date Of Birth:</label>
                            <input type="text" name="date_of_birth" id="date_of_birth"  required>
                        </div> -->
                    </div>
                    
                </div>
                
                <input name="submit" type="submit" value="Sign up" class="logbutton" id="submit" style="font-family: inter;font-size:15px; padding:3% 4%">
            </div>
            </div>
        </div>
    </form>

    <script defer>
        const $password= document.getElementById('password');
        const $confirm_password = document.getElementById('confirm_password');
        function verify(){
        if($password.value != $confirm_password.value){document.getElementById('confirm_password_err').style.display = 'block';}
        
        else{document.getElementById('confirm_password_err').style.display = 'none';}
        }
    </script>

</body>
</html>