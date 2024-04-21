<?php
include_once APPROOT . '/controllers/Dashboard.php';
include_once APPROOT . '/controllers/ManageUser.php';
include_once APPROOT . '/controllers/UserInfo.php';
include_once APPROOT . '/controllers/logout.php';
class Admin extends Controller
{
    public function Index()
    {
        $dashboard = new dashboard();
        $dashboard->Index();
    }
    public function Dashboard()
    {
        $dashboard = new dashboard();
        $dashboard->Index();
    }
    public function ManageUser($user = Null, $rest = Null)
    {
        $ManageUser = new ManageUser();
        if ($user == Null) {
            $ManageUser->Index();
        } else {
            $ManageUser->$user($rest);
        }
    }
    public function UserInfo($rest = Null)
    {
        $UserInfo = new UserInfo();

        if ($rest == Null or $rest == "id") {
            $UserInfo->Index();
        } else {
            $UserInfo->$rest();
            exit();
        }
    }
    public function Logout()
    {
        $Logout = new Logout();
        $Logout->Index();
    }
}
