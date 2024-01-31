<?php
class manageuser extends Controller{
    
    public function index(){
        session_start();

        if (isset($_SESSION["userType"])=="admin") {
            // Load the DashboardModel
            $this->model('dashboard_model');
            $dashboardModel = new DashboardModel();
            // Call the method from the DashboardModel
            $users = $dashboardModel->getUserCounts();

            // Pass the data to the view
            $userCounts = $dashboardModel->getUserCounts();
            $this->view("Admin/manageuser_view");
        }
        else{
            header("location:" . URLROOT . "/users/login");
        }
    }
    public function patient(){
        session_start();
        $this->model("Admin/patient_model");
        $patientModel = new PatientModel();
        $patientDetails = $patientModel->getUserDetails();
        $this->view("Admin/patient_view",$patientDetails);
    }
    public function doctor(){
        session_start();
        $this->model("Admin/doctor_model");
        $patientModel = new DoctorModel();
        $DoctorDetails = $patientModel->getUserDetails();
        $this->view("Admin/doctor_view",$DoctorDetails);
    }
    public function receptionist(){
        session_start();
        $this->model("Admin/receptionist_model");
        $receptionistModel  = new ReceptionistModel();
        $receptionistAssistantDetails = $receptionistModel->getUserDetails();
        $this->view("Admin/receptionist_view",$receptionistAssistantDetails);
    }
    public function labAssistant(){
        session_start();
        $this->model("Admin/lab_assistant_model");
        $labAssitantModel = new LabAssistantModel();
        $labAssistantDetails = $labAssitantModel->getUserDetails();
        $this->view("Admin/lab_assistant_view",$labAssistantDetails);
    }
}
?>