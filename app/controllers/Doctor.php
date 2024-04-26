<?php

class Doctor extends Controller
{
    private $doctorModel;
    public function index()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
<<<<<<< HEAD
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
=======

        $this->view('Doctor/dashboard_view');
    }

    public function ViewAppointment()
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
<<<<<<< HEAD
            $appointments = $this->doctorModel->getAppoinmentsbyDoctor($doctor[0]['Doctor_id']);

            
            if($message != null){
                $message = "Prescription Added Successfully";
            }

            $this->view('Doctor/appointment_view', ['appointments' => $appointments, 'message' => $message]);
=======
            // print_r($doctor);
            $appointments = $this->doctorModel->getAppoinmentsbyDoctor($doctor[0]['Doctor_id']);
            // print_r($appointments);
            $this->view('Doctor/appointment_view', ['appointments' => $appointments]);
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
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

<<<<<<< HEAD
    public function userdetails()
=======
    public function ViewProfile()
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
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
<<<<<<< HEAD
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
=======
        $this->view('Doctor/editprofile_view');
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
    }

    public function ViewMoreAppoinment($id)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
<<<<<<< HEAD

        if(isset($_SESSION["prescription"])){
            unset($_SESSION["prescription"]);
        }


=======
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
<<<<<<< HEAD
            $appointments = $this->doctorModel->getAppointment($id);
            $patient = $this->doctorModel->getPatient($appointments[0]['Patient_ID']);
            $prescription = $this->doctorModel->getPrescriptionbyAppointment($id);

            if($appointments[0]['Appointment_Status'] == "Prescription Added"){
                $this->view('Doctor/moreappointment_view', ['appointments' => $appointments[0], 'patient' => $patient[0], 'prescription' => $prescription[0]]);
            }else{
                $this->view('Doctor/moreappointment_view', ['appointments' => $appointments[0], 'patient' => $patient[0], 'prescription' => $prescription]);
            }
=======
            $appointment = $this->doctorModel->getAppointment($id);
            $patient = $this->doctorModel->getPatient($appointment[0]['Patient_ID']);
            $prescription = $this->doctorModel->getPrescriptionbyAppointment($id);


            $this->view('Doctor/moreappointment_view', ['appointments' => $appointment[0], 'patient' => $patient[0], 'prescription' => $prescription[0]]);
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

<<<<<<< HEAD
    public function AddprescriptionView($appointmentid)
=======
    public function AddprescriptionView()
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
<<<<<<< HEAD
            $appointments = $this->doctorModel->getAppoinmentbyID($appointmentid);
=======
            $appointments = $this->doctorModel->getAppoinmentsbyDoctor($doctor[0]['Doctor_id']);
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
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
<<<<<<< HEAD

            $uniqueid = uniqid();
            $data = [
                'doctorid' => intval($doctor[0]['Doctor_id']),
                'patient_id' => intval($_POST['patient_id']),
                'Appointment_id' => intval($_POST['appointment_id']),
=======
            $data = [
                'doctorid' => intval($doctor[0]['Doctor_id']),
                'patient_id' => intval($_POST['patient_id']),
                'Appointment_id	' => intval($_POST['appointment_id']),
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
                'patient_name' => $patient[0]['name'],
                'patient_age' => $patient[0]['age'],
                'Medications' => $_POST['medications'],
                'instructions' => $_POST['instructions'],
                'datesigned' => $_POST['dateSigned'],
<<<<<<< HEAD
                'labtesting' => $_POST['labTesting'],
                'unique_id' => $uniqueid,
            ];

            $_SESSION['uniqueid'] = $uniqueid;
            $_SESSION['prescription'] = $data;


           header("Location: ".URLROOT."/Doctor/addMedicineView");
           exit();  
            
=======
                'labtesting' => $_POST['labTesting']
            ];

            $result1 = $this->doctorModel->addPrescription($data);
            $result2 = $this->doctorModel->updateAppointmentStatus($_POST['appointment_id'], "Prescription Added");

            if($result1 && $result2){
                header("Location: " . URLROOT . "/Doctor/ViewPrescription");
                exit();
            }else{
                header("Location: " . URLROOT . "/Doctor/ViewAppointment");
                exit();
            }
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
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
<<<<<<< HEAD
            $medicine = $this->doctorModel->getMedicinebyUniqeid($prescription[0]["unique_id"]);
            
            $this->view('Doctor/moreprescription_view', ['prescription' => $prescription, 'appointment' => $appointment[0], 'patient' => $patient[0], 'medicine' => $medicine]);
           exit();
=======
            $this->view('Doctor/moreprescription_view', ['prescription' => $prescription, 'appointment' => $appointment[0], 'patient' => $patient[0]]);
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
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
<<<<<<< HEAD
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
=======
       }
}
>>>>>>> 37e9981b42f8d4f278f54e450635e6edfb72d364
