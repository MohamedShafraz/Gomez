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
            $userModel = new Database();
            $where = "User_id = " . $uid[1];
            $userModel->setTable(User);
            $userdetails = $userModel->fetchData($where);
            // print_r($userdetails);
            // print_r($_SESSION['uid']);
            // print_r($detail);
            $this->view('Admin' . "/patient_details_view", $detail);
            exit();
        } else if ($id == 'create') {
            $Model->setTable(User);
            $UsersList = $Model->fetchData(1);
            $UsersListdata = [];
            foreach ($UsersList as $key => $value) {
                if ($key == "Username") {
                    array_push($UsersListdata, $value);
                }
            }
            $this->view("Admin/create_" . $user . "_view", $UsersListdata);
            exit();
        } else if ($id == 'created') {

            $users = [];
            $users["Username"] = $_POST["Username"];
            $users['Email'] = $_POST["Email"];
            $users['Password'] = md5($_POST["Password"]);
            $Model->setTable(User);
            $Model->insertData($users);
            $data = [];
            $data['ID'] = $Model->printId();
            $data["phonenumber"] = $_POST["Phonenumber"];
            $data["fullname"] = $_POST["Fullname"];
            $data["gender"] = $_POST["Gender"];
            $data["age"] = $_POST['Age'];
            $data["NIC"] = $_POST['NIC'];
            $Model->setTable($user . "s");
            $result1 = $Model->insertData($data);
            print_r("<script>alert('" . $result1 . "')</script>");
            header("Location:" . URLROOT . "/" . 'Admin' . "/manageuser/" . $user);
            exit();
        } else {
            $details = $Model->getUsersDetails();
            $Model->printError();
            $this->view('Admin' . "/" . $user . "_view", $details);
            exit();
        }
    }
    public function index()
    {
        // session_start();
        if (isset($_SESSION["userType"]) == "admin") {
            // Load the DashboardModel
            $this->model('Admin' . '/dashboard_model');
            $dashboardModel = new DashboardModel();
            // Call the method from the DashboardModel
            $users = $dashboardModel->getUserCounts();

            // Pass the data to the view
            $userCounts = $dashboardModel->getUserCounts();
            $this->view('Admin' . "/manageuser_view");
            exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }
    public function patient($id = null)
    {
        // session_start();
        $this->model('Admin' . "/patient_model");
        $patientModel = new PatientModel();


        // $patientsDetails = $patientModel->getUsersDetails();
        // $patientDetails  = $patientModel->getUserDetails();
        $this->getUserPage($id, $patientModel, "patient");
    }


    public function doctor($id = null)
    {
        // session_start();
        $this->model('Admin' . "/doctor_model");
        $doctorModel = new DoctorModel();
        // $DoctorsDetails = $doctorModel->getUsersDetails();
        // $DoctorDetails = $doctorModel->getUserDetails();
        $this->getUserPage($id, $doctorModel, "doctor");
    }
    public function receptionist($id = null)
    {
        // session_start();
        $this->model('Admin' . "/receptionist_model");
        $receptionistModel  = new ReceptionistModel();
        $this->getUserPage($id, $receptionistModel, "receptionist");
        exit();
    }
    public function labAssistant($id = null)
    {
        // session_start();
        $this->model('Admin' . "/lab_assistant_model");
        $labAssitantModel = new LabAssistantModel();
        $this->getUserPage($id, $labAssitantModel, "lab_assistant");
        exit();
    }
    public function lab_Assistant($id = null)
    {
        // session_start();
        $this->model('Admin' . "/lab_assistant_model");
        $labAssitantModel = new LabAssistantModel();
        $this->getUserPage($id, $labAssitantModel, "lab_assistant");
        exit();
    }
}
