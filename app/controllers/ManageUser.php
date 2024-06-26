<?php
class manageuser extends Controller
{
    public function __construct()
    {
        session_start();
        if (isset($_SESSION['userType']) == null) {
            header("location:" . URLROOT . "/users/login");
        }
    }
    public function getUserPage($id, $Model, $user)
    {

        if ($id != null && $id != 'create' && $id != 'created') {
            $uid = explode('=', $id);

            $detail = $Model->getUserDetails($uid[1]);

            // print_r($_SESSION['uid']);
            // print_r($detail);
            $this->view($_SESSION['userType'] . "/" . $user . "_details_view", $detail);
            exit();
        } else if ($id == 'create') {
            $this->view($_SESSION['userType'] . "/create_" . $user . "_view",);
            exit();
        } else if ($id == 'created') {

            $users = [];
            $users["Username"] = $_POST["Username"];

            $users['email'] = $_POST["Email"];
            $users['password'] = md5($_POST["Password"]);
            $Model->setTable(User);
            $Model->insertData($users);
            $data = [];
            $data['ID'] = $Model->printId();
            $data["phonenumber"] = $_POST["Phonenumber"];
            $data["name"] = $_POST["Fullname"];
            $data["gender"] = $_POST["Gender"];
            $data["age"] = $_POST['Age'];
            $Model->setTable($user . "s");
            $result1 = $Model->insertData($data);


            print_r("<script>alert('" . $result1 . "')</script>");
            header("Location:" . URLROOT . "/" . $_SESSION['userType'] . "/manageuser/patient");
            exit();
        } else {
            $details = $Model->getUsersDetails();
            $Model->printError();
            $this->view($_SESSION['userType'] . "/" . $user . "_view", $details);
            exit();
        }
    }
    public function index()
    {
        // session_start();
        if (isset($_SESSION["userType"]) == "admin") {
            // Load the DashboardModel
            $this->model('dashboard_model');
            $dashboardModel = new DashboardModel();
            // Call the method from the DashboardModel
            $users = $dashboardModel->getUserCounts();

            // Pass the data to the view
            $userCounts = $dashboardModel->getUserCounts();
            $this->view($_SESSION['userType'] . "/manageuser_view");
            exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }
    public function patient($id = null)
    {
        // session_start();
        $this->model($_SESSION['userType'] . "/patient_model");
        $patientModel = new PatientModel();
        // $patientsDetails = $patientModel->getUsersDetails();
        // $patientDetails  = $patientModel->getUserDetails();
        $this->getUserPage($id, $patientModel, "patient");
    }


    public function doctor($id = null)
    {
        // session_start();
        $this->model($_SESSION['userType'] . "/doctor_model");
        $doctorModel = new DoctorModel();
        // $DoctorsDetails = $doctorModel->getUsersDetails();
        // $DoctorDetails = $doctorModel->getUserDetails();
        $this->getUserPage($id, $doctorModel, "doctor");
    }
    public function receptionist()
    {
        // session_start();
        $this->model($_SESSION['userType'] . "/receptionist_model");
        $receptionistModel  = new ReceptionistModel();
        $receptionistAssistantDetails = $receptionistModel->getUserDetails();
        $this->view($_SESSION['userType'] . "/receptionist_view", $receptionistAssistantDetails);
        exit();
    }
    public function labAssistant()
    {
        // session_start();
        $this->model($_SESSION['userType'] . "/lab_assistant_model");
        $labAssitantModel = new LabAssistantModel();
        $labAssistantDetails = $labAssitantModel->getUserDetails();
        $this->view($_SESSION['userType'] . "/lab_assistant_view", $labAssistantDetails);
        exit();
    }
}
