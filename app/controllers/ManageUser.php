<?php
class ManageUser extends Controller{
    public function index(){
        $this->view("Admin/manageuser_view");
    }
    public function patient(){
        $this->view("Admin/patient_view");
    }
}
?>