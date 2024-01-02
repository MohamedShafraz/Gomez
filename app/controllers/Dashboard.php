<?php
    class Dashboard extends Controller{
        private $usertype;
        public function Index(){

            session_start();
            $this->view($_SESSION["userType"].'/dashboard_view');
            $this->model('/dashboard_model');
            }
        }
?>