<?php

class DoctorModel extends Database
{
    public function getUsersDetails()
    {
        $where = "1";
        $this->setTable('doctors');
        $data = $this->fetchData($where);

        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users[$i]['id'] = $row["Doctor_id"];
            $users[$i]['userName'] = $row["fullname"];
            $users[$i]['phonenumber'] = $row['phonenumber'];
            $users[$i]['specialization'] = $row['Specialization'];
            $i++;
        }
        return $users;
    }
    public function getUserDetails($id)
    {
        $where = "Doctor_id=" . $id;
        $this->setTable('doctors');
        $data = $this->fetchData($where);

        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users['id'] = $row["Doctor_id"];
            $users['userName'] = $row["fullname"];
            $users['phonenumber'] = $row['phonenumber'];
            $users['specialization'] = $row['Specialization'];
            $users['email'] = $row['email'];
            $users['age'] = $row['age'];
            $users['gender'] = $row['gender'];
            $i++;
        }
        return $users;
    }
}
