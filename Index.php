
<?php
session_start();
include("Model/user_db.php");	

// Get the URL parameter from the query string
$url = isset($_GET['url']) ? $_GET['url'] : '/';

// Define a default controller and action if needed
$defaultController = 'HomeController';
$defaultAction = 'index';

// Split the URL into controller and action
$urlParts = explode('/', trim($url, '/'));

$controller = isset($urlParts[0]) && !empty($urlParts[0]) ? ucfirst($urlParts[0]) . 'Controller' : $defaultController;
$action = isset($urlParts[1]) && !empty($urlParts[1]) ? $urlParts[1] : $defaultAction;

// Include the controller file
$controllerFile = 'Controller/' . $controller . '.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    
    // Create an instance of the controller and call the action method
    $controllerInstance = new $controller();
    
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        echo '404 - Action not found';
    }
} else {
    echo '404 - Controller not found';
}
//$nav = "<a><div class='selected'><font class='GMfont'>Log out</font></div>"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/GMZ.css">
    <!-- <script defer src="./View/loginjs.js"></script> -->
    <!-- <script defer src="./View/dashboardjs.js"></script> -->
    <title>Document</title>
</head>

<body>
    <header class="header">
    <img src="View/logo.jpg" class="logo">
    <div class="navUnchange">
        <label class='menu'>
<input type='checkbox' id="check" onclick="select2()"></label>
            
</div>
<script>
    function select2()
{if(document.getElementsByClassName("navbar")[0].style.display=="none"){
    document.getElementsByClassName("navbar")[0].style.display="flex";
}
else{
    document.getElementsByClassName("navbar")[0].style.display="none";
}
}
    
</script>
        <nav class="navbar" id="id">
        

            <a href="./"  id="set1" class="unselected">Home</a>
            <a href="#Contact"  id="set1" class="unselected" >Contact Us</a>
            <?php
            if (isset($_SESSION["uname"])){
                if($_SESSION['uname']!=""){
                    $nav = "<a href='./Dashboard'  id='set1' class='unselected' >Dashboard</a><a href='logout.php'><div class='selected' ><font class='GMfont'>Log out</font></div>";
                }
            }
                 echo $nav;

            ?>
        </nav>
    </header>
    
</body>

</html>