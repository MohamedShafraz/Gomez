<?php

class LabAssistantModel extends Database{
  public function getUserDetails() {
    $where = "1";
    $this->setTable('lab_assistants');
$data = $this->fetchData($where);
    
    $users = [];
    $i = 0;
    foreach ($data as $row) {
        $users[$i]['userName'] = $row["fullname"];
        $users[$i]['phonenumber'] = $row['phonenumber'];
        $users[$i]['NIC'] = $row['NIC'];
        $i++;
    }
    return $users;
    
}
}
?>