<?php
class patient extends Controller {
private $registrationmodel;
    public function __construct() {

    }
    public function index(){
        header('Location: '.URLROOT.'/Dashboard');
    }
    public function contactus(){
        print_r('hello');
        $this->view('Patient/contactus_view');
    }
    public function labreport(){
        $this->view('Patient/labreport_view');
    }public function labreport_registered(){
        $this->view('Patient/labreportregistered_view');
    }
    public function userdetails(){
        $this->view('Patient/userdetails_view');
    }
    public function appointments(){
        $this->view('Patient/appointments_view');
    }
    public function registration(){
        $this->view('Patient/registration_view');
        $this->model('registration_model');
        $this->registrationmodel = new registrationmodel(new Database());
        if(isset($_POST['submit'])){
        $ID = isset($_POST['ID']) ? $_POST['ID'] : '';
$patient_name =$_POST['patient_name'];
$profilepicture = isset($_POST['profilepicture']) ? $_POST['profilepicture'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$registration_date = isset($_POST['registration_date']) ? $_POST['registration_date'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$nic = isset($_POST['nic']) ? $_POST['nic'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$guardianName = isset($_POST['guardianName']) ? $_POST['guardianName'] : '';
$guardianPhone = isset($_POST['guardianPhone']) ? $_POST['guardianPhone'] : '';
$guardianaddress = isset($_POST['guardianaddress']) ? $_POST['guardianaddress'] : '';
$guardiannic = isset($_POST['guardiannic']) ? $_POST['guardiannic'] : '';

        $this->registrationmodel->loginUser($ID, $patient_name,$profilepicture,$password,$registration_date,$age,$email,$gender,$address,$phone,$nic,$name,$guardianName,$guardianPhone,$guardianaddress,$guardiannic);
        }
    }
}
?>