<aside class="sidenav">
    <ul>
        <script>
            var $URLROOT = '<?= URLROOT ?>';
            var $usertype = '<?= $_SESSION["userType"] ?>'
        </script>
        <img src="<?= URLROOT . "/resources/user.png" ?>" alt=""><br>
        <?= 'Lab-Assistant' ?><br><br>
        <li id="sidebar" onclick="window.location.href = 'localhost/gomez/Lab-Assistant/sidebar'">Dashboard
        </li><br>
        <li id="uploadreport" onclick="y('uploadreport')">
            Upload Report
        </li><br>
        <li id="userinfo" onclick="y('userinfo')">
            User information
        </li>
    </ul>
</aside>