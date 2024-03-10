<?php
class manageuser extends Controller
{
    public function getUserPage($id, $detail, $user)
    {

        if ($id != null) {
            $uid = explode('=', $id);
            $_SESSION['uid'] = $uid[1];
            $this->view($_SESSION['userType'] . "/" . $user . "_details_view", $detail[$_SESSION['uid']]);
            exit();
        } else {
            $this->view($_SESSION['userType'] . "/" . $user . "_view", $detail);
            exit();
        }
    }
    public function index()
    {
        session_start();
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
        session_start();
        $this->model($_SESSION['userType'] . "/patient_model");

        $patientModel = new PatientModel();
        $patientDetails = $patientModel->getUserDetails();
        // if ($id != null) {
        //     $uid = explode('=', $id);;
        //     $_SESSION['uid'] = $uid[1];
        //     $this->view($_SESSION['userType'] . "/patient_details_view", $patientDetails[$_SESSION['uid']]);
        //     exit();
        // } else {
        //     $this->view($_SESSION['userType'] . "/patient_view", $patientDetails);
        //     exit();
        // }
        $this->getUserPage($id, $patientDetails, "patient");
    }


    public function doctor($id = null)
    {
        session_start();
        $this->model($_SESSION['userType'] . "/doctor_model");
        $patientModel = new DoctorModel();
        $DoctorDetails = $patientModel->getUserDetails();
        if ($id != null) {
            $uid =
                $this->view($_SESSION['userType'] . "/doctor_view", $DoctorDetails);
        }
        exit();
    }
    public function receptionist()
    {
        session_start();
        $this->model($_SESSION['userType'] . "/receptionist_model");
        $receptionistModel  = new ReceptionistModel();
        $receptionistAssistantDetails = $receptionistModel->getUserDetails();
        $this->view($_SESSION['userType'] . "/receptionist_view", $receptionistAssistantDetails);
        exit();
    }
    public function labAssistant()
    {
        session_start();
        $this->model($_SESSION['userType'] . "/lab_assistant_model");
        $labAssitantModel = new LabAssistantModel();
        $labAssistantDetails = $labAssitantModel->getUserDetails();
        $this->view($_SESSION['userType'] . "/lab_assistant_view", $labAssistantDetails);
        exit();
    }
}
