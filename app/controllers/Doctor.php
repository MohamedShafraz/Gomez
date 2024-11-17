<?php

class Doctor extends Controller
{
    private $doctorModel;
    public function index(): void
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];

        if ($user["usertype"] == "Doctor") {
           
            header(header: "Location: " . URLROOT . "/Doctor/dashboard");
        } else {
            header(header: "Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function dashboard(): void{
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];

        if ($user["usertype"] == "Doctor") {
            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            
            $doctor = $this->doctorModel->getDoctor(userid: $user["User_Id"]);
            $sessions = $this->doctorModel->getSessionsToday(id: $doctor[0]['Doctor_id']);

            $appointments = [];
            $patients = [];

            foreach ($sessions as $session) {
                $appointment = $this->doctorModel->getAppointmentbySession(id: $session['session_id']);
                $appointments = array_merge($appointments, $appointment);
            }

            foreach ($appointments as $appointment) {
                $patient = $this->doctorModel->getPatientbyPatiend(id: $appointment['Patient_Id']);
                $patients = array_merge($patients, $patient);
            }

            $nexttwosessions = array_slice(array: $sessions, offset: 0, length: 2);

            $this->view(view: 'Doctor/dashboard_view', data: ['appointments' => $appointments, 'patients' => $patients, 'sessions' => $sessions, 'nexttwosessions' => $nexttwosessions]);
        } else {
            header(header: "Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function appointments($message=null): void
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());

            $doctor = $this->doctorModel->getDoctor(userid: $user["User_Id"]);
            $sessions = $this->doctorModel->getSessionsToday(id: $doctor[0]['Doctor_id']);

            if($message != null){
                $message = "Prescription Added Successfully";
            }

            $this->view(view: 'Doctor/appointment_view', data: ['sessions' => $sessions, 'message' => $message]);
        } else {
            header(header: "Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function ShowPatientsAllocatedTimeSlot($sessionid): never{
        if (!isset($_SESSION)) {
            session_start();
        }
        
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            
            $appointments = $this->doctorModel->getAppointmentbySession(id: $sessionid);

            $patients = [];

            foreach ($appointments as $appointment) {
               // $patient = $this->doctorModel->getPatientbyappointment($appointment['Patient_Id']);
                $patient = $this->doctorModel->getPatientbyPatiend(id: $appointment['Patient_Id']);
                $prescription = $this->doctorModel->getPrescriptionbyAppointment($appointment['Appointment_Id']);
                $patient['prescription'] = $prescription;
                $patient['Appointment_Id'] = $appointment['Appointment_Id']; // Assuming 'Appointment_Id' is the key in the $appointment array
                $patients[] = $patient;
            }
            
            $this->view(view: 'Doctor/timeslotpatients', data: ['patients' => $patients]);
            exit();
           
        } else {
            header(header: "Location: " . URLROOT . "/Users/login");
            exit();
        }
    
    }

    public function AddprescriptionView($appointmentid): void
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
           
            $appointment = $this->doctorModel->getAppoinmentbyID($appointmentid);
            $labtests = $this->doctorModel->getLabtest();
            $diseases = $this->doctorModel->getDisease();

            $this->view(view: 'Doctor/addprescription_view', data: ['appointment' => $appointment, 'labtests' => $labtests, 'diseases' => $diseases]);
        } else {
            header(header: "Location: " . URLROOT . "/Users/login");
            exit();
        }
    }


    public function AddPrescription(): never
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $doctor = $this->doctorModel->getDoctor(userid: $user["Username"]);
            $patient = $this->doctorModel->getPatient(id: $_POST['patient_id']);

            $age = date_diff(baseObject: date_create(datetime: $patient[0]["date_of_birth"]), targetObject: date_create(datetime: 'now'))->y;

            $uniqueid = uniqid();
            $data = [
                'patientid' => intval(value: $_POST['patient_id']),
                'Appointment_id' => intval(value: $_POST['Appointment_Id']),
                'age' =>  $age,
                'disease' => $_POST['disease'],
                'prescription' => $_POST['prescription'],
                'labtesting' => $_POST['labtesting'],
                'otherremarks' => $_POST['otherremarks'],
                'priscription_date' => $_POST['priscription_date'],
                'unique_id' => $uniqueid,
            ];


            $founddisiease = $this->doctorModel->findDisease(disease: $_POST['disease']);
            if (count(value: $founddisiease) == 0) {
                $diseasetoadd = [
                    'disease' => $_POST['disease'],
                ];
                $this->doctorModel->addDisese(data: $diseasetoadd);
            }

            $_SESSION['uniqueid'] = $uniqueid;
            $_SESSION['prescription'] = $data;


            header(header: "Location: ".URLROOT."/Doctor/addMedicineView");
        
            exit();  
            
        } else {
            header(header: "Location: " . URLROOT . "/Users/login");
            exit();
}
}

public function addMedicineView(){
        if(!isset($_SESSION)){
            session_start();}

        $this->model("DoctorModel");
        $this->doctorModel = new DoctorModel(new Database());

        $drugs = $this->doctorModel->getDrugs();
        $this->view(view: 'Doctor/addmedicine', data: ['drugs' => $drugs]);
    } 
    
