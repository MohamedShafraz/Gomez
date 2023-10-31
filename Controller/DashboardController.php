<?php
class DashboardController
{
    public function index()
    {
        if (!isset($_SESSION['userType'])) {
            include './View/Error.php';
        } else {
            
                $sidebar ="";
                switch ($_SESSION['userType']) {
                case 'Admin':
                include './Model/admin_dashboard_count.php';
                include './View/Admin/Dashboard.php';
                break;
                case 'Patient':
                $sidebar = "<div class='sidebarselected' id='select1'>Dashbboard<br></div><div class='sidebarunselected' id='unselect4'>Appointments<br></div><div class='sidebarunselected' id='unselect5'>Treatment<br></div><div class='sidebarunselected' id='unselect6'>Report<br></div><div class='sidebarunselected' id='unselect10'>Payment<br></div><div class='sidebarunselected' id='unselect3'>Reminder<br></div><div class='sidebarunselected' id='unselect10' href='userinfo'>User Info<br></div>";
                break;
                case 'Doctor':
                $sidebar = "<div class='sidebarselected' id='select1'>Dashbboard<br></div><div class='sidebarunselected' id='unselect4'>Appointments<br></div><div class='sidebarunselected' id='unselect5'>Treatment<br></div><div class='sidebarunselected' id='unselect6'>Report<br></div><div class='sidebarunselected' id='unselect8'>Availability<br></div><div class='sidebarunselected' id='unselect3'>Reminder<br></div><div class='sidebarunselected' id='unselect10'>User Info<br></div>";
                break;
                case 'Nurse':
                $sidebar = "<div class='sidebarselected' id='select1'>Dashbboard<br></div><div class='sidebarunselected' id='unselect4'>Appointment<br></div><div class='sidebarunselected' id='unselect5'>Treatment<br></div><div class='sidebarunselected' id='unselect6'>Report<br></div><div class='sidebarunselected' id='unselect8'>Availability<br></div><div class='sidebarunselected' id='unselect3'>Reminder<br></div><div class='sidebarunselected' id='unselect10'>User Info<br></div>";
                break;
                case 'Receiptionist':
                $sidebar = "<div class='sidebarselected' id='select1'>Dashbboard<br></div><div class='sidebarunselected' id='unselect4'>Appointment<br></div><div class='sidebarunselected' id='unselect10'>Payment<br></div><div class='sidebarunselected' id='unselect3'>Reminder<br></div><div class='sidebarunselected' id='unselect10'>User Info<br></div>";
                break;
                case 'Lab-Assistant':
                $sidebar = "<div class='sidebarselected' id='select1'>Dashbboard<br></div><div class='sidebarunselected' id='unselect4'>Appointment<br></div><div class='sidebarunselected' id='unselect6'>Report<br></div><div class='sidebarunselected' id='unselect9'>Lab Testing<br></div><div class='sidebarunselected' id='unselect10'>Payments<br></div><div class='sidebarunselected' id='unselect3'>Reminder<br></div><div class='sidebarunselected' id='unselect10'>User Info<br></div>";
                break;
                }
                include './View/Dashboard.php';
        }
    }
}
?>