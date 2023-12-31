<?php
    class Dashboard extends Controller{
        public function Index(){
            $this->view('Admin/dashboard_view');
            $this->model('dashboard_model');
        }
    }
?>