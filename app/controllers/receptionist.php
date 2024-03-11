<?php
class receptionist extends Controller {
private $registrationmodel;
private $contactusmodel;
    public function __construct() {

    }
    public function index(){
        header('Location: '.URLROOT.'/Dashboard');
    }
    
    public function userdetails(){
        $this->view('receptionist/userdetail_view');
    }
    public function appointments(){
        $this->view('receptionist/appointments_view');
    }
    public function treatments(){
        $this->view('Patient/treatment_view');
    }
    public function dashboard(){
        $this->view('receptionist/dashboard_view');
    }
    public function labreports(){
        $this->view('receptionist/labreport_view');
    }
    
    
}
?>