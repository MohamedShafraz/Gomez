<aside class="sidenav" id="idOdTableNotToPrint">
    <ul>
        <script>
            var $URLROOT = '<?= URLROOT ?>';
            var $usertype = '<?= $_SESSION["userType"] ?>'
        </script>

        <?= "<img src='data:image/png;base64," . base64_encode($_SESSION["USER"]["profilepicture"]) . "' alt='Profile Picture' style='    width: 12.3rem;margin-bottom: 8px;
    height: 12.3rem;border-radius:12.3rem;'>" ?><br>
        <?= $_SESSION["userType"] ?><br><br>
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