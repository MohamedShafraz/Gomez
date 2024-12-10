<?php

class UserPatientModel extends Database
{
    public function getUserDetails()
    {

        $where = "ID = " . $_SESSION['User_Id'];
        $this->setTable('patients');
        $data = $this->fetchData($where);

        $users = [];

        $i = 0;
        foreach ($data as $row) {
            $users['id'] = $row["ID"];
            $users['userName'] = $row["fullname"];
            $users['phonenumber'] = $row['phonenumber'];
            $users['NIC'] = $row['nic'];
            $users['gender'] = $row['gender'];
            $users['email'] = $row['Email'];
            $users['age'] = $row['age'];
            $users['image'] = $_SESSION["USER"]["profilepicture"];
            $i++;
        }

        return $users;
    }
    public function updateUserDetails($details, $filecontent)
    {
        $where = "ID = " . $_SESSION['User_Id'];
        $users = [];
        $data = null;
        if (isset($_POST['email'])) {
            $this->setTable(Patients);
            $users['fullname'] = $_POST["Fullname"];
            $users['phonenumber'] = $_POST['phonenumber'];
            // $users['NIC'] = $_POST['NIC'];
            $users['gender'] = $_POST['gender'];

            $users['age'] = $_POST['age'];
            $data = $this->updateData($users, $where);
            $this->setTable(User);
            $where = "User_Id = " . $_SESSION['User_Id'];
            $userd['email'] = $_POST['email'];
            $data = $this->updateData($userd, $where);
        }
        if ($details != null) {
            $picture["profilepicture"] = $details;

            $this->setTable('user_db');
            $where1 = "User_Id = " . $_SESSION['User_Id'];
            $data = $this->updateData($picture, $where1);
            $_SESSION["USER"]["profilepicture"] = $filecontent;
        }
        return $data;
    }
}
