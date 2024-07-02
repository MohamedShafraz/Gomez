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


<article class="dashboard" style="margin-left:10%;">
    
<ul style="background-color: white;padding:4%; width:50%;">
        <img  style="margin-left: 80%;" src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="" height="15px" onclick="userinfo()">
        
        <h1 style="font-size: 2em;margin-top:10%">Update Profile</h1>
        <div style="display:flex;flex-direction:row"">
            <div style="width: 50%;">
                <div class="users" style="float: left;gap: 5%;width:50% ;"><img src="<?=URLROOT."/public/resources/user.jpeg"?>" alt="Profile Picture" style="width: 73%;"></div>   
                <br>
                <form  action="<?=URLROOT."/Doctor/UpdateProfile"?>" method="post" style="width:55%" enctype="multipart/form-data">
                    <input type="file" name="profile_picture" accept="image/*">
            </div>
            <div style="width: 50%;">
                    
                        <label for="fullname">Full Name:</label><br>
                        <input type="text" id="fullname" name="fullname" value="<?php echo $doctor["fullname"] ;?>" ><br>
                        <br>
                        <label for="gender">gender:</label><br>
                        <input type="text" id="gender" name="gender" value="<?php echo $doctor["gender"] ;?>"><br>
                        <br>
                        <label for="age">age:</label><br>
                        <input type="tel" id="age" name="age" value="<?php echo $doctor ["phonenumber"] ;?>"><br>
                        <br>
                        <label for="phonenumber">phonenumber:</label><br>
                        <input type="tel" id="phonenumber" name="phonenumber" value="<?php echo $doctor ["phonenumber"] ;?>"><br>
                        <br>
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" value="<?php echo $doctor ["email"] ;?>"><br>
                        <br>
                        
                        <input type="submit" value="Update Profile">
                    </form>
            </div>
        </div>
    </ul>
    
    
   
</div>
</article>
<script>
    function userinfo(){
        window.location.href = "<?=URLROOT?>/Doctor/userdetails";
    }
</script>
</body>
<?php require_once(APPROOT . "/views/doctor/footer_view.php")?>
