<?php

class LabAssistant extends Controller
{
    private $userinfo_model;

    private $labassistantModel;
    private $getcountModel;
    private $reportModel;
    public function index()
    {
        if (!isset($_SESSION)) {

            session_start();
        }
        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model('LabAssistantModel');
            $getcountModel = new LabAssistantModel();
            // Call the method from the DashboardModel
            $users = $getcountModel->getUserCounts();
            $users2 = $getcountModel->getCountPendings();

            // print_r(["totalnumber"=>$users['totalnumber'],"status"=>$users2]);

            $this->view($_SESSION["userType"] . '/dashboard_view', ["totalnumber" => $users['totalnumber'], "status" => $users2]);

            exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }
        // $this->view('LabAssistant/dashboard_view');
    }

    public function ViewReminder()
    {
        $this->view('LabAssistant/reminder_view');
    }

    public function ViewProfile()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $user = $_SESSION["USER"];
        if ($user["usertype"] == "LabAssistant") {

            $this->model("LabAssistantModel");
            $this->labassistantModel = new LabAssistantModel(new Database());
            $labassistant = $this->labassistantModel->getLabAssistant($user["Username"]);
            // print_r($labassistant[0]);
            $this->view('LabAssistant/profile_view', $labassistant[0]);
        } else {
            header("Location: " . URLROOT . "/Users/login");
            exit();
        }
    }
    public function EditProfileView()
    {
        $this->view('LabAssistant/editprofile_view');
    }

    public function report()
    {
        $this->model("LabAssistantModel");
        $this->labassistantModel = new LabAssistantModel(new Database());
        $labassistant = $this->labassistantModel->getReportData();
        // print_r($labassistant);
        session_start();

        $this->view('LabAssistant/report', $labassistant);
        exit();
    }

    public function ReportView($param = NULL)
    {
        $data['check'] = $param ?? 1;
        $this->view('LabAssistant/report_view', $data);
    }

    public function uploadReport($param = null, $param2 = null)
    {
        if ($param != null) {
            $condition = '`refno` = ' . $param2;
            $data['filename'] = $param;
            $this->model("LabAssistantModel");
            $this->reportModel = new LabAssistantModel(new Database());
            $this->reportModel->setTable(Report);
            $labassistant = $this->reportModel->updateData($data, $condition);
            if ($labassistant) {
                $data['status'] = "completed";
                $labassistant = $this->reportModel->updateData($data, $condition);
            }

            header("location: " . URLROOT . '/LabAssistant/report');
        } else {
            $this->view('LabAssistant/uploadReport');
        }
    }
    public function labReportupload()
    {
        $this->view('LabAssistant/labReportupload');
    }

    public function getcount()
    {
        session_start();
        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model('LabAssistantModel');
            $getcountModel = new LabAssistantModel();
            // Call the method from the DashboardModel
            $users = $getcountModel->getUserCounts();
            $users2 = $getcountModel->getCountPendings();

            // print_r(["totalnumber"=>$users['totalnumber'],"status"=>$users2]);

            $this->view($_SESSION["userType"] . '/dashboard_view', ["totalnumber" => $users['totalnumber'], "status" => $users2]);

            exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }

    public function userdetails($update = null)
    {
        if (!isset($_SESSION)) {
            session_start(); // Ensure the session is started
        }

        // Check if the session contains the necessary user data
        if (!isset($_SESSION["USER"])) {
            header("Location: " . URLROOT . "/Users/login"); // Redirect to login if no session
            exit();
        }

        $this->model($_SESSION["userType"] . '/userinfo_model');
        $this->userinfo_model = new UserlabassistantModel();

        $result = $this->userinfo_model->fetchLabAssistant(); // Fetch user details

        if ($update == 'update') {
            $fileContents = file_get_contents($_FILES["file"]['tmp_name']);
            $hexString = '0x' . bin2hex($fileContents);

            $result2 = $this->userinfo_model->updateUserDetails($hexString, $fileContents);
            header("location: ./");
            exit();
        }

        $this->view('LabAssistant/userdetails_view', $result);
        exit();
    }
}
