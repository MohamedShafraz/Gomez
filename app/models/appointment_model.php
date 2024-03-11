<?php
class appointment extends Database{
    
    public function getAppoinmentbyPatient(){
        $where = "Patient_ID=7";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        
        
        return $result;
    }
    
   
}
?>