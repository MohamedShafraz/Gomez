<?php

class dashboard extends Controller
{
    private $usertype;

    public function Index()
    {
        session_start();
        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model($_SESSION["userType"] . '/dashboard_model');
            $dashboardModel = new DashboardModel();
            // Call the method from the DashboardModel
            $users = $dashboardModel->getUserCounts();

            // Pass the data to the view
            $userCounts = $dashboardModel->getUserCounts();
            $this->view($_SESSION["userType"] . '/dashboard_view', $userCounts);
            exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }
}
