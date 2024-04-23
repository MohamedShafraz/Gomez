<?php

class PatientModel extends Database
{
    public function getUsersDetails()
    {
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
            $users[$i]['type'] = $row['type'] ?? 'unregister';
            $users[$i]['phonenumber'] = $row['phonenumber'];
            $users[$i]['profilepicture'] = $row['profilepicture'];
            $users[$i]['email'] = $row['email'];
            $i++;
        }
        return $users;
    }
    public function getUserDetails($id)
    {

        $where = "ID=" . $id;
        $this->setTable('patients');
        $data = $this->fetchData($where);

        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users['age'] = $row['age'];
            $users['gender'] = $row['gender'];
            $users['id'] = $row["ID"];
            $users['userName'] = $row["username"];
            $users['type'] = $row['type'] ?? 'unregister';
            $users['phonenumber'] = $row['phonenumber'];
            $users['profilepicture'] = $row['profilepicture'];
            $users['email'] = $row['email'];
            $i++;
        }
        return $users;
    }
}
