<?php

class PatientModel extends Database{
  public function getUserDetails() {
    $where = "1";
    $this->setTable('patients');
$data = $this->fetchData($where);
    
    $users = [];
    $i = 0;
    foreach ($data as $row) {
        $users[$i]['age'] = $row['age'];
        $users[$i]['gender'] = $row['gender'];
        $users[$i]['id'] = $row["ID"];
        $users[$i]['userName'] = $row["username"];
        $users[$i]['type'] = $row['type']??'unregister';
        $users[$i]['phonenumber'] = $row['phonenumber'];
        $users[$i]['profilepicture'] = $row['profilepicture'];
        $users[$i]['email'] = $row['email'];
        $i++;
    }
    return $users;
    
}
}
?>