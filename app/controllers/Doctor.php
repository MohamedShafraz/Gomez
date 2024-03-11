<?php

class Doctor extends Controller
{
    private $doctorModel;
    public function index()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $this->view('Doctor/dashboard_view');
    }

    public function ViewAppointment()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $doctor = $this->doctorModel->getDoctor($user["Username"]);
            // print_r($doctor);
            $appointments = $this->doctorModel->getAppoinmentsbyDoctor($doctor[0]['Doctor_id']);
            // print_r($appointments);
            $this->view('Doctor/appointment_view', ['appointments' => $appointments]);
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

    public function ViewProfile()
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
        $this->view('Doctor/editprofile_view');
    }

    public function ViewMoreAppoinment($id)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "Doctor") {
            $this->model("DoctorModel");
            $this->doctorModel = new DoctorModel(new Database());
            $appointment = $this->doctorModel->getAppointment($id);
            $patient = $this->doctorModel->getPatient($appointment[0]['Patient_ID']);
            $this->view('Doctor/moreappointment_view', ['appointments' => $appointment[0], 'patient' => $patient[0]]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }

    public function AddprescriptionView()
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
            $data = [
                'doctorid' => intval($doctor[0]['Doctor_id']),
                'patient_id' => intval($_POST['patient_id']),
                'Appointment_id	' => intval($_POST['appointment_id']),
                'patient_name' => $patient[0]['name'],
                'patient_age' => $patient[0]['age'],
                'Medications' => $_POST['medications'],
                'instructions' => $_POST['instructions'],
                'datesigned' => $_POST['dateSigned'],
                'labtesting' => $_POST['labTesting']
            ];

            $result = $this->doctorModel->addPrescription($data);
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
            $this->view('Doctor/moreprescription_view', ['prescription' => $prescription, 'appointment' => $appointment[0], 'patient' => $patient[0]]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }
}
