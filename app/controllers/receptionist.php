<?php

use LDAP\Result;

class receptionist extends Controller
{
    private $registrationmodel;
    private $contactusmodel;
    private $receptionistModel;
    private $appointmodel;
    private $labreceiptModel2;
    private $userinfo_model;
    private $labreceiptModel;
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

    public function userdetails($update = Null)
    {
        $this->model('receptionist/userinfo_model');
        $this->userinfo_model = new UserReceptionistModel();
        $result = $this->userinfo_model->fetchreceptionist();
        // print_r($result);
        if ($update == 'update') {

            // print_r($_FILES["file"]["tmp_name"]);

            // Path to the PDF file

            $fileContents = file_get_contents($_FILES["file"]['tmp_name']);
            $hexString = '0x' . bin2hex($fileContents);

            $result2  = $this->userinfo_model->updateUserDetails($hexString, $fileContents);
            header("location: ./");
        }
        $this->view('receptionist/userdetails_view', $result);
        exit();
    }
    public function appointments($make = null, $more1 = null, $more2 = null, $create = null)
    {
        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model('appointment_model');
            $this->appointmodel = new appointmentModel();
            $result = $this->appointmodel->getAllDoctorsforSession();

            // $resultUser = $this->appointmodel->getUsernamebyPatient(new Database());
            // print_r($resultUser);
            // $this->view('Patient/appointments_view',$result);
            // $this->view('Patient/dashboard_view',$resultUser);
            if ($make == 'more1') {
                $result = $this->appointmodel->getAppoinmentbyDoctors($_GET['doctor']);
                if (isset($_GET['doctor'])) {

                    $result2 = $this->appointmodel->checkSessionbyDoctor($result[0]['Doctor_id']);
                    // print_r([0=>$result,1=>$result2]);


                    $this->view('receptionist/session_date_view', [0 => $result, 1 => $result2]);
                }


                exit();
            }
            if ($make == 'create') {

                $this->view('receptionist/create_session_view');
                exit();
            }
            if ($make == "more3") {
                if (isset($_POST['create']) && isset($_POST['Date'])) {
                    $result = $this->appointmodel->getAppoinmentbyDoctors($_GET['doctor']);
                    // print_r($_POST);
                    $data['date'] = $_POST['Date'];
                    $start_time = $_POST['start_time'];
                    $data['max_appointments'] = $_POST['make'];
                    $endtime = date('H:i:s', strtotime($start_time . ' +1 hour'));
                    $data['start_time'] = date('H:i:s', strtotime($start_time));;
                    $data['end_time'] = $endtime;
                    $data['Doctor_Id'] = $result[0]['Doctor_id'];
                    $this->appointmodel->setTable('session');
                    // print_r($data);
                    // 
                    $result2 = $this->appointmodel->insertData($data);
                    $doctorname = $_GET['doctor'];
                    print_r($result2);
                    // print_r($data);
                    $error = $this->appointmodel->printErrno();
                    if ($error == '1062') {
                        echo "<script>
                    alert(' Session Already Created');
                </script>";
                    } else {
                        echo "<script>
                    alert(' Session Created');
                </script>";
                        header("location:./more1?doctor=" . $doctorname);
                    }
                }
            }
            if ($make == 'more2') {
                if (isset($_GET['doctor']) && isset($_GET['id'])) {
                    $result = $this->appointmodel->getAppoinmentOneDoctorOneSession($_GET['doctor'], $_GET['id']);
                    if (isset($_GET['doctor']) && isset($_GET['id'])) {
                        $result = $this->appointmodel->getAppoinmentOneDoctorOneSession($_GET['doctor'], $_GET['id']);

                        // print_r($result);

                        $this->view('receptionist/session_appointments_view', $result);
                    }

                    exit();
                } else {

                    // print_r($result);
                    $this->view('receptionist/appointment_view', $result);
                    // print_r("hello");
                }
                exit();
            } else {
                header("location:" . URLROOT . "/users/login");
            }
        }
    }
    public function dashboard()
    {
        $this->view('receptionist/dashboard_view');
        exit();
    }
    public function labreports($lab = null)
    {
        if (isset($_SESSION["userType"])) {
            $this->model("receptionist_model");
            $this->receptionistModel = new ReceptionistModel2();
            $receptionist = $this->receptionistModel->getReportData();
            // print_r($receptionist);
            if ($lab == 'update') {
                $this->view('receptionist/update_receipt');
                exit();

                exit();
            } else {
                if ($lab != null) {
                    $this->model('LabAssistantModel');
                    $this->labreceiptModel2 = new LabAssistantModel();
                    $labdetails = $this->labreceiptModel2->fetchReportData($lab);

                    $this->view('receptionist/labdetails_view', $labdetails);
                    exit();
                } else {
                    $receptionist = $this->receptionistModel->getReportData();
                    $this->view('receptionist/labreport_view', $receptionist);
                }
            }
            exit();
        }
    }
    public function labreceipt()
    {
        if (!isset($_POST['labReportNumber'])) {
            $this->view('receptionist/lab_receipt');
        } else {
            $this->model('LabAssistantModel'); //call the model
            $this->labreceiptModel = new LabAssistantModel();
            $this->labreceiptModel->setTable('user_db');
            $where = "Username = '" . $_POST["Username"] . "'";
            $user = $this->labreceiptModel->fetchData($where);
            //    print_r($user);
            $data = [];
            $data['patient_id'] = $user[0]['User_Id'];
            $data['refno'] = $_POST['labReportNumber'];
            $data['patientName'] = $_POST['patientName'] ?? "test";
            $data['passcode'] = $_POST['passcode'];
            $data['contactNo'] = $_POST['contactNo'] ?? "0777123456";
            $data['age'] = $_POST['age'];
            $data['testname'] = $_POST['testname'];

            $labdetails = $this->labreceiptModel->sendLabreceiptDetails($data);
            header("Location: " . URLROOT . "/Receptionist/labreports");
        }
        exit();
    }
}
