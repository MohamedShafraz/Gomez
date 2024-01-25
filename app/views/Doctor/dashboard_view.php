<?php require_once(APPROOT."/views/Doctor/navbar_view.php");?>
<aside class="sidenav">
    <ul>
        <img src="<?=URLROOT."/resources/user.png"?>" ><br><br>
    </ul>
</aside>
<article class="dashboard">
    
    <h1 style="text-align: center;">THIS IS DOCTOR DASHBOARD</h1>
    <?php
      var_dump($_SESSION["USER"]);
    ?>
    

</div>
</div>
</article>

<?php require_once(APPROOT."/views/Admin/footer_view.php");?>