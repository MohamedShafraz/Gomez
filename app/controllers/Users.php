<?php
    // require_once(APPROOT.'/models/login_model.php');

    class Users extends Controller {
        private $loginModel;
    
        public function index(){
            header('location:'.URLROOT);
        }
    
        public function labreport(){
            $this->view('labreport_view');
        }
    
        public function __construct() {
            $this->model("login_model");
            $this->loginModel = new LoginModel(new Database());
        }
    
        public function login() {
            
            if(isset($_SESSION["userType"])!=null){
                header('Location: '.URLROOT.'/Dashboard');
                exit;
            }
            if (isset($_POST["submit"]) && $_POST["submit"] == "Log in") {
                
                $username = $_POST["username"];
                $password = $_POST["password"];
    
                $result = $this->loginModel->loginUser($username, $password);
    
                if ($result && count($result) > 0) {
                    $user = $result[0];
                    session_start();
                    $_SESSION["userType"] = $user['usertype'];
                    $_SESSION["uname"] = md5($user["Username"]);
                    header('Location: '.URLROOT.'/Dashboard');
                    exit;
                } else {
                    $this->view('login_view');
                }
            } else {
                $this->view('login_view');
            }
        }
    }
    
    
?>