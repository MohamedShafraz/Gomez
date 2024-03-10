<?php

class ReceptionistModel extends Database{
  public function getUserDetails() {
    $where = "1";
    $this->setTable('receptionists');
$data = $this->fetchData($where);
    
    $users = [];
    $i = 0;
    foreach ($data as $row) {
        $users[$i]['id'] = $row["receptionist_id"];
        $users[$i]['userName'] = $row["fullname"];
        $users[$i]['phonenumber'] = $row['phonenumber'];
        $users[$i]['NIC'] = $row['NIC'];
        $i++;
    }
    return $users;
}
}
?>