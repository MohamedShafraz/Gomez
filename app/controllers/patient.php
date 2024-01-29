<?php
class patient extends Controller{
    public function registration(){
        $this->view('registration_view');
    }
    public function login(){
        $this->view('login_view');
    }
}
?>