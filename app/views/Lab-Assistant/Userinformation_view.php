<?php
require_once(APPROOT . "/views/Lab-Assistant/navbar_view.php");
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
    margin: 1% 0% 0% 31%;z-index:100
" id='popup1'>
    <h1>Update Profile</h1>
    <ul>
        <li class="users">Full Name: Bhagya<br><br></li>
        <li class="users">Gender : Female<br><br></li>
        <li class="users">Age : 20<br><br></li>
        <li class="users">Phone number : 0777123456<br><br></li>
        <li class="users">Email : Bhag@live.com<br><br></li>
    </ul>
    <button onclick="m('popup1')" style="float:right" class="button">Update</button>
</div>
<article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->

    <ul style="background-color: white;padding:5%; width:50%">
        <div class="users" style="float: left;gap: 5%;width:50% ;"><img src="<?= URLROOT . "/public/resources/user.jpeg" ?>" alt="Profile Picture" style="width: 73%;"></div>
        <li class="users">Full Name : Bhagya<br><br></li>
        <li class="users">Gender : Female<br><br></li>
        <li class="users">Age : 20<br><br></li>
        <li class="users">Phone number : 0777123456<br><br></li>
        <li class="users">Email : Bhag@live.com<br><br></li>

        <div id="chartContainer"></div>
        <button onclick="window.location.href += '/id?'+.<?= $_SESSION['User_Id'] ?>" style="float:right" class="button">Edit</button>
    </ul>
    </div>
</article>
</body>
<script>
    if (window.location.href.split('?').length < 2) {
        document.getElementById('popup1').style.visibility = 'hidden';

    }

    function m($id) {
        window.location.href = '.';
        document.getElementById($id.toString()).style.visibility = 'hidden';
    }
    if (window.location.href.split('?').length == 2) {
        document.getElementsByClassName('dashboard')[0].style.filter = 'blur(4px)';
    }
</script>
<?php require_once(APPROOT . "/views/Lab-Assignment/footer_view.php"); ?>