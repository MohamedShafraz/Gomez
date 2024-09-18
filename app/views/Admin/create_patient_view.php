<?php


require_once(APPROOT . "/views/Admin/navbar_view.php");

?>

<script>
    $data = [];
    $data.push("<?= "Full name :" .  "John Doe :" ?>");
    $data.push("<?= "User name :" .  "John Doe :" ?>");
    $data.push("<?= "Gender :" . "Male :" ?>");
    $data.push("<?= "DOB : " . "2021-03-25 :" ?>");
    $data.push("<?= "Phone number : " .  "0771234567 :" ?>");
    $data.push("<?= "Email : " .  "Johndoe@live.com :"  ?>");
    $data.push("<?= "Password : " .  "******* :" ?>");

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
  margin: 1% 10% 0% 27%;
  z-index: 100;
  padding: 2% 22% 5% 23%;
  top: 81;
  width: 282px;
  justify-content: center;
  align-content: center;
  align-items: center;

" id='popup1'>
    <a href="./" style="position: relative;
  margin: 0% 0% 0% -171%;
  width: 10%;

   "><img style="width:100%;postion:fixed" src="<?= URLROOT . "/resources/back-button-svgrepo-com.svg" ?>"></a><br>

    <h1 style="">Create New Patient</h1>

    <form action="./created" method="post" enctype="multipart/form-data">
        <div style="display:flex">
        </div>
        <div class="users" style="gap: 5%;width:69% ;">
            <script>
                let $date = new Date().toJSON().slice(0, 10);;
                $data.forEach(element => {
                    if (element.split(" :")[0] == "Password") {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                            "<input type='password' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + "  required ><br><br>");
                    } else if (element.split(" :")[0] == "User name") {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                            "<input type='text' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + "  aria-describedby='usernameStatus' required><div id='usernameStatus' style='width:200px'></div><br>");

                    } else if (element.split(" :")[0] == "Full name") {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                            "<input type='text' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' pattern='[A-Za-z\\\s]+' class='users' placeholder=" + element.split(" :")[1] + " required><br><div id='FullnameError' style='display:none; color:red;width:200px'>Invalid name</div><br>");

                    } else if (element.split(" :")[0] == "Phone number") {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                            "<input type='tel' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' pattern='0[0-9]{9}' class='users' placeholder=" + element.split(" :")[1] + "  required><br><div id='phoneError' style='display:none; color:red;width:200px'>Invalid phone number</div><br>");
                    } else if (element.split(" :")[0] == "DOB") {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                            "<input type='date' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + " max=" + $date + " required ><br><br>");
                    } else if (element.split(" :")[0] == "Email") {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +

                            "<input type='email' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "'  class='users' placeholder=" + element.split(" :")[1] + "  required ><br><div id='emailError' style='display:none; color:red;width:200px'>Invalid email address</div><br>");

                    } else {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                            "<input type='text' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + " required><br><br>")
                    }
                });
            </script>
            <input name="submit" type="submit" class="button" value="create" style="padding:12px 15px;">

        </div>
</div>
</form>

</div>
<article class="dashboard">
    <script>
        let usernameInput = document.getElementById('User name1');
        let statusDisplay = document.getElementById('usernameStatus');
        const emailInput = document.getElementById('Email1');
        const emailError = document.getElementById('emailError');
        const phoneInput = document.getElementById('Phone number1')
        const phoneError = document.getElementById('phoneError');

        const nameInput = document.getElementById('Full name1')
        const nameError = document.getElementById('FullnameError');

        phoneInput.addEventListener('input', function() {
            if (phoneInput.value !== "" && !phoneInput.validity.valid) {
                phoneError.style.display = 'block';
            } else {
                phoneError.style.display = 'none';
            }
        });

        nameInput.addEventListener('input', function() {
            if (nameInput.value !== "" && !nameInput.validity.valid) {
                nameError.style.display = 'block';
            } else {
                nameError.style.display = 'none';
            }
        });

        emailInput.addEventListener('input', function() {
            if (emailInput.validity.typeMismatch) {
                emailError.style.display = 'block';
            } else {
                emailError.style.display = 'none';
            }
        });

        function checkUsername() {
            let username = usernameInput.value;

            fetch('<?= URLROOT . "/Admin/manageuser/checkPatientUserName" ?>', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        username: username
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.exists) {
                        statusDisplay.textContent = 'Username is taken';
                        statusDisplay.style.color = 'red';
                    } else {
                        statusDisplay.textContent = 'Username is available';
                        statusDisplay.style.color = 'green';
                    }
                })
                .catch(error => console.error('Error:', error));
        }


        usernameInput.addEventListener('input', () => {
            if (usernameInput.value.length > 0) {
                checkUsername();
            } else {
                statusDisplay.textContent = '';
            }
        });
    </script>
    <!-- <a>Welcome to Gomez</a> -->

    </div>
</article>
</body>

<?php

require_once(APPROOT . "/views/Admin/footer_view.php"); ?>