<aside class="sidenav">
    <ul>
        <script>
            var $URLROOT = '<?= URLROOT ?>';
            var $usertype = '<?= $_SESSION["userType"] ?>'
        </script>
        <img style="width: 11rem;
    border: 1px solid black;
    border-radius: 10rem;
    height: 10rem;" src="<?= 'data:image/png;base64,' . base64_encode($_SESSION["USER"]["profilepicture"]) ?>" alt=""><br>
        <?= 'Admin' ?><br><br>
        <li id="dashboard" onclick="y('dashboard')">Dashboard
        </li><br>
        <li id="manageuser" onclick="y('manageuser')">
            Manage User
        </li><br>
        <li id="userinfo" onclick="y('userinfo')">
            User information
        </li>
    </ul>
</aside>