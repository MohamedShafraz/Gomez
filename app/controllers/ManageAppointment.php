<?php

class manageappointment extends Controller
{
    public function __construct()
    {
        session_start();
        if (isset($_SESSION['userType']) == null) {
            header("location:" . URLROOT . "/users/login");
        }
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
                    $where = $where->format('m/d/Y');

                    // if ($doctor) {
                    $manageappointmentDetails =  $manangeappointmentModel->getAppoinmentbyDate($where);

                    // }""
                }
                if ($_GET['Date'] != NULL && $_GET['doctor'] != NULL) {
                    $where = $_GET['Date'];
                    $where = DateTime::createFromFormat('Y-m-d', $where);
                    $where = $where->format('m/d/Y');

                    // if ($doctor) {
                    $manageappointmentDetails =  $manangeappointmentModel->getAppoinmentbyDateAndDoctor($where, $_GET['doctor']);

                    // }""
                    $this->view($_SESSION['userType'] . "/manageappointment_view", $manageappointmentDetails);
                }
            }
            $this->view($_SESSION['userType'] . "/manageappointment_view", $manageappointmentDetails);
        }
        exit();
    }
}
