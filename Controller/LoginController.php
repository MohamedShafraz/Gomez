<?php
class LoginController {
    
    public function index() {  
        if (!isset($_SESSION['userType'])) {
            include './View/Login.php';
        } else {
            include './View/Logout.php';
        }      
        
    }
}
?>