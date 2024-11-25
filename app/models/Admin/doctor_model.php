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
        $where = "User_Id=" . $id;
        $this->setTable(User);
        $data1 = $this->fetchData($where);
        $data = array_merge($data, $data1);

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
            if (isset($row['Email'])) {
                $users['email'] = $row['Email'];
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
    public function updateUserDetails($details, $filecontent)
    {
        $where = "ID = " . $_SESSION['User_Id'];
        $this->setTable('gm_admin');
        print_r($details);
        // $users['userName'] = $_POST["Fullname"];
        // $users['GM_AD_Phone_Number'] = $_POST['phonenumber'];

        // $users['gender'] = $_POST['gender'];
        // // $users['email'] = $_POST['email'];
        // $users['age'] = $_POST['age'];
        // $picture["profilepicture"] = $details;
        // $data = $this->updateData($users, $where);
        // $this->setTable('user_db');
        // $where1 = "User_Id = " . $_SESSION['User_Id'];
        // $data = $this->updateData($picture, $where1);

        // $_SESSION["USER"]["profilepicture"] = $filecontent;
        // // print_r($_SESSION["USER"]["profilepicture"]);
        // return $data;
    }
}
