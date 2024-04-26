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
            $doctor = $this->doctorModel->getDoctor($user["Username"]);

            $appointments = $this->doctorModel->getUpcomingAppoinmentsbyDoctor($doctor[0]['Doctor_id']);
            $patients = $this->doctorModel->getMonthPatientsbyDoctor($doctor[0]['Doctor_id']);

            $totalmonthappointment = $this->doctorModel->getMonthAppoinmentsbyDoctor($doctor[0]['Doctor_id']);
            $totalappointment = $this->doctorModel->getTotalAppoinmentsbyDoctor($doctor[0]['Doctor_id']);


            $this->view('Doctor/dashboard_view', ['appointments' => $appointments, 'patients' => $patients , 'totalappointment' => $totalappointment , 'totalmonthappointment' => $totalmonthappointment]);
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
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
            $appointments = $this->doctorModel->getAppoinmentsbyDoctor($doctor[0]['Doctor_id']);

            
            if($message != null){
                $message = "Prescription Added Successfully";
            }

            $this->view('Doctor/appointment_view', ['appointments' => $appointments, 'message' => $message]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }


    public function ViewPrescription()
    {

        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];

        if ($user["usertype"] == "Doctor") {

            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
            $prescriptions = $this->doctorModel->getPrescriptionbyDoctor($doctor[0]["Doctor_id"]);
            $this->view('Doctor/prescription_view', ['prescriptions' => $prescriptions, 'doctor' => $doctor[0]['Doctor_id'], 'user' => $user]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function ViewReminder()
    {
        $this->view('Doctor/reminder_view');
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
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
            $this->view('Doctor/profile_view', ['doctor' => $doctor[0], 'user' => $user]);
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

    public function ViewMoreAppoinment($id)
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if(isset($_SESSION["prescription"])){
            unset($_SESSION["prescription"]);
        }


        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $appointments = $this->doctorModel->getAppointment($id);
            $patient = $this->doctorModel->getPatient($appointments[0]['Patient_ID']);
            $prescription = $this->doctorModel->getPrescriptionbyAppointment($id);

            if($appointments[0]['Appointment_Status'] == "Prescription Added"){
                $this->view('Doctor/moreappointment_view', ['appointments' => $appointments[0], 'patient' => $patient[0], 'prescription' => $prescription[0]]);
            }else{
                $this->view('Doctor/moreappointment_view', ['appointments' => $appointments[0], 'patient' => $patient[0], 'prescription' => $prescription]);
            }
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
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
            $appointments = $this->doctorModel->getAppoinmentbyID($appointmentid);
            $patient = $this->doctorModel->getPatient($appointments[0]['Patient_ID']);

            $this->view('Doctor/addprescription_view', ['appointments' => $appointments, 'doctorid' => $doctor[0]['Doctor_id'], 'patientid' => $patient[0]['ID'], 'patientname' => $patient[0]['name']]);
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
                'doctorid' => intval($doctor[0]['Doctor_id']),
                'patient_id' => intval($_POST['patient_id']),
                'Appointment_id' => intval($_POST['appointment_id']),
                'patient_name' => $patient[0]['name'],
                'patient_age' => $patient[0]['age'],
                'Medications' => $_POST['medications'],
                'instructions' => $_POST['instructions'],
                'datesigned' => $_POST['dateSigned'],
                'labtesting' => $_POST['labTesting'],
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

    public function ViewMorePrescription($prescriptionid, $appointmentid)
    {

        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $prescription = $this->doctorModel->getPrescriptionbyID($prescriptionid);
            $appointment = $this->doctorModel->getAppoinmentbyID($appointmentid);
            $patient = $this->doctorModel->getPatient($appointment[0]["Patient_ID"]);
            $medicine = $this->doctorModel->getMedicinebyUniqeid($prescription[0]["unique_id"]);
            
            $this->view('Doctor/moreprescription_view', ['prescription' => $prescription, 'appointment' => $appointment[0], 'patient' => $patient[0], 'medicine' => $medicine]);
           exit();
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function EditPrescriptionView($appointmentid,$prescriptionid ){
        if(!isset($_SESSION)){
            session_start();}
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor"){
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $prescription = $this->doctorModel->getPrescriptionbyID($prescriptionid);
            $appointment = $this->doctorModel->getAppoinmentbyID($appointmentid);
            $patient = $this->doctorModel->getPatient($appointment[0]["Patient_ID"]);
            $this->view('Doctor/editprescription_view', ['prescription' => $prescription, 'appointment' => $appointment[0], 'patient' => $patient[0]]);
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
                'Medications' => $_POST['medications'],
                'instructions' => $_POST['instructions'],
                'labtesting' => $_POST['labtesting']
            ];

            $result = $this->doctorModel->updatePrescription(intval($_POST['prescription_id']),$data);
            if ($result){
                header("Location: ".URLROOT."/Doctor/ViewMorePrescription/".$_POST['prescription_id']."/".$_POST['appointment_id']."");
                exit();
            }
            else {
                header("Location: ".URLROOT."/Doctor/");
                exit();
            }
        }
        else {
            header("Location: ".URLROOT."/Users/login"); 
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
            'before_after' => $medicine['meal'][$i]
        ];
        $result = $this->doctorModel->addMedicine($data);
    }
    
    $prescription = $_SESSION['prescription'];

    $result1 = $this->doctorModel->addPrescription($prescription);
    $result2 = $this->doctorModel->updateAppointmentStatus($prescription["Appointment_id"], "Prescription Added");
    
    
    header("Location: ".URLROOT."/Doctor/ViewMoreAppoinment/".$prescription["Appointment_id"]."");
    exit();
    
    
}


    public function ShowPatientsAllocatedTimeSlot($starttime, $endtime){
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];

        $this->model("DoctorModel");
        $this->doctorModel = new DoctorModel(new Database());
        $doctor = $this->doctorModel->getDoctor($user["Username"]);

        $doctor_id = $doctor[0]['Doctor_id'];

        $appointments = $this->doctorModel->getAppointmentsbyDoctoronTodayandbetweentimeslots($doctor_id, $starttime, $endtime);
        //$patient = $this->doctorModel->getPatient($appointments[0]['Patient_ID']);
        
        $this->view('Doctor/timeslotpatients', ['appointments' => $appointments]);
        exit();
    
    }


    

}
