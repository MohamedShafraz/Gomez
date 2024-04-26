<?php

use LDAP\Result;

class patient extends Controller
{
    private $userinfo_model;
    private $contactusmodel;
    private $labreport_model;
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

        $this->view('Patient/labreport_view');
        exit();
    }
    public function labreport_registered($filename = Null, $file = Null)
    {
        $this->model('Patient/labreport_model');
        $this->labreport_model = new labReportModel();
        $result = $this->labreport_model->getLabReportDetails();
        if(isset($_GET['testname'])){
            $result = $this->labreport_model->getLabReportDetails($_GET['testname']);
        }
        if ($filename == 'view') {

            $pdf = APPROOT . '/views/uploadPDF/1/' . $file . '.pdf';
            header('Content-type: application/pdf');
            $file = fopen($pdf, 'rb');
            fpassthru($file);
            fclose($file);
            // fopen(APPROOT.'/views/uploadPDF/1/'.$filename,'r');
        } else if ($filename != Null) {


            header('Content-type:application/pdf');
            header('Content-Disposition:inline; filename="' . APPROOT . '/views/uploadPDF/1/' . $filename . '"');
            header('Content-Transfer-Encoding:binary');
            header('Accept-Ranges:bytes');
            @readfile(APPROOT . '/views/uploadPDF/1/' . $filename);
        } else {
            $this->view('Patient/labreportregistered_view', $result);
        }
        exit();
    }
    public function userdetails($update = Null)
    {
        $this->model($_SESSION["userType"] . '/userinfo_model');
        $this->userinfo_model = new userPatientModel();
        $result = $this->userinfo_model->fetchPatient();
        // print_r($result);
        if ($update == 'update') {

            // print_r($_FILES["file"]["tmp_name"]);

            // Path to the PDF file

            $fileContents = file_get_contents($_FILES["file"]['tmp_name']);
            $hexString = '0x' . bin2hex($fileContents);

            $result2  = $this->userinfo_model->updateUserDetails($hexString, $fileContents);
            header("location: ./");
        }
        // print_r($result);
        $this->view('Patient/userdetails_view', $result);
        exit();
    }







    public function appointments($make = null, $ShowDoc = null, $bookappo = null, $fixed = null, $more = null)
    {

        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model('appointment_model');
            $this->appointmodel = new appointment();
            $result = $this->appointmodel->getAppoinmentbyPatient();
            if ($ShowDoc == null && (isset($_GET['doctor']) || isset($_GET['Date']))) {
                if ($_GET['doctor'] != NULL && $_GET['Date'] == NULL) {
                    $result = $this->appointmodel->getAppoinmentbyPatient($_GET['doctor']);
                    $this->view('Patient/appointments_view', $result);
                }
                else if ($_GET['Date']) {
                    $where = $_GET['Date'];
                    $where = DateTime::createFromFormat('Y-m-d', $where);
                    $where = $where->format('Y-m-d');

                    $result = $this->appointmodel->getAppoinmentbyDate($where);
                    $this->view('Patient/appointments_view', $result);
                }
                
                // exit();
                

            }
            

            if ($make == 'more') {
                $this->view('patient/appointment_more_view');
                exit();
            }
            if ($make == 'make') {
                

                if ($ShowDoc == 'ShowDoc') {
                    $result = $this->appointmodel->getDoctors();
                    if (isset($_GET['doctor']) || isset($_GET['Date']) || isset($_GET['specialization'])) {
                        
                        // if ($_GET['doctor']) {
                            
                        //     $result = $this->appointmodel->getAllAppoinmentbyDoctor($_GET['doctor']);
                            
                        // }
                        if ($_GET['Date']) {
                            // $where = $_GET['Date'];
                            $_GET['Date'] = DateTime::createFromFormat('Y-m-d', $_GET['Date']);
                            $_GET['Date'] = $_GET['Date']->format('Y-m-d');
        
                            // $result = $this->appointmodel->getAllAppoinmentbyDate($where);
                            
                        }
                        // if ($_GET['specialization']) {
                        //     $result = $this->appointmodel->getAllAppoinmentbySpecialization($_GET['specialization']);
                        //     // $this->view('Patient/appointments_view', $result);
                        // }
                        
                        // exit();
                        $result = $this->appointmodel->getAllAppoinmentbyDoctor($_GET['doctor'],$_GET['specialization'],$_GET['Date']);
                        
        
                    }
                    if ($bookappo == 'bookappo') {
                        
        
                        if ($fixed == 'fixed') {
                            $this->view('patient/appointments_view');
                            
                        }
                        else{
                            
                            $this->view('patient/bookdoc_view_registered');
                        }
        
                    }
                    else{
                    // print_r(sizeof($result));
                        $this->view('patient/Registerd_appointdoctor_view', $result);
                    }
                } else {
                    $this->view('patient/makeappointment_view');
                    
                }
                exit();
            }

            if ($bookappo != null && $fixed == null) {
                $this->view('patient/bookdoc_view_registered');
                exit();


                if ($fixed != null) {
                    $this->view('patient/appointments_view');
                    exit();
                }


            } else {
                $result = $this->appointmodel->getAppoinmentbyPatient();
                // print_r($result);
                $this->view('Patient/appointments_view', $result);
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
    public function dashboard($make = null)
    {

        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model('appointment_model');
            $this->appointmodel = new appointment();
            $result = $this->appointmodel->getAppoinmentbyPatient();

            // $resultUser = $this->appointmodel->getUsernamebyPatient(new Database());
            // print_r($resultUser);
            $this->view('Patient/dashboard_view', $result);
            // $this->view('Patient/dashboard_view',$resultUser);
            exit();
        } else {
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
