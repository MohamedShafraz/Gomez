<?php
    class Users extends Controller{
        public function Index() {
            
        }
        public function Login(){
            $this->model('login_model');
            $this->view('login_view');
        }
        public function LabReport(){
            $this->view('labreport_view');    
        }
    }
?>