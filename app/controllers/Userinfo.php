<?php
class userinfo extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION["userType"])) {
            $this->model($_SESSION["userType"] . '/userinfo_model');
            $userModel = new UserModel();
            $userDetails  = $userModel->getUserDetails();
            $this->view($_SESSION["userType"] . "/Userinformation_view", $userDetails);
            exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }
    public function update()
    {
        session_start();
        if (isset($_SESSION["userType"])) {
            $this->model($_SESSION["userType"] . '/userinfo_model');
            $userModel = new UserModel();
            // print_r($_FILES["file"]["tmp_name"]);
            $fileContents = null;
            $hexString = null;
            // Path to the PDF file
            if (isset($_FILES["file"]['tmp_name'])) {
                $fileContents = file_get_contents($_FILES["file"]['tmp_name']);
                $hexString = '0x' . bin2hex($fileContents);
            }
            $userDetails  = $userModel->updateUserDetails($hexString, $fileContents);
            echo "<script>history.go(-2)</script>";
            exit();
        }

        // } else {
        //     header("location:" . URLROOT . "/users/login");
        // }
    }
}
