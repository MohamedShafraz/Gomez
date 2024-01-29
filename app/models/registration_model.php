<?php

class registrationmodel extends Database{
  public function loginUser($ID, $patient_name,$profilepicture,$password,$registration_date,$age,$email,$gender,$address,$phone,$nic,$name,$guardianName,$guardianPhone,$guardianaddress,$guardiannic) {

    $where = "INSERT INTO `patients`(`ID`, `patient_name`, `profilepicture`, `password`, `registration_date`, `age`, `email`, `gender`, `address`, `phone`, `nic`, `name`, `guardianName`, `guardianPhone`, `guardianaddress`, `guardiannic`) VALUES (`ID`, `patient_name`, `profilepicture`, `password`, `registration_date`, `age`, `email`, `gender`, `address`, `phone`, `nic`, `name`, `guardianName`, `guardianPhone`, `guardianaddress`, `guardiannic`)";
    $result = $this->executeQuery ($where);
    return $result;
}
}
?>