<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/new.css">
<link rel="stylesheet" href="<?= URLROOT ?>/css/Admin/manageuser.css">
<style>
    .test:hover {
        background: var(--Gomez-highlight);
        color: white;
    }

    .test {
        margin: 30% 0%;
        padding: 33%;
        border-radius: 6px;
        background: #fff;
        color: var(--Gomez-highlight);
        border: none;
    }

    .test#c {
        margin: 10% 0%;
        padding: 27%;
    }

    .logbutton1 {
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
        border-radius: 100px;
        background: var(--Gomez-highlight);
        position: relative;
        padding: 1.5% 4%;
        filter: drop-shadow(3px 3px 7px --Gomez-Black);
        width: max-content;
        border-style: none;
        box-shadow: 2px 2px 1px var(--Gomez-Black);
    }

    .logbutton1#update {
        padding: 3.5% 6%;
    }
</style>
<!-- background-color:#E9F3FD -->
<?php require_once(APPROOT . "/views/Owner/navbar_view.php"); ?>


<!-- <div class="lay" style="
    position: fixed;
    margin: 1% 0% 0% 31%;z-index:100;
    visbility:none
" id='popup1'>
    <h1>Update Profile</h1>
    <ul>
        <li class="users">
            <label for="fullname">Full Name :</label><br><input id='fullname' name='fullname' value='<?= $data['userName'] ?? "" ?>'><br><br>
        </li>
        <li class="users">
            <label for="gender">Gender :</label><br><input id='gender' name='gender' value='<?= $data['gender'] ?? "" ?>'><br><br>
        </li>
        <li class="users">
            <label for="age">Age :</label><br><input id='age' name='age' value='<?= $data['age'] ?? "" ?>'><br><br>
        </li>
        <li class="users">
            <label for="phonenumber">Phone number :</label><br><input id='phonenumber' name='phonenumber' value='<?= $data['phonenumber'] ?? "" ?>'><br><br>
        </li>
        <li class="users">
            <label for="email">Email :</label><br><input id='email' name='email' value='<?= $data['email'] ?? "" ?>'><br><br>
        </li>
    </ul>
    <button onclick="m('popup1')" style="float:center" class="logbutton1" id='update'>Update</button>
</div> -->
<article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->
    <ul style="background-color: white;padding:5%; width:50%">
        <div class="users" style="float: left;gap: 5%;width:50% ;"><img src="<?= URLROOT . "/public/resources/user.jpeg" ?>" alt="Profile Picture" style="width: 73%;"></div>
        <li class="users">Full Name : <?= $data['userName'] ?? "" ?><br><br></li>
        <li class="users">Gender : <?= $data['gender'] ?? "" ?><br><br></li>
        <li class="users">Age : <?= $data['age'] ?? "" ?><br><br></li>
        <li class="users">Phone number : 0<?= $data['phonenumber'] ?? "" ?><br><br></li>
        <li class="users">Email : <?= $data['email'] ?? "" ?><br><br></li>

        <div id="chartContainer"></div>
        <button onclick="back()" style="float:right;padding:1.5% 4%;" class="logbutton1">Back</button>
    </ul>
    </div>
</article>
</body>
<script>
    if (window.location.href.split('?').length == 2) {
        document.getElementById('popup1').style.visibility = 'hidden';
    }

    function f() {
        window.location.href += '#edit';
        document.getElementById('popup1').style.visibility = '';
        document.getElementsByClassName('dashboard')[0].style.filter = 'blur(4px)';
    }

    function back() {
        window.location.href = './';
    }

    function m($id) {
        window.location.href = './id=<?= $_SESSION['uid'] ?? "" ?>';
        document.getElementById($id.toString()).style.visibility = 'hidden';
    }
    if (window.location.href.split('#').length != 2 && window.location.href.split('=').length == 2) {

        document.getElementById('popup1').style.visibility = 'hidden';
    }
    if (window.location.href.split('#').length == 2) {
        document.getElementById('popup1').style.visibility = '';
    }
</script>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>