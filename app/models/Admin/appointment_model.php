<?php
class appointmentAdminModel extends Database
{
    public function getAppoinmentbyDoctor($doctor = Null)
    {
        if (empty($doctor)) {
            $where = 1;
            $this->setTable(Appointment);
            $result = $this->fetchData($where);
        } else {
            $where = 1;
            $doctor = "Doctor_name = \"" . $doctor . "\"";
            $this->setTable(Appointment);
            $result = $this->filterByDoctor($where, $doctor);
        }
        return $result;
    }
    public function getAppoinmentbyDate($date = Null)
    {
        if (empty($date)) {
            $where = 1;
            $this->setTable(Appointment);
            $result = $this->fetchData($where);
        } else {
            $where = 1;
            $date = "Date = \"" . $date . "\"";
            $this->setTable(Appointment);
            $result = $this->filter($where, $date);
        }
        return $result;
    }
    public function getAppoinmentbyDateAndDoctor($date = Null, $doctor = Null)
    {

        if (empty($date) && empty($doctor)) {
            $where = 1;
            $this->setTable(Appointment);
            $result = $this->fetchData($where);
        } else {
            $where = 1;
            $date = "Date = \"" . $date . "\" AND Doctor_name = \"" . $doctor . "\"";

            $this->setTable(Appointment);
            $result = $this->filter($where, $date);
        }
        return $result;
    }
}
