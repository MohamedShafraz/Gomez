<?php

class contactusmodel extends Database{
  public function send($name,$mobile,$email,$message) {
    
    $where = "INSERT INTO `contact_form`(`name`, `mobile`,  `email`, `message`) VALUES('$name','$mobile','$email','$message')";
    
    $result = $this->executeQuery ($where);
    return $result;
}
}