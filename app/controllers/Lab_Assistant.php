<?php
class Lab_Assistant extends Controller
{

    public function __construct() {}
    public function index()
    {
        $this->view("Lab-Assistant/dashboard_view");
    }
    public function dashboard()
    {
        $this->view("Lab-Assistant/dashboard_view");
    }
    public  function userinfo()
    {
        $this->view("Lab-Assistant/Userinformation_view");
    }
    public  function uploadreport()
    {
        $this->view("Lab-Assistant/index");
    }
}
/*a
 *param = hello c
 controller-> method (parameter = param) 
 */
