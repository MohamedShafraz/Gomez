<?php
 require_once(APPROOT."/views/Admin/navbar_view.php");
?>

<article class="dashboard">
    
    <!-- <a>Welcome to Gomez</a> -->
    
    <ul style="background-color: white;padding:5%; width:50%">
    <div class="users" style="float: left;gap: 5%;width:50% ;"><img src="<?=URLROOT."/public/resources/user.jpeg"?>" alt="Profile Picture" style="width: 73%;"></div>   
           <li class="users">Full Name : Shaf<br><br></li>
        <li class="users">Gender : Male<br><br></li>
        <li class="users">Age : 20<br><br></li>
        <li class="users">Phone number : 0777123456<br><br></li>
        <li class="users">Email : Shaf@live.com<br><br></li>

        <div id="chartContainer"></div>

    </ul>
</div>
</article>
</body>
<script src="<?=URLROOT?>./javascript/dashboard.js"></script>