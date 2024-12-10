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
<?php require_once(APPROOT . "/views/Admin/navbar_view.php"); ?>


<div class="lay" style="
    position: fixed;
    margin: 1% 0% 0% 31%;z-index:100;
    padding-bottom: 6%;
" id='popup1'>
    <h1>Update Profile</h1>
    <script>
        data = []
    </script>
    <ul>

        <?php
        $keyId = $data['id'];
        echo " <form action='../updatePatientDetails/id= " . $keyId
            . "' method='post'>";
        foreach ($data as $key => $value) {
            if ($key == 'id' || $key == 'type') {
                continue;
            };
            echo "
            <li class='users'><label for=$key>$key :</label><br><input id=$key name=$key value=$value><br><br></li>";
        }
        echo "<div style='display:flex;flex-direction:row;gap:10px'><button onclick='back()' style='padding: 9px 22px;' class='button' id='back'>Back</button>
        <input type='submit' style='padding: 9px 22px;' class='button' id='update' value='Update'></div></form>";

        ?>
    </ul>
    <div style="flex-direction: row;
  display: flex;
  gap: 4rem;
">

    </div>
</div>
<article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->
    <ul style="background-color: white;padding:5%; width:50%">
        <div class="users" style="float: left;gap: 5%;width:28% ;"><img src="<?= URLROOT . "/resources/new_pat.png" ?>" alt="Profile Picture" style="width: 73%;"></div>

        <?php
        foreach ($data as $key => $value) {
            if ($key == 'id' || $key == 'type') {
                continue;
            }
            echo "<li class='users'>$key:  $value <br><br></li>";
        }
        ?>
        <div style="display:flex;gap:10px;float:left;padding: 9px 22px;"><button onclick="window.location.href = '<?= URLROOT . '/Admin/Manageuser/patient' ?>'" style="padding: 9px 22px;" class="button">back</button>
            <button onclick="f()" style="padding: 9px 22px;" class="button">Edit</button>

        </div>


    </ul>
    </div>
</article>
</body>
<script>
    if (window.location.href.split('?').length !== 2) {
        document.getElementById('popup1').style.visibility = 'hidden';
        // console.log("test");
    }

    function f() {
        window.location.href += '#edit';
        document.getElementById('popup1').style.visibility = '';
        document.getElementsByClassName('dashboard')[0].style.filter = 'blur(4px)';
    }

    function back() {
        window.location.href = window.location.href.split('#')[0];
        document.getElementById('popup1').style.visibility = 'none';
        document.getElementsByClassName('dashboard')[0].style.filter = '';
    }


    function m($id) {
        const url = window.location.href.split('#')[0];
        window.location.href = '../updatePatientDetails/id=' + url.split('=')[1];
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