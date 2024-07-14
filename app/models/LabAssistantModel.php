<?php

class LabAssistantModel extends Database
{

    public function getLabAssistant($username)
    {
        
        $where = "Username='$username'";
        $this->setTable("lab_assistants");
        $result = $this->fetchData($where);
        
        return $result;
    }


    public function updatelabassistant($id, $data)
    {
        $query = "UPDATE lab_assistants SET fullname='$data[fullname]', email='$data[email]', phonenumber='$data[phonenumber]',Username='$data[Username]' WHERE id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function updatelabasisstantinuser($id, $data)
    {
        $query = "UPDATE user_db SET Username='$data[Username]',Email='$data[email]' WHERE User_Id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function getUserData($id)
    {
        $where = "User_Id='$id'";
        $this->setTable(User);
        $result = $this->fetchData($where);
        return $result;
}

public function getReportData()
    {
        $where = 1;
        $this->setTable(Report);
        $result = $this->fetchData($where);
        return $result;
}
public  function sendLabreceiptDetails($data){

    $where = 1;
    $this->setTable(Report);
    $result = $this->insertData($data);
}

public function fetchReportData($id)
    {
        $where = "refno='$id'";
        $this->setTable(Report);
        $result = $this->fetchData($where);
        return $result;
}
public function getUserCounts()
    {
        $where = "1";
        $this->setTable(Report);
        $data = $this->getcountRef($where);
        
        $users = [];
        foreach ($data as $row) {
            $users['totalnumber'] = $row["count"];
        }
        
        return $users;
        
    }
    public function getCountPendings()
    {
        $where = "1 GROUP BY status";
        $this->setTable(Report);
        $data = $this->getcountPending($where);
        
        $users2 = [];
        foreach ($data as $row) {
            $users2[$row['status']] = $row["count"];
        }
        
        return $users2;
        
    }
    public  function sendReport($data){
        $where = 1;
        $this->setTable(Report);
        $result = $this->insertData($data);
    }
    public  function updateStatus($data){
        $where = 1;
        $this->setTable(Report);
        $result = $this->insertData($data);
    }
    
}



















?>