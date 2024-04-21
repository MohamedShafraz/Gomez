<?php
class appointment extends Database{
    
    public function getAppoinmentbyPatient(){
        $where = "Patient_ID = ".$_SESSION['User_Id'];
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        
        
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