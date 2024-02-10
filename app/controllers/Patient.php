<?php
class patient extends Controller{
    public function registration(){
        $this->view('registration_view');
    }
    public function login(){
        $this->view('login_view');
    }
    public function view_profile(){
        $this->view('Admin/patient_details_view');
    }
}
?>