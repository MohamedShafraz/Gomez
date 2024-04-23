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
    public function index()
    {
        // session_start();
        if (isset($_SESSION['userType']) == null) {
            header("location:" . URLROOT . "/users/login");
        }
        
        $this->view($_SESSION['userType'] . "/manageappointment_view");
        exit();
    }
}
