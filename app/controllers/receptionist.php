<?php

use LDAP\Result;

class receptionist extends Controller
{
    private $registrationmodel;
    private $userinfo_model;
    private $userPatientModel;
    private $contactusmodel;
    private $appointmodel;
    private $receptionistModel;
    private $labreceiptModel;
    private $labreceiptModel2;
    private $labtestModel;
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION["userType"])) {
            header("location:" . URLROOT . "/users/login");
        }
    }
    public function index()
    {
        header('Location: ' . URLROOT . '/receptionist/Dashboard');
        exit();
    }

    public function userdetails($update = Null)
    {
        $this->model($_SESSION["userType"] . '/userinfo_model');
        $this->userinfo_model = new userReceptionistModel();
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
                    $data['max_appointments'] = $_POST['max_appointments'];
                    $endtime = date('H:i:s', strtotime($start_time . ' +1 hour'));
                    $data['start_time'] = date('H:i:s', strtotime($start_time));;
                    $data['end_time'] = $endtime;
                    $data['Doctor_Id'] = $result[0]['Doctor_id'];
                    $this->appointmodel->setTable('session');
                    // print_r($data);
                    // 
                    $result2 = $this->appointmodel->insertData($data);
                    $doctorname = $_GET['doctor'];
                    // print_r($data);
                    $error = $this->appointmodel->printErrno();
                    if ($error == '1062') {
                        echo "<script>
                    alert(' Session Already Created');
                </script>";
                        exit();
                    } else {
                        echo "<script>
                    alert(' Session Created');
                    history.go(-2);
                </script>";
                        exit();
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
                $this->view("receptionist/appointment_view", $result);
            }
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }
    public function dashboard()
    {
        $this->view('receptionist/dashboard_view');
        exit();
    }
    public function labreports()
    {
        if (isset($_SESSION["userType"])) {
            $this->model("receptionist_model");
            $this->receptionistModel = new ReceptionistModel();
            $reports = $this->receptionistModel->getReportData();


            foreach ($reports as &$report) {
                $patient = $this->receptionistModel->getPatientbyID($report["patient_id"]);

                // Validate that $patient is not empty and has an element at index 0
                if (isset($patient[0])) {
                    $report["patientName"] = $patient[0]["fullname"];
                    $report["contactNo"] = $patient[0]["phonenumber"];
                    $report["age"] = $patient[0]["age"];
                } else {
                    // Handle the case where the patient data is missing
                    $report["patientName"] = "Unknown";
                    $report["contactNo"] = "Not available";
                    $report["age"] = "N/A";
                    error_log("Patient data missing for ID: " . $report["patient_id"]);
                }
            }


            $this->view('receptionist/labreport_view', $reports);

            exit();
        }
    }

    public function createreciept()
    {
        $this->model('receptionist_model');
        $this->labtestModel = new ReceptionistModel(new Database());

        $data = [];
        $test = [];
        $data['refno'] = $_POST['labReportNumber'];
        $data['passcode'] = $_POST['passcode'];
        $data['testname'] = $_POST['testname'];
        $data['patient_id'] = $_POST['patient_id'];
        $data['status'] = 'Completed';
        $test['test_id'] = $_POST['test_id'];
        $data['type'] = 'Internal';
        $data['prescription_id'] = $_POST['prescription_id'];

        $this->labtestModel->setTable('report');
        $this->labtestModel->insertData($data);
        $this->labtestModel->updateTestDataStatus($test['test_id'], 'Completed');
        header("Location: " . URLROOT . "/Receptionist/labreports");
        exit();
    }



    public function labdetails($refno)
    {
        $this->model("receptionist_model");
        $this->receptionistModel = new ReceptionistModel();

        $report = $this->receptionistModel->getReportbyID($refno);
        $patient = $this->receptionistModel->getPatientbyID($report[0]["patient_id"]);
        $report[0]["patientName"] = $patient[0]["fullname"];
        $report[0]["contactNo"] = $patient[0]["phonenumber"];
        $report[0]["age"] = $patient[0]["age"];
        $report[0]["prescription_id"] = $report[0]["prescription_id"];

        $this->view('receptionist/labdetails_view', $report);
        exit();
    }

    public function labreceipt()
    {
        if (!isset($_POST['labReportNumber'])) {
            $this->model('receptionist_model');
            $this->labtestModel = new ReceptionistModel(new Database());
            $labtest = $this->labtestModel->getTestNames();
            $patient = $this->labtestModel->getPatientNames();

            $refno = $this->labtestModel->getlastref();
            $this->view('receptionist/lab_receipt', ['labtest' => $labtest, 'refno' => $refno, 'patient' => $patient]);
        } else {
            $this->model('LabAssistantModel'); //call the model
            $this->labreceiptModel = new LabAssistantModel();


            $this->labreceiptModel->setTable('report');
            $where = 1;
            $user1 = $this->labreceiptModel->fetchData($where);

            $data = [];


            $data['refno'] = $_POST['labReportNumber'];
            $data['patientName'] = $_POST['patientName'];
            $data['passcode'] = $_POST['passcode'];
            $data['contactNo'] = $_POST['contactNo'];
            $data['age'] = $_POST['age'];
            $data['testname'] = $_POST['testname'];

            $labdetails = $this->labreceiptModel->sendLabreceiptDetails($data);
            header("Location: " . URLROOT . "/Receptionist/labreports");
        }
        exit();
    }

    public function alltests()
    {
        $this->model('receptionist_model');
        $this->labreceiptModel2 = new ReceptionistModel();
        $reports = $this->labreceiptModel2->getAlltestdata();
        foreach ($reports as &$report) {
            $prescription = $this->labreceiptModel2->getPrescriptionDataByUniqueID($report["unique_id"]);

            $report["prescriptionnumber"] = $prescription[0]["prescriptionnumber"];
        }
        $this->view('receptionist/alltest', ["reports" => $reports]);
        exit();
    }

    public function createlabreciept($unique_id, $test_name, $test_id)
    {
        $this->model('receptionist_model');
        $this->labtestModel = new ReceptionistModel(new Database());

        $prescription = $this->labtestModel->getPrescriptionDataByUniqueID($unique_id);
        $patient = $this->labtestModel->getPatientbyID($prescription[0]["patientid"]);
        $patients = $this->labtestModel->getPatientNames();

        $data = [];
        $data["test_id"] = $test_id;
        $data['refno'] = $this->labtestModel->getlastref();
        $data['patientName'] = $patient[0]["fullname"];
        $data['contactNo'] = $patient[0]["phonenumber"];
        $data['age'] = $patient[0]["age"];
        $data['testname'] = $test_name;
        $data['patient_id'] = $patient[0]["ID"];
        $data['prescription_id'] = $prescription[0]["prescriptionnumber"];

        $this->view('receptionist/lab_receipt', ['data' => $data, 'patients' => $patients]);
        exit();
    }

    public function externalcreatelabreciept()
    {
        $this->model('receptionist_model');
        $this->labtestModel = new ReceptionistModel(new Database());
        $patients = $this->labtestModel->getPatientNames();
        $tests = $this->labtestModel->getTestNames();


        $data['refno'] = $this->labtestModel->getlastref();

        $this->view('receptionist/external_lab_receipt', ['data' => $data, 'patients' => $patients, 'tests' => $tests]);
        exit();
    }

    public function createrecieptexternal()
    {
        $this->model('receptionist_model');
        $this->labtestModel = new ReceptionistModel(new Database());

        if ($_POST['register'] == 'Registered') {
            $patientData = explode('|', $_POST['patientData']);
            $patientID = $patientData[0];
            $patientName = $patientData[1];

            $data = [];
            $data['refno'] = $_POST['labReportNumber'];
            $data['passcode'] = $_POST['passcode'];
            $data['testname'] = $_POST['testname'];
            $data['patient_id'] = $patientID;
            $data['status'] = 'Completed';
            $data['type'] = 'External';
            $data['patientName'] = $patientName;

            // instert data
            $this->labtestModel->setTable('report');
            $this->labtestModel->insertData($data);
            header("Location: " . URLROOT . "/Receptionist/labreports");
        } else {
            // get last patient id + 1 for new patient
            $patientID = $this->labtestModel->getlastinsertedid() + 1;
            $data = [];
            $patient = [];
            $data['refno'] = $_POST['labReportNumber'];
            $data['passcode'] = $_POST['passcode'];
            $data['testname'] = $_POST['testname'];
            $data['status'] = 'Completed';
            $data['type'] = 'External';
            $data['prescription_id'] = -1;

            $patient['phonenumber'] = $_POST['contactNo'];
            $patient['fullname'] = $_POST['patientName'];
            $patient['age'] = $_POST['age'];
            $patient['ID'] = $patientID;
            $patient['registration_date'] = date('Y-m-d H:i:s');
            $patient['gender'] = $_POST['gender'];
            $patient['type'] = '"Unregister"';

            // insert patient data
            $this->labtestModel->setTable('patients');
            $this->labtestModel->insertData($patient);

            // insert report data
            $data['patient_id'] = $patientID;
            $this->labtestModel->setTable('report');
            $this->labtestModel->insertData($data);
            header("Location: " . URLROOT . "/Receptionist/labreports");
        }



        exit();
    }

    public function logout()
    {
        session_destroy();
        header("location:" . URLROOT . "/users/login");
        exit();
    }
}
