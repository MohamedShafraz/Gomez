<?php

class DoctorController extends Controller {
    public function index() {
        if(!isset($_SESSION)){
            session_start();}
            
        $this->view('Doctor/dashboard_view');
    }

    public function ViewAppointment() {
        $this->view('Doctor/appointment_view');
    }

    public function ViewPrescription() {
        $this->view('Doctor/prescription_view');
    }

    public function ViewReminder() {
        $this->view('Doctor/reminder_view');
    }






























































































}
     















?>