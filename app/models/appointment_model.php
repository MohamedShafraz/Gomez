<?php
class appointment extends Database{
    
    public function getAppoinmentbyPatient($doctor = Null){
        if (empty($doctor)) {
            $where = "User_Id = ".$_SESSION['User_Id'];
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        } else {
            $where = "User_Id = ".$_SESSION['User_Id'];
            $doctor = "Doctor_name = \"".$doctor . "\"";
        $this->setTable(Appointment);
        $result = $this->filterByDoctor($where, $doctor);
        }
        
        
        return $result;
    }
    public function getAllAppointmentDetails(){
        $where = 1;
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        
        
        return $result;
    }
   
}
?>