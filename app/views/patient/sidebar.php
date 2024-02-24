<aside class="sidenav">
    <ul>
    <script>
    var $URLROOT = '<?=URLROOT?>';
</script>
        <img src="<?=URLROOT."/resources/user.png"?>" alt=""><br>
        <?='Admin'?><br><br>
        <li id="dashboard" onclick="y('dashboard')">Dashboard
        </li><br>
        <li  id="appointments" onclick="y('appointments')">
            Appointments
        </li><br>
        <li  id="labreport_registered" onclick="y('labreport_registered')">
            Lab Reports
        </li><br>
        <li  id="treatments" onclick="y('treatments')">
            Treatments
        </li><br>
        <li id="userdetails" onclick="y('userdetails')">
            User information
        </li>
    </ul>
</aside>