public function AddMedicine(): never {
        if (!isset($_SESSION)) {
            session_start();
        }
    
        $this->model("DoctorModel");
        $this->doctorModel = new DoctorModel(new Database());
    
        $medicine = $_POST;
    
        $medicineNames = json_decode(json: $medicine['medicineNameValues'][0]);
        $doses = json_decode(json: $medicine['doseValues'][0]);
        $timings = json_decode(json: $medicine['timingValues'][0]);
        $meals = json_decode(json: $medicine['mealValues'][0]);
        $dosageTypes = json_decode(json: $medicine['dosageTypeValues'][0]);
    
        $allData = [];
        for ($i = 0; $i < count(value: $medicineNames); $i++) {
            $data = [
                'unique_id' => $_SESSION['uniqueid'],
                'medicine' => $medicineNames[$i],
                'dose' => $doses[$i],
                'times' => $timings[$i],
                'before_after' => $meals[$i],
                'doseunit' => $dosageTypes[$i]
            ];
            $allData[] = $data;
            
            $result = $this->doctorModel->addMedicine(data: $data);
        }
    
    
        $prescription = $_SESSION['prescription'];
        unset($_SESSION['uniqueid']);
        unset($_SESSION['prescription']);
    
        $this->doctorModel->addPrescription(data: $prescription);
        header(header: "Location: ".URLROOT."/Doctor/appointments/message");
        exit();
        
        
    }

    public function ViewMorePrescription($appointmentid,$patientid): void{
        if(!isset($_SESSION)){
            session_start();}

        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor"){
            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $prescription = $this->doctorModel->getPrescriptionbyAppointment(id: $appointmentid);
            $patient = $this->doctorModel->getPatient(id: $patientid);
            $medicine = $this->doctorModel->getMedicinebyUniqeid(unique_id: $prescription[0]["unique_id"]);

            $this->view(view: 'Doctor/moreprescription_view', data: ['prescription' => $prescription,'patient' => $patient[0], 'medicine' => $medicine]);
        }
        else {
            header(header: "Location: ".URLROOT."/Users/login"); 
            exit(); 
        }
    }


    public function EditPrescriptionView($prescriptionid ): void{
        if(!isset($_SESSION)){
            session_start();}
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor"){
            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $prescription = $this->doctorModel->getPrescriptionbyID(id: $prescriptionid);
            $patient = $this->doctorModel->getPatient(id: $prescription[0]["patientid"]);
            
            $this->view(view: 'Doctor/editprescription_view', data: ['prescription' => $prescription[0], 'patient' => $patient[0]]);
        }
        else {
            header(header: "Location: ".URLROOT."/Users/login"); 
            exit(); 
        }
    }

    public function EditPrescription(): void{
        if(!isset($_SESSION)){
            session_start();}
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor"){
            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $data = [
                'otherremarks' => $_POST['otherremarks'],
            ];
            
           
            $result = $this->doctorModel->updatePrescription(id: intval(value: $_POST['prescriptionnumber']),data: $data);

            header(header: "Location: ".URLROOT."/Doctor/ViewMorePrescription/".$_POST['Appointment_Id']."/".$_POST['patientid']."");

            }
        else {
            header(header: "Location: ".URLROOT."/Users/login"); 
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

            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $data = $this->doctorModel->getDoctor(userid: $user["User_Id"]);


            $this->view(view: 'Doctor/profile_view', data: $data[0]);
        } else {
            header(header: "Location: " . URLROOT . "/Users/login");
            exit();
        }
    }


    public function EditProfileView(): void
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {

            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $doctor = $this->doctorModel->getDoctor(userid: $user["Username"]);
            $this->view(view: 'Doctor/editprofile_view', data: ['doctor' => $doctor[0], 'user' => $user]);
        } else {
            header(header: "Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function update(): void
    {
        session_start();
        if (isset($_SESSION["userType"])) {
           // $this->model($_SESSION["userType"] . '/userinfo_model');

            $user = $_SESSION["USER"];

            $this->model(model: "DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            
            // print_r($_FILES["file"]["tmp_name"]);

            // Path to the PDF file

           // $fileContents = file_get_contents($_FILES["file"]['tmp_name']);
           // $hexString = '0x' . bin2hex($fileContents);

            $userDetails  = $this->doctorModel->updateUserDetails();
            header(header: "Location: ".URLROOT."/Doctor/userdetails");
            exit();
}
}



public function DeactivateAccount(): never{
    if(!isset($_SESSION)){
        session_start();}

    $this->model(model: "DoctorModel");
    $this->doctorModel = new DoctorModel(new Database());
    $result = $this->doctorModel->deactivateAccount(username: $_SESSION["USER"]["Username"]);
    header(header: "Location: ".URLROOT."/Users/logout");
    exit();
}


//public function moreappointments($message=null)
//{
   // if (!isset($_SESSION)) {
        //session_start();
  //  }
   // $user = $_SESSION["USER"];
   // if ($user["usertype"] == "Doctor") {
      //  $this->model("DoctorModel");
      //  $this->doctorModel = new DoctorModel(new Database());

      //  $doctor = $this->doctorModel->getDoctor($user["User_Id"]);
     //   $sessions = $this->doctorModel->getSessionsToday($doctor[0]['Doctor_id']);

      //  if($message != null){
      //      $message = "Prescription Added Successfully";
      //  }

     //   $this->view('Doctor/moreappoin_view', ['sessions' => $sessions, 'message' => $message]);
 //   } else {
     //   header("Location: " . URLROOT . "/Users/login");
     //   exit();
  //  }

//}
    
}










    


