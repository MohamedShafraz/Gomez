<?php

class UserModel extends Database
{
    public function getUserDetails()
    {

        $where = "Owner_ID = " . $_SESSION['User_Id'];
        $this->setTable('owner');
        $data = $this->fetchUsers($where);

        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users['id'] = $row["Owner_ID"];
            $users['userName'] = $row["Username"];
            $users['phonenumber'] = $row['phone_number'];
            $users['NIC'] = $row['nic'];
            $users['gender'] = $row['gender'];
            $users['email'] = $row['Email'];
            $users['age'] = $row['age'];
            $users['image'] = $row["profilepicture"];
            $i++;
        }
        return $users;
    }
    public function updateUserDetails($details = Null, $filecontent = Null)
    {

        $where = "Owner_ID = " . $_SESSION['User_Id'];
        $users = [];
        $data = null;
        if (isset($_POST['email'])) {
            $this->setTable('owner');
            $users['name'] = $_POST["Fullname"];
            $users['phone_Number'] = $_POST['phonenumber'];
            // $users['NIC'] = $_POST['NIC'];
            $users['gender'] = $_POST['gender'];

            $users['age'] = $_POST['age'];
            $data = $this->updateData($users, $where);
            $user['email'] = $_POST['email'];
            $this->setTable('owner');
            $where = "User_ID = " . $_SESSION['User_Id'];
            $data = $this->updateData($user, $where);
        }
        if ($details != null) {
            $picture["profilepicture"] = $details;

            $this->setTable('user_db');
            $where1 = "User_Id = " . $_SESSION['User_Id'];
            $data = $this->updateData($picture, $where1);
            $_SESSION["USER"]["profilepicture"] = $filecontent;
        }
        // print_r($_SESSION["USER"]["profilepicture"]);
        return $details;
    }
}
