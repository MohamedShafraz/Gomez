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
      
        $this->view("Admin/patient_view");
    }
    public function doctor(){
        session_start();
        $this->view("Admin/doctor_view");
    }
    public function receptionist(){
        session_start();
        $this->view("Admin/receptionist_view");
    }
    public function labAssistant(){
        session_start();
        $this->view("Admin/lab_assistant_view");
    }
}
?>