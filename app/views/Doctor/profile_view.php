<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">
<style>
    .buttonspace{
    display: flex;
    justify-content: end;
    font-size: 30px;
    grid-template-columns: repeat(auto-fit, minmax(1rem, 0.3fr));
    gap: 1rem;
}
.popup{
    height: 10vh;
    background-color: white;
    color:black;
    width: 50%;
    align-items: center;
    gap: 1rem;
    position: fixed;
    padding: 5%;
    z-index: 5;
}
.button{
    height: 31px;
  flex-direction: column;
  justify-content: center;
  flex-shrink: 0;
  color: #FFF;
  font-family: 'inter-bold';
  font-size: 10px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
  padding: 10px;
  background-color: var(--Gomez-Purple);
  border-style: hidden;
  border-radius: 6px;
}
</style>

<!-- background-color:#E9F3FD -->
<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">

<div class="popup" style="margin-top:9%;margin-right:29%;margin-left:33%;display:none">
    Are you sure you want to deactivate your account<br>
    <br><div class="buttonspace" style="justify-content:center"><button class="button" style="background-color:red;padding-left: 5%;
  padding-right: 5%;
  padding-top: 2%;
  padding-bottom: 4%;" id ="yes">yes</button><br><button id="no" class="button" style="background-color:green;padding-right: 5%;padding-left: 5%;
  padding-top: 2%;
  padding-bottom: 4%;">no</button></div>
</div>
<article class="dashboard" style="margin-left:10%;">
    
    <!-- <a>Welcome to Gomez</a> -->
    
    <ul style="background-color: white;padding:5%; width:50%">
    <div class="users" style="float: left;gap: 5%;width:50% ;"><img src="<?=URLROOT."/public/resources/user.jpeg"?>" alt="Profile Picture" style="width: 73%;"></div>   
        <li class="users" style="color: black;">Full Name : <?php echo $data["doctor"]["fullname"] ?><br><br></li>
        <li class="users">Gender : <?php echo $data["doctor"]["gender"] ?> <br><br></li>
        <li class="users">Age : <?php echo $data["doctor"]["age"] ?> <br><br></li>
        <li class="users">Phone number : <?php echo $data["doctor"]["phonenumber"] ?> <br><br></li>
        <li class="users">Email : <?php echo $data["user"]["Email"] ?> <br><br></li>
        <a onclick="location.href='<?= URLROOT . "/Doctor/EditProfileView" ?>'"><button class="button" style="margin-left: 50%;" id="no">Edit Profile</button></a>
        <button id="deactivate"  class="button">Deactivate Account</button>
        <div id="chartContainer"></div>
        
        <div class="popup" style="margin-top:9%;margin-right:29%;margin-left:29%;display:none">Are you sure you want to deactivate your account<br>
        <br><div class="buttonspace" style="justify-content:center"><button class="button" style="background-color:red;padding-left: 5%;
            padding-right: 5%;
            padding-top: 2%;
            padding-bottom: 4%;" id ="yes">yes</button><br><button id="no" class="button" style="background-color:green;padding-right: 5%;padding-left: 5%;
            padding-top: 2%;
            padding-bottom: 4%;">no</button></div>
        </div>
   
</div>
</article>
<script>
    
document.getElementById("deactivate").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="block";
            document.getElementsByClassName("dashboard")[0].style.filter = "blur(3px)";
        };
        document.getElementById("no").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="none";
            document.getElementsByClassName("dashboard")[0].style.filter = "";
        }
        document.getElementById("yes").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="none";
            document.getElementsByClassName("dashboard")[0].style.filter = "";
            window.location.href = "<?=URLROOT?>/Doctor/DeactivateAccount";
        }   
</script>
</body>
<?php require_once(APPROOT . "/views/doctor/footer_view.php")?>
