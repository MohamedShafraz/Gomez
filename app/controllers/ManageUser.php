<?php
class manageuser extends Controller
{
    public function __construct()
    {
        if (session_status() != 2) {
            session_start();
        }
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
            $this->view($_SESSION['userType'] . "/" . $user . "_details_view", $detail);
            exit();
        } else if ($id == 'create') {
            $Model->setTable(User);
            $UsersList = $Model->fetchData("`usertype` = 'Patient'");
            $UsersListdata = [];
            foreach ($UsersList as $key => $value) {



                array_push($UsersListdata, $value["Username"]);
            }

            // print_r($UsersListdata);
            $this->view($_SESSION['userType'] . "/create_" . $user . "_view", $UsersListdata);
            exit();
        } else if ($id == 'created') {

            $users = [];
            print_r($_POST);
            $users["Username"] = $_POST["User_name"];
            $users['Email'] = $_POST["Email"];
            $users['Password'] = md5($_POST["Password"]);
            $Model->setTable(User);
            $Model->insertData($users);
            $data = [];
            $data['ID'] = $Model->printId();
            $data["phonenumber"] = $_POST["Phone_number"];
            $data["fullname"] = $_POST["Full_name"];
            $data["gender"] = $_POST["Gender"];
            $data["date_of_birth"] = $_POST['DOB'];
            $data["NIC"] = $_POST['NIC'] ?? "";
            $Model->setTable($user . "s");
            $result1 = $Model->insertData($data);
            print_r("<script>alert('" . $result1 . "')</script>");
            header("Location:" . URLROOT . "/" . $_SESSION['userType'] . "/manageuser/" . $user);
            exit();
        } else {
            try {
                $details = $Model->getUsersDetails();
            } catch (\Throwable $th) {
                $details = [];
            }

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
            $this->model($_SESSION['userType'] . '/dashboard_model');
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
        $patientDetails = $patientModel->getUsersDetails();
        // $this->view($_SESSION['userType'] . "/patient_view", $patientDetails);
        // $this->view($_SESSION['userType'] . "/patient_view");
        // $patientsDetails = $patientModel->getUsersDetails();
        // $patientDetails  = $patientModel->getUserDetails();
        $this->getUserPage($id, $patientModel, "patient");
    }
    // public function checkPatientUserName()
    // {
    //     // $username = $_POST;
    //     $json = file_get_contents('php://input');

    //     // Decode the JSON data into an associative array
    //     $data = json_decode($json, true);
    //     $username = $data['username'] ?? '';

    //     // Load the patient model based on the user type in session
    //     $this->model($_SESSION['userType'] . "/patient_model");
    //     $patientModel = new PatientModel();
    //     $patientModel->setTable(User); // Fix the argument to 'User' as a string

    //     // // Fetch all users with user type 'Patient'
    //     $UsersList = $patientModel->fetchData("`usertype` = 'Patient'");

    //     // // Extract usernames from the result
    //     $UsersListdata = [];
    //     foreach ($UsersList as $user) {
    //         array_push($UsersListdata, $user["Username"]);
    //     }

    //     // // Get the username from the POST request (sent by fetch)
    //     // $json = file_get_contents('php://input'); // Fetch the raw POST data
    //     // $data = json_decode($json, true); // Decode the JSON input
    //     // $username = $data['username'] ?? ""; // Extract the 'username' field
    //     // print_r($username);
    //     // // Check if the username exists in the fetched user data
    //     if (in_array($username, $UsersListdata)) {
    //         // Return a JSON response indicating that the username exists
    //         echo json_encode(['exists' => true]);
    //     } else {
    //         // Return a JSON response indicating that the username does not exist
    //         echo json_encode(['exists' => false]);
    //     }
    //     exit();
    // }
    public function checkPatientUserName()
    {
        // $username = $_POST;
        $json = file_get_contents('php://input');

        // Decode the JSON data into an associative array
        $data = json_decode($json, true);
        $username = $data['username'] ?? '';

        // Load the patient model based on the user type in session
        $this->model($_SESSION['userType'] . "/patient_model");
        $patientModel = new PatientModel();
        $patientModel->setTable(User); // Fix the argument to 'User' as a string

        // // Fetch all users with user type 'Patient'
        $UsersList = $patientModel->fetchData("`usertype` = 'Patient'");

        // // Extract usernames from the result
        $UsersListdata = [];
        foreach ($UsersList as $user) {
            array_push($UsersListdata, $user["Username"]);
        }

        // // Get the username from the POST request (sent by fetch)
        // $json = file_get_contents('php://input'); // Fetch the raw POST data
        // $data = json_decode($json, true); // Decode the JSON input
        // $username = $data['username'] ?? ""; // Extract the 'username' field
        // print_r($username);
        // // Check if the username exists in the fetched user data
        if (in_array($username, $UsersListdata)) {
            // Return a JSON response indicating that the username exists
            echo json_encode(['exists' => true]);
        } else {
            // Return a JSON response indicating that the username does not exist
            echo json_encode(['exists' => false]);
        }
        exit();
    }
    public function updatePatientDetails($id)
    {
        $this->model($_SESSION['userType'] . "/patient_model");
        $patientModel = new PatientModel();
        $patientModel->setTable(Patients);
        $patientModel->updateUserDetails(explode('=', $id)[1], $_POST);
        // print_r($UsersList);
    }
    public function updateDoctorDetails($id)
    {

        $this->model($_SESSION['userType'] . "/doctor_model");
        $patientModel = new DoctorModel();
        $patientModel->setTable(Doctors);
        print_r($_POST);
        $UsersList = $patientModel->updateUserDetails($id, $_POST);
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
    public function receptionist($id = null)
    {
        // session_start();
        $this->model($_SESSION['userType'] . "/receptionist_model");
        $receptionistModel  = new ReceptionistModel();
        $this->getUserPage($id, $receptionistModel, "receptionist");
        exit();
    }
    public function labAssistant($id = null)
    {
        // session_start();
        $this->model($_SESSION['userType'] . "/lab_assistant_model");
        $labAssitantModel = new LabAssistantModel();
        $this->getUserPage($id, $labAssitantModel, "lab_assistant");
        exit();
    }
    public function lab_Assistant($id = null)
    {
        // session_start();
        $this->model($_SESSION['userType'] . "/lab_assistant_model");
        $labAssitantModel = new LabAssistantModel();
        $this->getUserPage($id, $labAssitantModel, "lab_assistant");
        exit();
    }
}
