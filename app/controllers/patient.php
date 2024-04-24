<?php

use LDAP\Result;

class patient extends Controller
{
    private $userinfo_model;
    private $contactusmodel;
    private $appointmodel;
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION["userType"])) {
            header("location:" . URLROOT . "/users/login"); 
        }
    }
    public function index()
    {
        header('Location: ' . URLROOT . '/Dashboard');
        exit();
    }
    public function labreport()
    {
        $this->view('Patint/labreport_view');
        exit();
    }
    public function labreport_registered()
    {
        $this->view('Patient/labreportregistered_view');
        exit();
    }
    public function userdetails($update = Null)
    {
        $this->model($_SESSION["userType"] . '/userinfo_model');
        $this->userinfo_model = new userPatientModel();
        $result = $this->userinfo_model->getUserDetails();
        // print_r($result);
        if($update == 'update'){
        
            // print_r($_FILES["file"]["tmp_name"]);

            // Path to the PDF file

            $fileContents = file_get_contents($_FILES["file"]['tmp_name']);
            $hexString = '0x' . bin2hex($fileContents);

            $result2  = $this->userinfo_model->updateUserDetails($hexString, $fileContents);
            header("location: ./");
        }
        $this->view('Patient/userdetails_view',$result);
        exit();
    }
    
        
        

        // } else {
        //     header("location:" . URLROOT . "/users/login");
        // }
    

    
    public function appointments($make=null,$ShowDoc=null,$bookappo=null,$fixed=null)
    {

        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model('appointment_model');
        $this->appointmodel = new appointment();
        $result = $this->appointmodel->getAppoinmentbyPatient(); 
        if (isset($_GET['doctor']) || isset($_GET['Date'])) {
        if ($_GET['doctor'] != NULL && $_GET['Date'] == NULL){
            $result = $this->appointmodel->getAppoinmentbyPatient($_GET['doctor']);
            $this->view('Patient/appointments_view',$result);
        }
        if ($_GET['Date']){
            $where = $_GET['Date'];
                    $where = DateTime::createFromFormat('Y-m-d', $where);
                    $where = $where->format('m/d/Y');
                    
            $result= $this->appointmodel->getAppoinmentbyDate($where);
            $this->view('Patient/appointments_view',$result);
        }
    }
       
        // $resultUser = $this->appointmodel->getUsernamebyPatient(new Database());
       // print_r($resultUser);
        // $this->view('Patient/appointments_view',$result);
        // $this->view('Patient/dashboard_view',$resultUser);
        if($make!= null&&$ShowDoc== null){
            
            $this->view('patient/makeappointment_view');
            exit();
        }
        if($ShowDoc!= null&& $bookappo==null){
            $result = $this->appointmodel->getDoctors();
            // print_r($result);
             $this->view('patient/Registerd_appointdoctor_view',$result);
            exit();
        }
        if($bookappo != null && $fixed==null){
            $this->view('patient/bookdoc_view_registered');
            exit();
        if($fixed != null){
            $this->view('patient/appointments_view');
        }

        }
        else{
            $result = $this->appointmodel->getAppoinmentbyPatient(); 
        $this->view('Patient/appointments_view',$result);
        // print_r("hello");
        }
        exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }

        

        
     
    }
    public function treatments()
    {
        $this->view('Patient/treatment_view');
        exit();
    }
    public function dashboard($make=null)
    {
        
        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model('appointment_model');
        $this->appointmodel = new appointment();
        $result = $this->appointmodel->getAppoinmentbyPatient(); 
       
        // $resultUser = $this->appointmodel->getUsernamebyPatient(new Database());
       // print_r($resultUser);
        $this->view('Patient/dashboard_view',$result);
        // $this->view('Patient/dashboard_view',$resultUser);
        exit();
        } 
        else {
            header("location:" . URLROOT . "/users/login");
        }
        
        
       
        
    }
    
    // public function registration()
    // {
    //     $this->view('Patient/registration_view');
    //     $this->model('registration_model');
    //     $this->registrationmodel = new registrationmodel(new Database());
    //     if (isset($_POST['submit'])) {

    //         $fullname = $_POST['fullname'];
    //         $password = isset($_POST['password']) ? $_POST['password'] : '';
    //         $registration_date = isset($_POST['registration_date']) ? $_POST['registration_date'] : '';
    //         $email = isset($_POST['email']) ? $_POST['email'] : '';
    //         $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    //         $address = isset($_POST['address']) ? $_POST['address'] : '';
    //         $phonenumber = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
    //         $nic = isset($_POST['nic']) ? $_POST['nic'] : '';
    //         $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    //         date_default_timezone_set("Asia/Colombo");
    //         $registration_date = date("y:m:d:h:i:s");
    //         $date_of_birth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : "";
    //         $this->registrationmodel->loginUser($fullname,md5($password),$registration_date,$date_of_birth,$email,$gender,$address,$phonenumber,$nic,$Username);
    //     }
    //     exit();
    // }
    
    
}
