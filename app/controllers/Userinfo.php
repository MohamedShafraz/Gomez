<?php
class userinfo extends Controller{
    public function index(){
        session_start();
        $this->view("Admin/Userinformation_view");
    }
}
?>