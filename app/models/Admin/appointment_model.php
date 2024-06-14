<?php
class appointmentAdminModel extends Database
{
    public function getAppoinmentbyDoctor($doctor = Null)
    {
        if (empty($doctor)) {
            $where = 1;
            $this->setTable(Doctors);
            $result = $this->filter($where, 1);
        } else {
            $where = 1;
            $doctor = "fullname REGEXP \"" . $doctor . "*\" ";
            $this->setTable(Doctors);
            $result = $this->filter($where, $doctor);
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
            $date = "Date = \"" . $date . "\" AND fullname REGEXP \"" . $doctor . "*\"";

            $this->setTable(Appointment);
            $result = $this->filter($where, $date);
        }
        return $result;
    }
}
