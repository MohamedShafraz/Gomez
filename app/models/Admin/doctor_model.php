<?php

class DoctorModel extends Database{
  public function getUserDetails() {
    $where = "1";
    $this->setTable('doctors');
$data = $this->fetchData($where);
    
    $users = [];
    $i = 0;
    foreach ($data as $row) {
        $users[$i]['userName'] = $row["fullname"];
        $users[$i]['phonenumber'] = $row['phonenumber'];
        $users[$i]['specialization'] = $row['Specialization'];
        $i++;
    }
    return $users;
    
}
}
?>