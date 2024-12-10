<?php
class prescription_model extends Database
{

    public function getPatientbyPatiend($id)
    {
        $where = "ID='$id'";
        $this->setTable(Patients);
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

    public function getPrescriptionbyID($id)
    {
        echo "<script>console.log(" . $id . ")</script>";
        $where = "prescriptionnumber='$id'";
        $this->setTable(Prescription);
        $result = $this->fetchData($where);
        return $result;
    }


    public function getPrescriptionbyAppointment($id)
    {
        $where = "Appointment_Id='$id'";
        $this->setTable(Prescription);
        $result = $this->fetchData($where);
        return $result;
    }
    public function getMedicinebyUniqeid($unique_id)
    {
        $where = "unique_id='$unique_id'";
        $this->setTable(Medicine);
        $result = $this->fetchData($where);
        return $result;
    }
}
