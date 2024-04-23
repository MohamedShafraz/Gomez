<?php

class LabAssistant extends Controller
{
    private $labassistantModel;
    public function index()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $this->view('LabAssistant/dashboard_view');
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
            $this->view('LabAssistant/profile_view',$labassistant[0]);
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
        $this->view('LabAssistant/report',$labassistant);
    }
    public function ReportView()
    {
        $this->view('LabAssistant/report_view');
    }
   
    public function uploadReport($param = null)
    {
        print_r($param);
        $this->view('LabAssistant/uploadReport');
    }
    public function labReportupload()
    {
        $this->view('LabAssistant/labReportupload');
    }
   
}
