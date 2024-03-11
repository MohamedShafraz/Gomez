<?php
 class contactus extends Controller{
    private $contactusmodel;
    public function index(){
        $this->view('Patient/contactus_view');
        $this->model('contactus_model');
        $this->contactusmodel = new contactusmodel(new Database());
        if (isset($_POST['submit'])) {
            $name = isset($_POST['name']);
            $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';

            $message = isset($_POST['message']) ? $_POST['message'] : 'test';

            $this->contactusmodel->send($name, $mobile, $email, $message);
        }
        exit();
    }
 } 
?>