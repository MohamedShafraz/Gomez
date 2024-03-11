<?php
class Logout extends Controller {

    public function __construct() {
           
    }
    public function index(){
        session_start();
        if(isset($_SESSION["userType"]))  {
            unset($_SESSION["userType"]);
        header("location: ".URLROOT."/Users/Login");
        }
    }
}
/*
 *param = hello c
 controller-> method (parameter = param) 
 */
?>