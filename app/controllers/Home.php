<?php
class Home extends Controller {
    private $appointmodel;
    public function __construct() {
          session_start(); 
    }
    public function index(){
        $this->view('home_view');
    }
    public function about(){
        $this->model('appointment_model');
        $this->appointmodel = new appointment();
        $this->appointmodel->getAppoinmentbyPatient(new Database()); 
        exit();
    }
}
/*
 *param = hello c
 controller-> method (parameter = param) 
 */
