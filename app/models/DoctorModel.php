<?php

class DoctorModel extends Database{

    public function getDoctor($username)
    {
        $where = "Username='$username'";
        $this->setTable(Doctors);
        $result = $this->fetchData($where);
        return $result;}




    




}   

















?>