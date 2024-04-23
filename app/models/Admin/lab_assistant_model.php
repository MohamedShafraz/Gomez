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
public function getUserDetails($id)
    {
        $where = "id=" . $id;
        $this->setTable('lab_assistants');
        $data = $this->fetchData($where);

        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users['id'] = $row["id"];
            $users['userName'] = $row["fullname"];
            $users['phonenumber'] = $row['phonenumber'];
            $users['email'] = $row['email'];
            $users['nic'] = $row['NIC'];
            $users['gender'] = $row['gender'];
            $i++;
        }
        return $users;
    
    }
    public function getReportData()
    {
        $where = 1;
        $this->setTable('report');
        $data = $this->fetchData($where);

        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users['refno'] = $row["refno"];
            $users['patient_id'] = $row["patient_id"];
            $users['testname'] = $row['testname'];
            $users['status'] = $row['status'];
            $users['passcode'] = $row['passcode'];
            $users['filename'] = $row['filename'];
            $i++;
        }
        return $users;
}

?>