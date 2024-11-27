<?php

class manageappointment extends Controller
{
    private $appointmodel;
    private $doctorModel;
    public function __construct()
    {
        session_start();
        if (isset($_SESSION['userType']) == null) {
            header("location:" . URLROOT . "/users/login");
        }
    }
    public function report()
    {
        $this->model("DoctorModel");
        $this->doctorModel = new DoctorModel(new Database());
        $sessionid = $_GET['name'];
        $appointments = $this->doctorModel->getAppointmentbySession($sessionid);

        $patients = [];

        foreach ($appointments as $appointment) {
            $patient = $this->doctorModel->getPatientbyPatiend($appointment['Patient_Id']);
            $prescription = $this->doctorModel->getPrescriptionbyAppointment($appointment['Appointment_Id']);
            $patient['prescription'] = $prescription;
            $patient['Appointment_Id'] = $appointment['Appointment_Id']; // Assuming 'Appointment_Id' is the key in the $appointment array
            $patients[] = $patient;
        }

        $this->view('Admin/doctor_appointments', ['patients' => $patients]);
        exit();
        // $this->view($_SESSION['userType'] . "/report_view");
    }
    public function index($param = Null, $doctor = Null, $test = null)
    {
        // session_start();
        if (isset($_SESSION['userType']) == Null) {
            header("location:" . URLROOT . "/users/login");
        } else {

            $this->model($_SESSION['userType'] . "/appointment_model");
            $manangeappointmentModel = new appointmentAdminModel();
            $manageappointmentDetails =  $manangeappointmentModel->getAppoinmentbyDoctor();

            if (isset($_GET['doctor']) || isset($_GET['Date'])) {
                if ($_GET['doctor'] != NULL && $_GET['Date'] == NULL) {

                    $where = $_GET['doctor'];
                    // if ($doctor) {
                    $manageappointmentDetails =  $manangeappointmentModel->getAppoinmentbyDoctor($_GET['doctor']);

                    // }
                }

                if ($_GET['Date'] != NULL && $_GET['doctor'] == NULL) {
                    $where = $_GET['Date'];
                    $where = DateTime::createFromFormat('Y-m-d', $where);
                    $where = $where->format('Y-m-d');

                    // if ($doctor) {
                    $manageappointmentDetails =  $manangeappointmentModel->getAppoinmentbyDate($where);
                    // }""
                }
                if ($_GET['startDate'] != NULL && $_GET['endDate'] != NULL &&  $_GET['doctor'] == NULL) {
                    $date1 = $_GET['startDate'];
                    $date1 = DateTime::createFromFormat('Y-m-d', $date1);
                    $date1 = $date1->format('Y-m-d');
                    $date2 = $_GET['endDate'];
                    $date2 = DateTime::createFromFormat('Y-m-d', $date2);
                    $date2 = $date2->format('Y-m-d');
                    // if ($doctor) {
                    $manageappointmentDetails =  $manangeappointmentModel->getAppoinmentbystartandEnd($date1, $date2);
                    // }""
                }
                if ($_GET['Date'] != NULL && $_GET['doctor'] != NULL) {
                    $where = $_GET['Date'];
                    $where = DateTime::createFromFormat('Y-m-d', $where);
                    $where = $where->format('Y-m-d');

                    $manageappointmentDetails =  $manangeappointmentModel->getAppoinmentbyDateAndDoctor($where, $_GET['doctor']);


                    // $this->view($_SESSION['userType'] . "/manageappointment_view", $manageappointmentDetails);
                }
            }
            // print_r($manageappointmentDetails);
            $this->view($_SESSION['userType'] . "/manageappointment_view", $manageappointmentDetails);
        }
        exit();
    }
}
