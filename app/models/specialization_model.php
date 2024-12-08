<?php

class SpecializationModel extends Database
{
    public function getSpecialization()
    {
        $this->setTable('specialization');
        $where = 1;
        $result = $this->fetchData($where);
        return $result;
    }
}
