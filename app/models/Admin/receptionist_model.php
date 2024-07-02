<?php

class ReceptionistModel extends Database
{

    public function getUsersDetails()
    {
        $where = "1";
        $this->setTable('receptionists');
        $data = $this->fetchData($where);

        $receptionists = [];
        $i = 0;
        foreach ($data as $row) {
            $receptionists[$i]['id'] = $row["ID"];
            $receptionists[$i]['full name'] = $row["fullname"];
            $receptionists[$i]['phonenumber'] = $row['phonenumber'];
            $receptionists[$i]['NIC'] = $row['NIC'];
            $receptionists[$i]['age'] = $row['age'];
            $receptionists[$i]['gender'] = $row['gender'];

            $i++;
        }
        return $receptionists;
    }

    public function getUserDetails($id)
    {
        $where = "id=" . $id;
        $this->setTable('receptionists');
        $data = $this->fetchData($where);

        $receptionist = [];
        if (!empty($data)) {
            $row = $data[0]; // Assuming there is only one result
            $receptionist['id'] = $row["ID"];
            $receptionist['full name'] = $row["fullname"];
            $receptionist['phonenumber'] = $row['phonenumber'];
            $receptionist['NIC'] = $row['NIC'];
            $receptionist['age'] = $row['age'];
            $receptionist['gender'] = $row['gender'];
            $receptionist['email'] = $row['email'];
        }
        return $receptionist;
    }
}
