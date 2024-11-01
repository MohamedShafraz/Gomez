<?php

class PatientModel extends Database
{
    public function getUsersDetails()
    {
        // session_start();
        $where = "1";
        $this->setTable('patients');
        $data = $this->fetchUsers($where);
        // $where1 = "1";
        // $this->setTable('patients');
        // $data = $this->fetchData($where);
        $users = [];
        // $i = 0;
        for ($i = 0; $i < sizeof($data); $i++) {
            $users[$i]['userName'] = $data[$i]["fullname"];
            $users[$i]['type'] = $data[$i]['type'] ?? 'unregister';
            $users[$i]['phonenumber'] = $data[$i]['phonenumber'];
            $users[$i]['age'] = $data[$i]['age'];
            $users[$i]['gender'] = $data[$i]['gender'];
            $users[$i]['id'] = $data[$i]["ID"];

            $users[$i]['email'] = $data[$i]['Email'];
            // $i++;
        }
        // print_r($users);
        return $users;
    }
    public function getUserDetails($id)
    {

        $where = "ID=" . $id;
        $this->setTable('patients');
        $data = $this->fetchUsers($where);
        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users['Fullname'] = $row["fullname"];
            $users['type'] = $row['type'] ?? 'unregister';
            $users['Phonenumber'] = $row['phonenumber'];
            $users['Age'] = $row['age'];
            $users['Gender'] = $row['gender'];
            $users['id'] = $row["ID"];
            $users['Email'] = $row['Email'];
            $i++;
        }
        return $users;
    }
    public function updateUserDetails($id, $userDetails)
    {
        $where = 'ID=' . $id;
        print_r($_POST);
        foreach ($userDetails as $userDetail) {
            print_r($userDetail);
        }
    }
}
