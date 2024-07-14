<aside class="sidenav">
    <ul>
    <script>
        var $URLROOT = '<?=URLROOT?>'
         var $usertype= '<?=$_SESSION['userType']?>';
</script>
        <img src="<?= 'data:image/png;base64,' . base64_encode($_SESSION["USER"]["profilepicture"]) ?>" alt=""><br>
        <?=$_SESSION['userType']?><br><br>
        <li id="dashboard" onclick="y('dashboard')">Dashboard
        </li><br>
        <li  id="appointments" onclick="y('appointments')">
            Appointments
        </li><br>
        
        <li id="userdetails" onclick="y('userdetails')">
            User information
        </li>

     

     
    </ul>
</aside>



