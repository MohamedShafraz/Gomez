<?php

use LDAP\Result;

class patient extends Controller
{
    private $registrationmodel;
    private $contactusmodel;
    private $appointmodel;
    public function __construct()
    {
        session_start();
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
    public function userdetails()
    {
        $this->view('Patient/userdetails_view');
        exit();
    }
    public function appointments()
    {
        $this->view('Patient/appointments_view');
        exit();
    }
    public function treatments()
    {
        $this->view('Patient/treatment_view');
        exit();
    }
    public function dashboard()
    {
        
        
        $this->model('appointment_model');
        $this->appointmodel = new appointment();
        $result = $this->appointmodel->getAppoinmentbyPatient(new Database()); 
       
        // $resultUser = $this->appointmodel->getUsernamebyPatient(new Database());
       // print_r($resultUser);
        $this->view('Patient/dashboard_view',$result);
        // $this->view('Patient/dashboard_view',$resultUser);
        exit();
        
    }
    public function contactus()
    {
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
    public function registration()
    {
        $this->view('Patient/registration_view');
        $this->model('registration_model');
        $this->registrationmodel = new registrationmodel(new Database());
        if (isset($_POST['submit'])) {

            $patient_name = $_POST['fullname'];
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $registration_date = isset($_POST['registration_date']) ? $_POST['registration_date'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
            $phone = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
            $nic = isset($_POST['nic']) ? $_POST['nic'] : '';
            date_default_timezone_set("Asia/Colombo");
            $registration_date = date("y:m:d:h:i:s");
            $date_of_birth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : "";
            $this->registrationmodel->loginUser($patient_name, md5($password), $registration_date, $date_of_birth, $email, $gender, $address, $phone, $nic);
        }
        exit();
    }
    public function appointdoctor()  {
        $this->view('Patient/appointdoctordetail_view');
        exit();
    }
    public function docdetail() {
        $this->view('Patient/bookdoc_view');
        exit();
        
    }
    
}
