<?php
class appointment extends Database{
    
    public function getAppoinmentbyPatient($doctor = Null){
        if (empty($doctor)) {
            $where = "Patient_Id = ".$_SESSION['User_Id'];
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        } else {
            $where = "Patient_Id = ".$_SESSION['User_Id'];
            $doctor = "Doctor_name = \"".$doctor . "\"";
        $this->setTable(Appointment);
        $result = $this->filterByDoctor($where, $doctor);
        }
        
        
        return $result;
    }
    public function getAppoinmentbyDate($date = Null)
    {
        if (empty($date)) {
            $where = 1;
            $this->setTable(Appointment);
            $result = $this->fetchData($where);
        } else {
            $where = 1;
            $date = "Date = \"" . $date . "\"";
            $this->setTable(Appointment);
            $result = $this->filter($where, $date);
        }
        return $result;
    }
    public function getAllAppointmentDetails(){
        $where = 1;
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        
        
        return $result;
    }
    public function getAppoinmentbyDoctor($doctor = Null)
    {
        if (empty($doctor)) {
            $where = 1;
            $this->setTable(Appointment);
            $result = $this->fetchData($where);
        } else {
            $where = 1;
            $doctor = "Doctor_name = \"" . $doctor . "\"";
            $this->setTable(Appointment);
            $result = $this->filterByDoctor($where, $doctor);
        }
        return $result;
    }
    public function getDoctors($doctor = Null)
    {
        if (empty($doctor)) {
            $where = 1;
            $this->setTable(Doctors);
            $result = $this->fetchData($where);
        } else {
            $where = 1;
            $doctor = "Doctor_name = \"" . $doctor . "\"";
            $this->setTable(Doctors);
            $result = $this->filterByDoctor($where, $doctor);
        }
        return $result;
    }
    public function getAppoinmentbyDateAndDoctor($date = Null, $doctor = Null)
    {

        if (empty($date) && empty($doctor)) {
            $where = 1;
            $this->setTable(Appointment);
            $result = $this->fetchData($where);
        } else {
            $where = 1;
            $date = "Date = \"" . $date . "\" AND Doctor_name = \"" . $doctor . "\"";

            $this->setTable(Appointment);
            $result = $this->filter($where, $date);
        }
        return $result;
    }
   
}
?>