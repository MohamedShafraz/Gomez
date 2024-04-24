<?php
use LDAP\Result;
class receptionist extends Controller {
private $registrationmodel;
private $contactusmodel;
private $appointmodel;
    public function __construct() {
        session_start();
        if(!isset($_SESSION["userType"])){
            header("location:".URLROOT . "/users/login");
        }

    }
    public function index(){
        header('Location: '.URLROOT.'/Dashboard');
        exit();
    }
    
    public function userdetails(){
        $this->view('receptionist/userdetail_view');
        exit();
    }
    public function appointments($make=null,$ShowDoc=null){
        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model('appointment_model');
        $this->appointmodel = new appointment();
        $result = $this->appointmodel->getAppoinmentbyPatient(); 
       
        // $resultUser = $this->appointmodel->getUsernamebyPatient(new Database());
       // print_r($resultUser);
        // $this->view('Patient/appointments_view',$result);
        // $this->view('Patient/dashboard_view',$resultUser);
        if($make!= null&&$ShowDoc== null){
            
            $this->view('patient/makeappointment_view');
        }
        if($ShowDoc!= null){
            $this->view('patient/Registerd_appointdoctor_view');
        }
        else{
            $result = $this->appointmodel->getAllAppointmentDetails(new Database()); 
        $this->view('Patient/appointments_view',$result);
        // print_r("hello");
        }
        exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }
    public function treatments(){
        $this->view('Patient/treatment_view');
        exit();
    }
    public function dashboard(){
        $this->view('receptionist/dashboard_view');
        exit();
    }
    public function labreports(){
        $this->view('receptionist/labreport_view');
        exit();
    }
    
    
}
?>