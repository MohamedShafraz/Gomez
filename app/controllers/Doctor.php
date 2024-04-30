<?php

class Doctor extends Controller
{
    private $doctorModel;
    public function index()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];

        if ($user["usertype"] == "Doctor") {
           
            header("Location: " . URLROOT . "/Doctor/dashboard");
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function dashboard(){
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];

        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            
            $doctor = $this->doctorModel->getDoctor($user["User_Id"]);
            $sessions = $this->doctorModel->getSessionsToday($doctor[0]['Doctor_id']);

            $appointments = [];
            $patients = [];

            foreach ($sessions as $session) {
                $appointment = $this->doctorModel->getAppointmentbySession($session['session_id']);
                $appointments = array_merge($appointments, $appointment);
            }

            foreach ($appointments as $appointment) {
                $patient = $this->doctorModel->getPatientbyPatiend($appointment['Patient_Id']);
                $patients = array_merge($patients, $patient);
            }

            $nexttwosessions = array_slice($sessions, 0, 2);

            $this->view('Doctor/dashboard_view', ['appointments' => $appointments, 'patients' => $patients, 'sessions' => $sessions, 'nexttwosessions' => $nexttwosessions]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function appointments($message=null)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());

            $doctor = $this->doctorModel->getDoctor($user["User_Id"]);
            $sessions = $this->doctorModel->getSessionsToday($doctor[0]['Doctor_id']);

            if($message != null){
                $message = "Prescription Added Successfully";
            }

            $this->view('Doctor/appointment_view', ['sessions' => $sessions, 'message' => $message]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function ShowPatientsAllocatedTimeSlot($sessionid){
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            
            $appointments = $this->doctorModel->getAppointmentbySession($sessionid);

            $patients = [];

            foreach ($appointments as $appointment) {
                $patient = $this->doctorModel->getPatientbyPatiend($appointment['Patient_Id']);
                $prescription = $this->doctorModel->getPrescriptionbyAppointment($appointment['Appointment_Id']);
                $patient['prescription'] = $prescription;
                $patient['Appointment_Id'] = $appointment['Appointment_Id']; // Assuming 'Appointment_Id' is the key in the $appointment array
                $patients[] = $patient;
            }
            
            $this->view('Doctor/timeslotpatients', ['patients' => $patients]);
            exit();
           
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    
    }

    public function AddprescriptionView($appointmentid)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
           
            $appointment = $this->doctorModel->getAppoinmentbyID($appointmentid);
            
            $this->view('Doctor/addprescription_view', ['appointment' => $appointment]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }


    public function AddPrescription()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
            $patient = $this->doctorModel->getPatient($_POST['patient_id']);

            $uniqueid = uniqid();
            $data = [
                'patientid' => intval($_POST['patient_id']),
                'Appointment_id' => intval($_POST['Appointment_Id']),
                'age' => $_POST['age'],
                'disease' => $_POST['disease'],
                'prescription' => $_POST['prescription'],
                'labtesting' => $_POST['labtesting'],
                'otherremarks' => $_POST['otherremarks'],
                'priscription_date' => $_POST['priscription_date'],
                'unique_id' => $uniqueid,
            ];

            $_SESSION['uniqueid'] = $uniqueid;
            $_SESSION['prescription'] = $data;


           header("Location: ".URLROOT."/Doctor/addMedicineView");
           exit();  
            
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function addMedicineView(){
        if(!isset($_SESSION)){
            session_start();}

        $this->view('Doctor/addmedicine');
    }
    
    public function AddMedicine(){
        if(!isset($_SESSION)){
            session_start();}
    
        $this->model("DoctorModel");
        $this->doctorModel = new DoctorModel(new Database());
    
        $medicine = $_POST;
    
        for ($i=0; $i < count($medicine['medicineName']); $i++) { 
            $data = [
                'unique_id' => $_SESSION['uniqueid'],
                'medicine' => $medicine['medicineName'][$i],
                'dose' => $medicine['dose'][$i],
                'times' => $medicine['timing'][$i],
                'before_after' => $medicine['meal'][$i],
                'doseunit' => $medicine['dosage_type'][$i]
            ];
            $result = $this->doctorModel->addMedicine($data);
        }
        
         $prescription = $_SESSION['prescription'];
         unset($_SESSION['uniqueid']);
         unset($_SESSION['prescription']);
         var_dump($prescription);
    
         $this->doctorModel->addPrescription($prescription);
        
       

        header("Location: ".URLROOT."/Doctor/appointments/message");
        exit();
        
        
    }

    public function ViewMorePrescription($appointmentid,$patientid){
        if(!isset($_SESSION)){
            session_start();}

        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor"){
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $prescription = $this->doctorModel->getPrescriptionbyAppointment($appointmentid);
            $patient = $this->doctorModel->getPatient($patientid);
            $medicine = $this->doctorModel->getMedicinebyUniqeid($prescription[0]["unique_id"]);

            $this->view('Doctor/moreprescription_view', ['prescription' => $prescription,'patient' => $patient[0], 'medicine' => $medicine]);
        }
        else {
            header("Location: ".URLROOT."/Users/login"); 
            exit(); 
        }
    }


    public function EditPrescriptionView($prescriptionid ){
        if(!isset($_SESSION)){
            session_start();}
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor"){
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $prescription = $this->doctorModel->getPrescriptionbyID($prescriptionid);
            $patient = $this->doctorModel->getPatient($prescription[0]["patientid"]);
            
            $this->view('Doctor/editprescription_view', ['prescription' => $prescription[0], 'patient' => $patient[0]]);
        }
        else {
            header("Location: ".URLROOT."/Users/login"); 
            exit(); 
        }
    }

    public function EditPrescription(){
        if(!isset($_SESSION)){
            session_start();}
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor"){
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $data = [
                'otherremarks' => $_POST['otherremarks'],
            ];
            
           
            $result = $this->doctorModel->updatePrescription(intval($_POST['prescriptionnumber']),$data);

            header("Location: ".URLROOT."/Doctor/ViewMorePrescription/".$_POST['Appointment_Id']."/".$_POST['patientid']."");

            }
        else {
            header("Location: ".URLROOT."/Users/login"); 
            exit(); 
        }
    }

    public function userdetails()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {

            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $data = $this->doctorModel->getDoctor($user["User_Id"]);


            $this->view('Doctor/profile_view', $data[0]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }


    public function EditProfileView()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {

            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
            $this->view('Doctor/editprofile_view', ['doctor' => $doctor[0], 'user' => $user]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }


   

public function DeactivateAccount(){
    if(!isset($_SESSION)){
        session_start();}

    $this->model("DoctorModel");
    $this->doctorModel = new DoctorModel(new Database());
    $result = $this->doctorModel->deactivateAccount($_SESSION["USER"]["Username"]);
    header("Location: ".URLROOT."/Users/logout");
    exit();
}





    

}
