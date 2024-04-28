<?php
use LDAP\Result;
class receptionist extends Controller {
private $registrationmodel;
private $contactusmodel;
private $appointmodel;
    public function __construct() {
        session_start();
        if(!isset($_SESSION["userType"])){
            header("location:".URLROOT . "/users/login");
        }

    }
    public function index(){
        header('Location: '.URLROOT.'/Dashboard');
        exit();
    }
    
    public function userdetails(){
        $this->view('receptionist/userdetail_view');
        exit();
    }
    public function appointments($make=null,$more1=null,$more2=null,$create=null){
        if (isset($_SESSION["userType"])) {
            // Load the DashboardModel
            $this->model('appointment_model');
        $this->appointmodel = new appointmentModel();
        $result = $this->appointmodel->getAllDoctorsforSession();  
       
        // $resultUser = $this->appointmodel->getUsernamebyPatient(new Database());
       // print_r($resultUser);
        // $this->view('Patient/appointments_view',$result);
        // $this->view('Patient/dashboard_view',$resultUser);
        if($make=='more1'){
            $result = $this->appointmodel->getAppoinmentbyDoctors($_GET['doctor']);
            if(isset($_GET['doctor'])){
                
                $result2 = $this->appointmodel->checkSessionbyDoctor($result[0]['Doctor_id']);
                // print_r([0=>$result,1=>$result2]);
                $this->view('receptionist/session_date_view',[0=>$result,1=>$result2]);
                
            }
            if(isset($_POST['create'])&&isset($_POST['Date'])){
                $data['date'] = $_POST['Date'];
                $start_time = $_POST['start_time'];
                $endtime = date('H:i:s', strtotime($start_time . ' +1 hour'));
                $data['start_time'] = date('H:i:s', strtotime($start_time));;
                $data['end_time'] = $endtime;
                $data['Doctor_Id'] = $result[0]['Doctor_id'];
                $this->appointmodel->setTable('session');
                $result2 = $this->appointmodel->insertData($data);
                $error = $this->appointmodel->printErrno();
                if($error ='1062'){
                    echo "<script>
                    alert(' Session Already Created');
                </script>";
                }
                else{
                echo "<script>
                    alert(' Session Created');
                </script>";
                }
            }
            
            exit();
        }
        if($make== 'create'){
            
            $this->view('receptionist/create_session_view');
            exit();
        }
        if($make== 'more2'){
            if(isset($_GET['doctor'])){
                $result = $this->appointmodel->getAppoinmentOneDoctor($_GET['doctor']);

                // print_r($result);

                 $this->view('receptionist/session_appointments_view',$result);
            }
            
            exit();
            

            
        }
        else{
           
            // print_r($result);
        $this->view('receptionist/appointment_view',$result);
        // print_r("hello");
        }
        exit();
        } else {
            header("location:" . URLROOT . "/users/login");
        }
    }
    
    public function dashboard(){
        $this->view('receptionist/dashboard_view');
        exit();
    }
    public function labreports(){
        $this->view('receptionist/labreport_view');
        exit();
    }
    
    
}
?>