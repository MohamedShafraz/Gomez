<?php

class registrationmodel extends Database{
  public function loginUser($fullname,$password,$registration_date,$date_of_birth,$email,$gender,$address,$phonenumber,$nic,$Username) {
    $where1 = "INSERT INTO user_db(`Username`,`email`,`password`,`usertype`) VALUES('$Username','$email','$password','Patient')";
    $result1 = $this->executeQuery ($where1);
    $this->setTable('user_db');
    $result2 = $this->fetchData("`Username` = '$Username'");
    
    // $where2 =  "SELECT * FROM `user_db` WHERE `Username` = $Username";
    // $result2 = $this->executeQuery ($where2);
    
    $registration_date = date("Y-m-d", strtotime($registration_date));
    // print_r($registration_date);
    $ID = $result2[0]['User_Id'];
   $where3 = "INSERT INTO `patients`(`ID`,`fullname`, `registration_date`, `date_of_birth`, `gender`, `address`, `phonenumber`, `nic`) VALUES('$ID','$fullname','$registration_date','$date_of_birth','$gender','$address','$phonenumber','$nic')";
    $result3 = $this->executeQuery ($where3);
   
    // $result = $this->executeQuery ($where);
    // print_r($result2);
    // print_r($result);
    // return $result1;
}
}