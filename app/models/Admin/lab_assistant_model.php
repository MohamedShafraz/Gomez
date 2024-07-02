<?php

class LabAssistantModel extends Database
{
    public function getUsersDetails()
    {
        $where = "1";
        $this->setTable('lab_assistants');
        $data = $this->fetchData($where);

        $labAssistants = [];
        $i = 0;
        foreach ($data as $row) {
            $labAssistants[$i]['id'] = $row["id"];
            $labAssistants[$i]['full name'] = $row["fullname"];
            $labAssistants[$i]['phonenumber'] = $row['phonenumber'];
            $labAssistants[$i]['NIC'] = $row['NIC'];

            $labAssistants[$i]['gender'] = $row['gender'];

            $i++;
        }
        return $labAssistants;
    }

    public function getUserDetails($id)
    {
        $where = "id=" . $id;
        $this->setTable('lab_assistants');
        $data = $this->fetchData($where);

        $labAssistant = [];
        if (!empty($data)) {
            $row = $data[0]; // Assuming there is only one result
            $labAssistant['id'] = $row["id"];
            $labAssistant['full name'] = $row["fullname"];
            $labAssistant['phonenumber'] = $row['phonenumber'];
            $labAssistant['NIC'] = $row['NIC'];

            $labAssistant['gender'] = $row['gender'];
        }
        return $labAssistant;
    }
}
