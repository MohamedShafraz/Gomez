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
    


}



















?>