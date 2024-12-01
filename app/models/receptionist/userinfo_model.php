<?php

class UserReceptionistModel extends Database
{
    public function getUserDetails()
    {

        $where = "receptionist_id = " . $_SESSION['User_Id'];
        $this->setTable('receptionists');
        $data = $this->fetchData($where);

        $users = [];
        
        $i = 0;
        foreach ($data as $row) {
            $users['receptionist_id'] = $row["receptionist_id"];
            $users['userName'] = $row["fullname"];
            $users['phonenumber'] = $row['phonenumber'];
            // $users['NIC'] = $row['nic'];
            // $users['gender'] = $row['gender'];
            // $users['email'] = $row['Email'];
            // $users['age'] = $row['age'];
            $users['image'] = $_SESSION["USER"]["profilepicture"];
            $i++;
        }
        
        return $users;
    }
    public function updateUserDetails($details, $filecontent)
    {
        $where = "receptionist_id = " . $_SESSION['User_Id'];
        $this->setTable('receptionists');

        $users['fullname'] = $_POST["Fullname"];
        $users['phonenumber'] = $_POST['phonenumber'];
        // $users['NIC'] = $_POST['NIC'];
        $users['gender'] = $_POST['gender'];
        // $users['email'] = $_POST['email'];
        $users['age'] = $_POST['age'];
        $picture["profilepicture"] = $details;
        $data = $this->updateData($users, $where);
        $this->setTable('user_db');
        $where1 = "User_Id = " . $_SESSION['User_Id'];
        $data = $this->updateData($picture, $where1);

        $_SESSION["USER"]["profilepicture"] = $filecontent;
        // print_r($_SESSION["USER"]["profilepicture"]);
        return $data;
    }
}
