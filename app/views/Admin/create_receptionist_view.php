<?php
require_once(APPROOT . "/views/Admin/navbar_view.php");
?>
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
</style>
<div class="lay" style="
    position: fixed;
    margin: 1% 10% 0% 28%;z-index:100;
    padding: 4% 11% 5% 11%;
" id='popup1'>

    <h1>Create New Receptionist</h1>

    <form action="./created" method="post" enctype="multipart/form-data">
        <div style="display:flex">
            <div class="users" style="float: right;gap: 5%;width:50% ;">
                <label for="Fullname1" class="users">Fullname: </label><br>
                <input type="text" id="Fullname1" name="Fullname" class="users" placeholder="John Doe" required=""><br><br>
                <label for="Email1" class="users">Email: </label><br>
                <input type="text" id="Email1" name="Email" class="users" placeholder="Johndoe@gmail.com" required=""><br><br>
                <label for="Password1" class="users">Password: </label><br>
                <input type="password" id="Password1" name="Password" class="users" placeholder="*******" required=""><br><br>
                <label for="Username1" class="users">Username: </label><br>
                <input type="text" id="Username1" name="Username" class="users" placeholder="JohnDoe" required=""><br><br>
                <label for="Gender1" class="users">Gender: </label><br>
                <input type="text" id="Gender1" name="Gender" class="users" placeholder="Male" required=""><br><br>

                <label for="Age1" class="users">Age: </label><br>
                <input type="number" id="Age1" name="Age" class="users" placeholder="27" min="0" max="105" required=""><br><br>

                <label for="Phonenumber1" class="users">Phonenumber: </label><br>
                <input type="text" id="Phonenumber1" name="Phonenumber" class="users" placeholder="0771234567" required=""><br><br>

                <label for="NIC1" class="users">NIC: </label><br>
                <input type="text" id="NIC1" name="NIC" class="users" placeholder="NIC Number" required=""><br><br>

                <div style="display: flex;flex-direction:row;gap:20px ;">
                    <input name="submit" type="submit" class="button" value="create" style="padding:6% 7%;">
                    <button class="button" onclick="history.go(-1)" style="padding:6% 7%;">back</button>
                </div>
            </div>
        </div>
    </form>

</div>

<script defer="defer">
    // Function to create a timer for each input field
    function createTimer(elementId, callback) {
        var timer;
        document.getElementById(elementId).addEventListener('input', function() {
            clearTimeout(timer);
            timer = setTimeout(callback, 1000); // Validate after 1 second of inactivity
        });
    }

    // Validate Fullname after typing
    createTimer('Fullname1', function() {
        var fullname = document.getElementById('Fullname1').value;
        if (fullname.trim() === '') {
            alert('Fullname is required');
        }
    });

    // Validate Gender after typing
    createTimer('Gender1', function() {
        var gender = document.getElementById('Gender1').value;
        if (gender.trim() === '') {
            alert('Gender is required');
        }
    });

    // Validate Age after typing
    createTimer('Age1', function() {
        var age = document.getElementById('Age1').value;
        if (age.trim() === '' || isNaN(age) || parseInt(age) < 0 || parseInt(age) > 105) {
            alert('Please enter a valid age between 0 and 105');
        }
    });

    // Validate Phonenumber after typing
    createTimer('Phonenumber1', function() {
        var phonenumber = document.getElementById('Phonenumber1').value;
        if (phonenumber.trim() === '' || !/^\d{10}$/.test(phonenumber)) {
            alert('Please enter a valid 10-digit phone number');
        }
    });

    // Validate NIC after typing
    createTimer('NIC1', function() {
        var nic = document.getElementById('NIC1').value;
        if (nic.trim() === '' || !/^(\d{9}[vVxX]|\d{12})$/.test(nic)) {
            alert('Please enter a valid NIC number');
        }
    });
</script>


<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>