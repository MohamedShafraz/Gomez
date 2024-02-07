<?php

class registrationmodel extends Database{
  public function loginUser($patient_name,$password,$registration_date,$date_of_birth,$email,$gender,$address,$phone,$nic) {
    
    $where = "INSERT INTO `patients`(`patient_name`, `password`, `registration_date`, `date_of_birth`, `email`, `gender`, `address`, `phone`, `nic`) VALUES('$patient_name','$password','$registration_date','$date_of_birth','$email','$gender','$address','$phone','$nic')";
    print('where');
    $result = $this->executeQuery ($where);
    return $result;
}
}