<?php

class PatientModel extends Database{
  public function getUserDetails() {
    $where = "1";
    $this->setTable('patients');
$data = $this->fetchData($where);
    
    $users = [];
    $i = 0;
    foreach ($data as $row) {
        $users[$i]['userName'] = $row["username"];
        $users[$i]['type'] = $row['type']??'unregister';
        $users[$i]['phonenumber'] = $row['phonenumber'];
        $i++;
    }
    return $users;
    
}
}
?>