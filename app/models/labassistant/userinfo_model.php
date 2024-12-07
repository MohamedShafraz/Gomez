<?php

class UserlabassistantModel extends Database
{
    public function getUserDetails()
    {

        $where = "ID = " . $_SESSION['User_Id'];
        $this->setTable('lab_assistants');
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
        $this->setTable('gm_admin');

        $users['userName'] = $_POST["Fullname"];
        $users['GM_AD_Phone_Number'] = $_POST['phonenumber'];
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

    public function fetchLabAssistant()
    {
        $where = "ID = " . $_SESSION['User_Id'];

        $query = "SELECT * FROM lab-assistants JOIN user_db ON lab-assistants.`ID` = user_db.`User_Id` WHERE " . $where;

        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }

        return $data;
    }
}
