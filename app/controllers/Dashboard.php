<?php
    class Dashboard extends Controller{
        private $usertype;
        public function Index(){

            session_start();
            if(isset($_SESSION["userType"])){
            $this->view($_SESSION["userType"].'/dashboard_view');
            $this->model('/dashboard_model');
            }
            else{
                header("location:".URLROOT."/users/login");
            }
            }
        }
?>