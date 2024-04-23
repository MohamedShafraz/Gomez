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
            // print_r($userDetails);
            $this->view($_SESSION["userType"] . "/Userinformation_view", $userDetails);
            exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }
}
