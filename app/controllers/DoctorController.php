<?php

class DoctorController extends Controller {
    private $doctorModel;
    public function index() {
        if(!isset($_SESSION)){
            session_start();}
            
        $this->view('Doctor/dashboard_view');
    }

    public function ViewAppointment() {
        $this->view('Doctor/appointment_view');
    }
    

    public function ViewPrescription() {
        $this->view('Doctor/prescription_view');
    }

    public function ViewReminder() {
        $this->view('Doctor/reminder_view');
    }

    public function ViewProfile(){
        if(!isset($_SESSION)){
            session_start();}
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor"){

            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
            $this->view('Doctor/profile_view', ['doctor' => $doctor[0] , 'user' => $user]);
            
        }
        else {
            header("Location: ".URLROOT."/Users/login"); 
            exit(); 
}
}
        public function EditProfileView(){
        $this->view('Doctor/editprofile_view');
        }






























































































}
     















?>