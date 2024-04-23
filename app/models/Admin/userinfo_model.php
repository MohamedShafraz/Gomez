<?php

class UserModel extends Database
{
    public function getUserDetails()
    {
        $where = "1";
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
            $i++;
        }
        return $users;
    }
}
