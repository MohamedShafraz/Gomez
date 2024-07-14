<?php


require_once(APPROOT . "/views/Admin/navbar_view.php");
?>

<script>
    $data = [];
    $data.push("<?= "Fullname :" .  "John Doe" ?>");
    $data.push("<?= "Username :" .  "John Doe" ?>");
    $data.push("<?= "Gender :" . "Male" ?>");
    $data.push("<?= "Specialization :" . "Dental" ?>");
    $data.push("<?= "Age : " . "27" ?>");
    $data.push("<?= "Phonenumber : " .  "0771234567" ?>");
    $data.push("<?= "Email : " .  "Johndoe@live.com" ?>");
    $data.push("<?= "Password : " .  "*******" ?>");

    console.log($data);
</script>
<style>
    .button {
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-shrink: 0;
        color: var(--Gomez-White);
        font-family: 'inter-bold';
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        flex-shrink: 0;
        border-radius: 10px;
        background: var(--Gomez-highlight);
        position: relative;
        padding: 1.4% 2.5%;
        filter: drop-shadow(3px 3px 7px --Gomez-Black);
        width: max-content;
        border-style: none;
        /* box-shadow: 2px 2px 1px var(--Gomez-Black); */
        font-family: inter;

    }

    /* input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    } */
</style>

<div class="lay" style="
    position: fixed;
    margin: 1% 10% 0% 28%;z-index:100;
    padding: 4% 11% 5% 11%;
" id='popup1'>
    <!-- <a href="./" style="position: fixed;
    margin: -5% 0% 0% 16%;
    z-index: 107;
    padding: 4% 11% 5% 11%;"><img style="width:5%;postion:fixed" src="<?= URLROOT . "/resources/back-button-svgrepo-com.svg" ?>"></a><br> -->

    <h1>Create New Patient</h1>

    <form action="./created" method="post" enctype="multipart/form-data">
        <div style="display:flex">
            <!-- <div class="users" style="float: left;gap: 5%;width:50% ;">
                <label for="file">Image</label><br>

                <br>
                <input type="file" name="file">

                <br>

            </div> -->
            <!-- <script>
                function v() {
                    console.log("<?= $_FILES ?? "test" ?>");
                }
            </script> -->
            <div id="img">

            </div>
            <div class="users" style="float: right;gap: 5%;width:50% ;">
                <script>
                    $data.forEach(element => {
                        if (element.split(" :")[0] == "Specialization") {
                            document.writeln(
                                "<label for='Specialization'>Specialization</label>" +
                                " <select placeholder='Any Specialization' name='Specialization' id='Specialization' class='holder' style='background:white'>" +
                                "<option value='Aesthetic'>Aesthetic<option>" +

                                "<option value='Dental'>Dental<option>" +
                                "<option value='family medicine'>family medicine<option>" +
                                "<option value='General Practitioner'>General Practitioner<option>" +
                                "<option value='General Medicine'>General Medicine<option>" +
                                "<option value='Gynaecologist'>Gynaecologist<option>" +
                                "<option value='Heamatologist'>Heamatologist<option>" +
                                "<option value='Human Nutritionist'>Human Nutritionist<option>" +
                                "</select>"
                            );
                        } else if (element.split(" :")[0] == "Password") {
                            document.writeln(
                                " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                                "<input type='password' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + " required><br><br>");

                        } else if (element.split(" :")[0] == "Age") {
                            document.writeln(
                                " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                                "<input type='number' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + " min='0' max='105' required><br><br>");
                        } else {
                            document.writeln(
                                " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                                "<input type='text' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + " required><br><br>")
                        }
                    });
                </script>
                <div style="display: flex;flex-direction:row;gap:20px ;">
                    <input name="submit" type="submit" class="button" value="create" style="padding:6% 7%;">
                    <button class="button" onclick="history.go(-1)" style="padding:6% 7%;">back</button>
                </div>

            </div>
        </div>
    </form>

</div>
<article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->


    </div>
</article>
<script defer="defer">
    // Validate Fullname
    document.getElementById('Fullname1').addEventListener('input', function() {
        var fullname = this.value;
        if (fullname.trim() === '') {
            alert('Fullname is required');
        }
    });

    // Validate Username
    document.getElementById('Username1').addEventListener('input', function() {
        var username = this.value;
        if (username.trim() === '') {
            alert('Username is required');
        }
    });

    // Validate Gender
    document.getElementById('Gender1').addEventListener('input', function() {
        var gender = this.value;
        if (gender.trim() === '') {
            alert('Gender is required');
        }
    });

    // Validate Age
    document.getElementById('Age1').addEventListener('input', function() {
        var age = this.value;
        if (age.trim() === '' || isNaN(age) || parseInt(age) < 0 || parseInt(age) > 105) {
            alert('Please enter a valid age between 0 and 105');
        }
    });

    // Validate Phonenumber
    document.getElementById('Phonenumber1').addEventListener('input', function() {
        var phonenumber = this.value;
        if (phonenumber.trim() === '' || !/^\d{10}$/.test(phonenumber)) {
            alert('Please enter a valid 10-digit phone number');
        }
    });

    // Validate Email
    // Validate Email after user finishes typing
    var emailInput = document.getElementById('Email1');
    var typingTimer;

    emailInput.addEventListener('input', function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(validateEmail, 1000); // Validate after 1 second of inactivity
    });

    emailInput.addEventListener('blur', validateEmail);

    function validateEmail() {
        var email = emailInput.value;
        if (email.trim() === '' || !/\S+@\S+\.\S+/.test(email)) {
            alert('Please enter a valid email address');
        }
    }


    // Validate Password
    document.getElementById('Password1').addEventListener('input', function() {
        var password = this.value;
        if (password.trim() === '') {
            alert('Password is required');
        }
    });
</script>
</body>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>