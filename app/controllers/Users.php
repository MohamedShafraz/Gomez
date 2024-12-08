<?php
// require_once(APPROOT.'/models/login_model.php');

class Users extends Controller
{
    private $loginModel;
    private $labreportmodel;
    public function index()
    {
        header('location:' . URLROOT);
    }



    public function __construct()
    {
        $this->model("login_model");
        $this->loginModel = new LoginModel();
    }

    public function login()
    {
        session_start();
        if (isset($_SESSION["userType"])) {
            header('Location: ' . URLROOT . '/' . $_SESSION["userType"] . '/Dashboard');
            exit();
        }
        if (isset($_POST["submit"]) && $_POST["submit"] == "Log in") {

            $username = $_POST["username"];
            $password = $_POST["password"];


            $result = $this->loginModel->loginUser($username, $password);

            if ($result && count($result) > 0) {
                $user = $result[0];
                session_start();
                $_SESSION['User_Id'] = $user['User_Id'];
                $_SESSION["userType"] = $user['usertype'];
                $_SESSION["uname"] = $user["Username"];
                // $_SESSION["image"] = $user["Profilepicture"] ?? "test";
                $_SESSION["USER"] = $user;
                header('Location: ' . URLROOT . '/' . $_SESSION["userType"] . '/Dashboard');
                exit();
            } else {
                $this->view('login_view',);
                exit();
            }
        } else {
            $this->view('login_view');
            exit();
        }
    }
    public function labreport()
    {
        $this->model('Labreport_model');

        if (isset($_POST['passcode'])) {
            $refno = $_POST['refno'];
            $passcode = $_POST['passcode'];
            $this->labreportmodel = new LabReportModel();
            $result = $this->labreportmodel->getLabreport($refno, $passcode);
            // print_r($result[0]);
            // echo "<script>window.location.href =" . URLROOT . "/LabAssistant/ReportView/" . $result[0]['filename'] . "</script>";
            $this->view('labreport_view', $result[0]);
        } else {
            $this->view('labreport_view');
        }
        exit();
    }
    public function forgetpassword()
    {
        $this->view('forget_password_view');
    }
}
