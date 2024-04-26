<aside class="sidenav">
    <ul>
        <script>
            var $URLROOT = '<?= URLROOT ?>';
            var $usertype = '<?= $_SESSION["userType"] ?>'
        </script>
        <img src="<?= URLROOT . "/resources/user.png" ?>" alt=""><br>
        <?= 'Lab-Assistant' ?><br><br>
        <li id="dashboard" onclick="y('dashboard')">Dashboard
        </li><br>
        <li id="uploadreport" onclick="y('uploadreport')">
            Upload Report
        </li><br>
        <li id="userinfo" onclick="y('userinfo')">
            User information
        </li>
    </ul>
</aside>