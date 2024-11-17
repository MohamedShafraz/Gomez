<?php
// require_once(APPROOT.'/models/login_model.php');

class Users extends Controller
{
    private $loginModel;

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
        $this->view('Patient/labreport_view');
        exit();
    }
    public function forgetpassword()
    {
        $this->view('forget_password_view');
    }
}
