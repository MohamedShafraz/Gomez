<aside class="sidenav">
    <ul>
        <script>
            var $URLROOT = '<?= URLROOT ?>'
            var $usertype = '<?= $_SESSION['userType'] ?>';
        </script>
        <img style="width: 11rem;
    border: 1px solid black;
    border-radius: 10rem;
    height: 10rem;border-radius:12.3rem;" src="<?= 'data:image/png;base64,' . base64_encode($_SESSION["USER"]["profilepicture"]) ?>" alt=""><br><br>
        <?= $_SESSION['userType'] ?><br><br>
        <li id="dashboard" onclick="y('dashboard')">Dashboard
        </li><br>
        <li id="appointments" onclick="y('appointments')">
            Appointments
        </li><br>
        <li id="labreports" onclick="y('labreports')">
            Lab Reports
        </li><br>
        <li id="alltests" onclick="y('alltests')">
            Pending Tests
        </li><br>

        <li id="userdetails" onclick="y('userdetails')">
            User information
        </li>
    </ul>
</aside>