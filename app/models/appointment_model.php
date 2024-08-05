<?php

use LDAP\Result;

class appointmentModel extends Database
{

    public function getAppoinmentbyPatient($doctor = Null)
    {
        if (empty($doctor)) {
            $where = "Patient_Id = " . $_SESSION['User_Id'];
            $this->setTable(Appointment);
            $result = $this->fetchAppointment($where);
        } else {
            $where = "Patient_Id = " . $_SESSION['User_Id'];
            $doctor = "fullname REGEXP \"" . $doctor . "*\"";
            $this->setTable(Appointment);
            $result = $this->fetchAppointment($where, $doctor);
        }


        return $result;
    }
    public function getAppoinmentbyDoctors($doctor = Null)
    {

        $where = 1;
        $doctor = "user_db.Username REGEXP \"" . $doctor . "*\"";
        $this->setTable(Appointment);
        $result = $this->fetchSession($where, $doctor);


        return $result;
    }

    public function getAppoinmentOneDoctor($doctor = Null)
    {

        $where = 1;
        $doctor = "user_db.Username REGEXP \"" . $doctor . "*\"";
        $this->setTable(Appointment);
        $result = $this->fetchAppointmentbydoctor($where, $doctor);


        return $result;
    }
    public function getAllAppoinmentbyDoctor($doctor = Null, $specialization = Null, $date = Null)
    {
        $where = 1;
        if (empty($doctor) && empty($specialization) && empty($date)) {

            $this->setTable(Doctors);
            $result = $this->fetchDataByUser($where);
        } else {
            if (!empty($doctor)) {
                $doctor = "fullname REGEXP \"" . $doctor . "*\"";

                $where .= ' AND ' . $doctor;
            }
            if (!empty($specialization)) {
                $specialization = "Specialization REGEXP \"" . $specialization . "*\"";
                $where .= ' AND ' . $specialization;
            }
            if (!empty($date)) {
                $date = "date = \"" . $date . "\"";
                $where .= ' AND ' . $date;
            }
            $where .= " AND session.`date` >='" . date('Y/m/d') . "'";
            $this->setTable(Doctors);
            $result = $this->fetchDataByUser($where, 1);
        }


        return $result;
    }



    public function getAllDoctorsforSession($doctor = Null, $specialization = Null, $date = Null)
    {
        $where = 1;
        if (empty($doctor) && empty($specialization) && empty($date)) {

            $this->setTable(Doctors);
            $result = $this->fetchdoctorforsession($where);
        } else {
            if (!empty($doctor)) {
                $doctor = "user_db.Username REGEXP \"" . $doctor . "\"";

                $where .= ' AND ' . $doctor;
                $result = $this->fetchdoctorforsession($where, 1);
            }

            $this->setTable(Doctors);
            // $result = $this->fetchDataByUser($where, 1);
        }


        return $result;
    }
    public function getAllAppointmnetforDoctor($doctor = Null, $specialization = Null, $date = Null)
    {
        $where = 1;
        if (empty($doctor) && empty($specialization) && empty($date)) {

            $this->setTable(Doctors);
            $result = $this->fetchAppointmentByDoctors($where);
        } else {
            if (!empty($doctor)) {
                $doctor = "users_db.Username = \"" . $doctor . "\"";

                $where .= ' AND ' . $doctor;
                $result = $this->fetchAppointmentByDoctors($where, 1);
            }

            $this->setTable(Doctors);
            // $result = $this->fetchDataByUser($where, 1);
        }


        return $result;
    }
    public function getAllAppoinmentbyDate($date = Null)
    {
        if (empty($date)) {
            $where = 1;
            $this->setTable(Doctors);
            $result = $this->fetchDataByUser($where);
        } else {
            $where = 1;
            $date = "date = \"" . $date . "\"";
            $this->setTable(Doctors);
            $result = $this->fetchDataByUser($where, $date);
        }
        return $result;
    }
    public function getAllAppoinmentbySpecialization($doctor = Null)
    {
        if (empty($doctor)) {
            $where = 1;
            $this->setTable(Doctors);
            $result = $this->fetchDataByUser($where);
        } else {
            $where = 1;
            $doctor = "Specialization REGEXP \"" . $doctor . "*\"";
            $this->setTable(Doctors);
            $result = $this->fetchDataByUser($where, $doctor);
        }


        return $result;
    }
    public function getAppoinmentbyDate($date = Null)
    {
        if (empty($date)) {
            $where = 1;
            $this->setTable(Appointment);
            $result = $this->fetchAppointment($where);
        } else {
            $where = "Patient_Id = " . $_SESSION['User_Id'];
            $date = "date = \"" . $date . "\"";
            $this->setTable(Appointment);
            $result = $this->fetchAppointment($where, $date);
        }
        return $result;
    }
    public function getAllAppointmentDetails()
    {
        $where = 1;
        $this->setTable(Appointment);
        $result = $this->fetchAppointment($where);


        return $result;
    }
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
    public function getDoctors($doctor = Null)
    {
        if (empty($doctor)) {
            $where = 1;
            $this->setTable(Doctors);
            $result = $this->fetchDataByUser($where);
        } else {
            $where = 1;
            $doctor = "doctors.fullname = \"" . $doctor . "\"";
            $this->setTable(Doctors);
            $result = $this->filterByDoctor($where, $doctor);
        }
        return $result;
    }
    public function getDoctor($doctor = Null)
    {
        if (empty($doctor)) {
            $where = 1;
            $this->setTable(Doctors);
            $result = $this->fetchDataByUser($where);
        } else {
            $where = 1;
            $doctor = "doctors.fullname = \"" . $doctor . "\"";
            $this->setTable(Doctors);
            $result = $this->filterDoctor($where, $doctor);
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
    public function checkSessionbyDoctor($id)
    {
        $where = "Doctor_id = $id";
        $result = $this->checkSession($where);
        return $result;
    }
}
