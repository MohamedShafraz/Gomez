<?php

class UserlabassistantModel extends Database
{
    public function getUserDetails()
    {
        $where = "lab_assistants.id = " . $_SESSION['User_Id'];
        $this->setTable('lab_assistants');
        $data = $this->fetchUsers($where);

        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users['id'] = $row["id"];
            $users['userName'] = $row["Username"];
            $users['phonenumber'] = $row['phonenumber'];
            $users['NIC'] = $row['NIC'];
            $users['gender'] = $row['gender'];
            $users['age'] = $row['age'];
            $users['image'] = $_SESSION["USER"]["profilepicture"];
            $i++;
        }
        return $users;
    }
    public function updateUserDetails($details, $filecontent)
    {

        if ($_SESSION['userType'] == 'lab_assistant') {
            $where = "id = " . $_SESSION['User_Id'];
        }

        $this->setTable('lab_assistant');

        $users['GM_AD_User_Name'] = $_POST["Fullname"];
        $users['GM_AD_Phone_Number'] = $_POST['phonenumber'];
        // $users['NIC'] = $_POST['NIC'];
        $users['GM_AD_Gender'] = $_POST['gender'];
        $users['email'] = $_POST['email'];
        $users['age'] = $_POST['age'];
        $picture["profilepicture"] = $details;
        $data = $this->updateData($users, $where);
        $this->setTable('user_db');
        $where1 = "User_Id = " . $_SESSION['User_Id'];
        $data = $this->updateData($picture, $where1);

        $_SESSION["USER"]["profilepicture"] = $filecontent;
        // print_r($_SESSION["USER"]["profilepicture"]);
        return $details;
    }
}
