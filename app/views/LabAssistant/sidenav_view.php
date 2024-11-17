
<aside class="sidenav">
    <ul>
    <script>
        var $URLROOT = '<?=URLROOT?>'
         var $usertype= '<?=$_SESSION['userType']?>';
</script>
        <img src="<?=URLROOT."/resources/user.png"?>" alt=""><br>
        <?=$_SESSION['userType']?><br><br>
        <li id="dashboard" onclick="y('dashboard')">Dashboard
        </li><br>
        <li  id="report" onclick="y('report')">
            Report
        </li><br>
        
        
    </ul>
</aside>