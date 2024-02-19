<?php
include_once APPROOT . '/controllers/Dashboard.php';
include_once APPROOT . '/controllers/ManageUser.php';
include_once APPROOT . '/controllers/UserInfo.php';
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
    public function ManageUser()
    {
        $ManageUser = new ManageUser();
        $ManageUser->Index();
    }
    public function UserInfo()
    {
        $UserInfo = new UserInfo();
        $UserInfo->Index();
    }
}
