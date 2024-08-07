<?php require_once(APPROOT."/views/LabAssistant/navbar_view.php");?>
<aside class="sidenav">
    <ul>
        <img src="<?=URLROOT."/resources/user.png"?>" ><br><br>
        <li id="Dashboard" onclick="y('Dashboard')">Dashboard</li>
        <li id="report" onclick="y('report')">Report</li>
        <li id="ViewReminder" onclick="y('ViewReminder')">Reminder</li>
    </ul>

    <style>
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    ul li a {
        text-decoration: none;
        color: inherit;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: block; /* Change to block to make it a block element */
        margin: 0 auto; /* Center horizontally */
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    input[type="text"],
    input[type="date"],
    textarea {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    label {
        text-align: center;
        color: darkblue;
    }

    /* Center the form */
    .dashboard {
        text-align: center;}

</style>


</aside>
<article class="dashboard">
    <div style="margin-left:24%; display:flex; justify-content:center;">
    
  
    
    <form action="<?=URLROOT."/LabAssistantController/EditProfileView"?>" method="post">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" value="<?php echo $labassistant["fullname"] ;?>" ><br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" value="<?php echo $labassistant ["Username"] ;?>"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $labassistant ["email"] ;?>"><br>

    <label for="phonenumber">Phone Number:</label>
    <input type="tel" id="phonenumber" name="phonenumber" value="<?php echo $labassistant ["phonenumber"] ;?>"><br>

    <input type="submit" value="Update Profile">
</form>
    
    </div>
</div>
</div>
</article>

<?php require_once(APPROOT."/views/Admin/footer_view.php");?>