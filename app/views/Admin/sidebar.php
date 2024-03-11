<aside class="sidenav">
    <ul>
        <script>
            var $URLROOT = '<?= URLROOT ?>';
            var $usertype = '<?= $_SESSION["userType"] ?>'
        </script>
        <img src="<?= URLROOT . "/resources/user.png" ?>" alt=""><br>
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