<?php

class DoctorModel extends Database
{

    public function getDoctor($username)
    {
        $where = "Username='$username'";
        $this->setTable(Doctors);
        $result = $this->fetchData($where);

        return $result;
    }

    public function getAppoinmentsbyDoctor($id)
    {
        $where = "doctor_id='$id'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);

        return $result;
    }

    public function getAppointment($id)
    {
        $where = "Appointment_Id='$id'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getPatient($id)
    {
        $where = "ID='$id'";
        $this->setTable(Patients);
        $result = $this->fetchData($where);
        return $result;
    }

    public function addPrescription($data)
    {
        $this->setTable(Prescription);
        $result = $this->insertData($data);
        return $result;
    }

    public function getPrescriptionbyDoctor($id)
    {
        $where = "doctorid='$id'";
        $this->setTable(Prescription);
        $result = $this->fetchData($where);
        return $result;
    }


    public function getAppoinmentbyID($id)
    {
        $where = "Appointment_Id='$id'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getPrescriptionbyID($id)
    {
        $where = "prescription_id='$id'";
        $this->setTable(Prescription);
        $result = $this->fetchData($where);
        return $result;
    }
}
