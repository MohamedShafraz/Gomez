<?php
class appointment extends Controller
{
  private $appointmodel;
  public function index($make = null, $finalized = null)
  {

    $this->model('appointment_model');
    $this->appointmodel = new appointmentModel();
    $result = $this->appointmodel->getDoctors();
    if (isset($_GET['fullname']) || isset($_GET['date']) || isset($_GET['specialization'])) {
      if (($_GET['fullname'] || $_GET['date'] || $_GET['specialization']) && $make == "finalized") {
        $this->appointmodel->setTable(Doctors);
        $where = 'doctors.Doctor_id = ' . explode("-", $_GET['id'])[1];
        if (isset($_POST) && isset($_POST['submitted'])) {

          // $result = $this->appointmodel->fetchData($where);
          $this->appointmodel->setTable('session');
          $result1 = $this->appointmodel->fetchSession($where);

          $data['fullname'] = $_POST['name'];
          $data['date_of_birth'] = $_POST['date_of_birth'];
          $data['phonenumber'] = 0777123456;
          $user['Username']  = $data['fullname'] . $data['phonenumber'];
          $user['usertype'] = 'Patient';
          $this->appointmodel->setTable('user_db');
          // print_r($this->appointmodel->printId());
          // print_r(explode("-", $_GET['id'])[1]);
          $this->appointmodel->insertData($user);
          $data['ID'] = $this->appointmodel->printId();
          $this->appointmodel->setTable('patients');
          $this->appointmodel->insertData($data);
          $appointment['session_id'] = explode("-", $_GET['id'])[1];
          $appointment['Patient_Id'] =  $data['ID'];
          $this->appointmodel->setTable('appointment');
          $this->appointmodel->insertData($appointment);
          //   print_r($result1[0]['session_id']);
          //  print_r('<br>');

          session_start();
          $_SESSION['status'] = "<script>alert('appointment created successfully')</script>";
          header("location: " . URLROOT);
          exit();
          // $this->appointmodel->insertData();
        }
        // print_r(explode("-",$_GET['id'])[1]);
        // $this->appointmodel->fetchData();
        $this->view('patientdetail_view');
      } else if (($_GET['fullname'] || $_GET['date'] || $_GET['specialization']) && $make == 'make') {
        if ($_GET['date']) {

          $_GET['date'] = DateTime::createFromFormat('Y-m-d', $_GET['date']);
          $_GET['date'] = $_GET['date']->format('Y-m-d');

          // $result = $this->appointmodel->getAllAppoinmentbyDate($where);
        }
        $result = $this->appointmodel->getAllAppoinmentbyDoctor($_GET['fullname'], $_GET['specialization'], $_GET['date']);
        if (empty($result)) {
          $result = $this->appointmodel->getDoctor($_GET['fullname']);
        }
        // print_r($result);
        $this->view('bookdoc_view', $result);
        exit();
      } else {

        // else{

        // $this->view('appointdoctordetail_view'); 

        // }
        //   // print_r(sizeof($result));
        $result = $this->appointmodel->getAllDoctorsforSession($_GET['fullname'], $_GET['specialization'], $_GET['date']);
        $this->view('appointdoctordetail_view', $result);
        exit();
      }
    }
    if ($make == "make") {

      $this->view('bookdoc_view', $result);
    }
  }
}
