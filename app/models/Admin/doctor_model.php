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
            if (isset($row["Doctor_id"])) {
                $users['id'] = $row["Doctor_id"];
            }
            if (isset($row["fullname"])) {
                $users['full name'] = $row["fullname"];
            }
            if (isset($row['phonenumber'])) {
                $users['phonenumber'] = $row['phonenumber'];
            }
            if (isset($row['Specialization'])) {
                $users['specialization'] = $row['Specialization'];
            }
            if (isset($row['email'])) {
                $users['email'] = $row['email'];
            }
            if (isset($row['age'])) {
                $users['age'] = $row['age'];
            }
            if (isset($row['gender'])) {
                $users['gender'] = $row['gender'];
            }
            $i++;
        }
        return $users;
    }
}
