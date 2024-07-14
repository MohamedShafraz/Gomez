<?php
include_once(APPROOT . '/views/header_view.php');
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
                <img src="<?= URLROOT . '/resources/registration.jpg' ?>" alt="image" srcset="" width="50%" style="margin-left: 34%;
  width: 66%;height:100%;
padding: 0% 0% 0% 0%;
box-shadow: 0 4px 12px rgba(0,0,0,0.15);
border-radius: 8px 0px 0px 8px;">
            </div>
            <div class="column" style="width: 30%;">
                <div class="lay" style="gap:15px;border-radius:0%;padding: 7% 65% 30% 29%;width: 100%;font-family: inter;border-radius: 0px 8px 8px 0px;">
                    <h1>Registration</h1>
                    <div>
                        <div style="display: grid;grid-template-columns:minmax(200px,500px) minmax(200px,500px);gap:15px">
                            <div><label for="fullname">
                                    Full Name:
                                </label>
                                <input type="text" name="fullname" id="fullname" oninput="verify()" required="">
                                <div id="fullname_err" style="display:none;color:lightcoral;font-size:small">Please Enter Fullname</div>

                            </div>
                            <div><label for="Username">
                                    User Name:
                                </label>
                                <input type="text" name="Username" id="Username" oninput="verify()" required="">
                                <div id="username_err" style="display:none;color:lightcoral;font-size:small">Please Enter Fullname</div>
                            </div>
                            <div>
                                <label for="gender">Gender:</label>
                                <input type="text" name="gender" id="gender" oninput="verify()" required="">
                                <div id="gender_err" style="display:none;color:lightcoral;font-size:small">Please Enter Gender</div>
                            </div>
                            <div>
                                <label for="age">Age:</label>
                                <select name="age" id="age" onchange="updateNicLabel()" oninput="verify()" style="width: 86%;
    height: 53%;">
                                    <option value="below">below eighteen</option>
                                    <option value="above" selected="selected">above eighteen</option>

                                </select>
                                <div id="age_err" style="display:none;color:lightcoral;font-size:small">Please Enter Age</div>
                            </div>
                            <div>
                                <label for="nic" id="niclabel">NIC:</label>
                                <input type="text" name="nic" id="nic" oninput="verify()">
                                <div id="nic_err" style="display:none;color:lightcoral;font-size:small">Please Enter NIC</div>
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
                                <input type="date" name="date_of_birth" id="date_of_birth" style="width: 10.5rem;" oninput="verify()" required="">
                                <div id="date_err" style="display:none;color:lightcoral;font-size:small">Please Enter Date of Birth</div>
                            </div>
                            <div>
                                <label for="phonenumber">Phone Number:</label>
                                <input type="phonenumber" name="phonenumber" id="phonenumber" oninput="verify()" required="">
                                <div id="phonenumber_err" style="display:none;color:lightcoral;font-size:small">Please Enter Phone Number</div>
                                <div id="phonenumber1_err1" style="display:none;color:lightcoral;font-size:small">Enter Valid Phone Number</div>
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" oninput="verify()" required="">
                                <div id="email_err" style="display:none;color:lightcoral;font-size:small">Please Enter Email</div>
                                <div id="email1_err1" style="display:none;color:lightcoral;font-size:small">Enter Valid Email</div>
                            </div>
                            <div>
                                <label for="address">Address:</label>
                                <input type="address" name="address" id="address" oninput="verify()" required="">
                                <div id="address_err1" style="display:none;color:lightcoral;font-size:small">Please Enter Address</div>
                            </div>
                            <div>
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" oninput="verify()" required="">
                                <div id="password_err" style="display:none;color:lightcoral;font-size:small">Please Enter Password</div>
                                <div id="password1_err1" style="display:none;color:lightcoral;font-size:small">Enter a Valid Password</div>
                            </div>
                            <div>
                                <label for="confirm_password">Confirm Password:</label>
                                <input type="password" name="repassword" id="confirm_password" oninput="verify()" required="">
                                <div id="confirm_password_err" style="display:none;color:lightcoral;font-size:small">password doesn't match</div>
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

    <script defer="defer">
        const $fullname = document.getElementById('fullname');
        const $username = document.getElementById('Username');
        const $gender = document.getElementById('gender');
        const $phonenumber = document.getElementById('phonenumber');
        const $date = document.getElementById('date_of_birth');
        const $age = document.getElementById('age');
        const $email = document.getElementById('email');
        const $address = document.getElementById('address');
        const $nic = document.getElementById('nic');
        const $password = document.getElementById('password');
        const $confirm_password = document.getElementById('confirm_password');

        function verify() {
            if ($fullname.value === '') {
                document.getElementById('fullname_err').style.display = 'block';
            } else {
                document.getElementById('fullname_err').style.display = 'none';
            }
            if ($username.value === '') {
                document.getElementById('username_err').style.display = 'block';
            } else {
                document.getElementById('username_err').style.display = 'none';
            }
            if ($gender.value === '') {
                document.getElementById('gender_err').style.display = 'block';
            } else {
                document.getElementById('gender_err').style.display = 'none';
            }
            if ($phonenumber.value === '') {
                document.getElementById('phonenumber_err').style.display = 'block';
            }
            if ($phonenumber.value != '') {
                document.getElementById('phonenumber_err').style.display = 'none';
            }
            const phoneNumberValue = $phonenumber.value.trim();
            const phoneNumberPattern = /^0\d{9}$/;


            if (!phoneNumberPattern.test(phoneNumberValue)) {
                document.getElementById('phonenumber1_err1').style.display = 'block';
            }
            if (phoneNumberPattern.test(phoneNumberValue)) {

                document.getElementById('phonenumber1_err1').style.display = 'none';
            }

            if ($date.value === '') {
                document.getElementById('date_err').style.display = 'block';
            } else {
                document.getElementById('date_err').style.display = 'none';
            }
            if ($age.value === '') {
                document.getElementById('age_err').style.display = 'block';
            } else {
                document.getElementById('age_err').style.display = 'none';
            }




            // Attach oninput event listener to the phone number input field
            //$phonenumber.addEventListener('input', verifyPhoneNumber);

            if ($email.value === '') {
                document.getElementById('email_err').style.display = 'block';
            }
            if ($email.value != '') {
                document.getElementById('email_err').style.display = 'none';
            }
            const emailValue = $email.value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regex pattern for validating email addresses

            if (!emailPattern.test(emailValue)) {
                document.getElementById('email1_err1').style.display = 'block';
                valid = false;
            }
            if (emailPattern.test(emailValue)) {
                document.getElementById('email1_err1').style.display = 'none';
            }
            if ($address.value === '') {
                document.getElementById('address_err').style.display = 'block';
            } else {
                document.getElementById('address_err').style.display = 'none';
            }
            if ($nic.value === '') {
                document.getElementById('nic_err1').style.display = 'block';
            } else {
                document.getElementById('nic_err').style.display = 'none';
            }
            if ($password.value === '') {
                document.getElementById('password_err1').style.display = 'block';
            }
            if ($password.value != '') {
                document.getElementById('password_err').style.display = 'none';
            }
            if ($password.value != $confirm_password.value) {
                document.getElementById('confirm_password_err').style.display = 'block';
            }
            if ($password.value == $confirm_password.value) {
                document.getElementById('confirm_password_err').style.display = 'none';
            }

            const passwordValue = $password.value.trim();
            const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;

            if (!passwordPattern.test(passwordValue)) {
                document.getElementById('password1_err1').style.display = 'block';

            }
            if (passwordPattern.test(passwordValue)) {
                document.getElementById('password1_err1').style.display = 'none';
            }
        }
    </script>


</body>

</html>