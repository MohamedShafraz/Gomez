<?php

class UserModel extends Database
{
    public function getUserDetails()
    {

        $where = "GM_AD_ID = " . $_SESSION['User_Id'];
        $this->setTable('gm_admin');
        $data = $this->fetchData($where);

        $users = [];
        $i = 0;
        foreach ($data as $row) {
            $users['id'] = $row["GM_AD_ID"];
            $users['userName'] = $row["GM_AD_User_Name"];
            $users['phonenumber'] = $row['GM_AD_Phone_Number'];
            $users['NIC'] = $row['NIC'];
            $users['gender'] = $row['GM_AD_Gender'];
            $users['email'] = $row['email'];
            $users['age'] = $row['age'];
            $users['image'] = $_SESSION["USER"]["profilepicture"];
            $i++;
        }
        return $users;
    }
    public function updateUserDetails($details)
    {
        $where = "GM_AD_ID = " . $_SESSION['User_Id'];
        $this->setTable('gm_admin');

        $users['GM_AD_User_Name'] = $_POST["Fullname"];
        $users['GM_AD_Phone_Number'] = $_POST['phonenumber'];
        // $users['NIC'] = $_POST['NIC'];
        $users['GM_AD_Gender'] = $_POST['gender'];
        $users['email'] = $_POST['email'];
        $users['age'] = $_POST['age'];
        $users["profilepicture"] = $details;
        $data = $this->updateData($users, $where);
        return $details;
    }
}
