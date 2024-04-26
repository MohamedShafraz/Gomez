<?php
 class registration extends Controller{
    private $registrationmodel;
    public function index(){
    $this->view('Patient/registration_view');
    $this->model('registration_model');
    $this->registrationmodel = new registrationmodel(new Database());
    if (isset($_POST['submit'])) {

        $fullname = $_POST['fullname'];
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $registration_date = isset($_POST['registration_date']) ? $_POST['registration_date'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $phonenumber = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
        $nic = isset($_POST['nic']) ? $_POST['nic'] : '';
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        date_default_timezone_set("Asia/Colombo");
        $registration_date = date("y:m:d:h:i:s");
        $date_of_birth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : "";
        $this->registrationmodel->loginUser($fullname,md5($password),$registration_date,$date_of_birth,$email,$gender,$address,$phonenumber,$nic,$Username);
    }
    exit();
}
 } 
?>