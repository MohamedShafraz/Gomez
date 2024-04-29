<?php

class DoctorModel extends Database
{

    public function getDoctor($userid)
    {
        $where = "Doctor_id ='$userid'";
        $this->setTable(Doctors);
        $result = $this->fetchData($where);

        return $result;
    }

    public function getSessions($id)
    {
        $where = "doctor_id='$id'";
        $this->setTable(Session);
        $result = $this->fetchData($where);

        return $result;
    }

    public function getSessionsToday($id)
    {
        $where = "date = CURDATE() AND Doctor_id='$id'";
        $this->setTable(Session);
        $result = $this->fetchData($where);

        return $result;
    }

    public function getAppointmentbySession($id)
    {
        $where = "session_id='$id'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

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

    public function addPrescription($data)
    {
        $this->setTable(Prescription);
        $result = $this->insertData($data);
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


    public function updateprescription($id, $data)
    {
        $query = "UPDATE Prescription SET otherremarks='$data[otherremarks]' WHERE prescriptionnumber='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function updatedoctor($id, $data)
    {
        $query = "UPDATE Doctors SET fullname='$data[fullname]', email='$data[email]', phonenumber='$data[phonenumber]',Username='$data[Username]' WHERE doctor_id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function updatedoctorinuser($id, $data)
    {
        $query = "UPDATE user_db SET Username='$data[Username]',Email='$data[email]' WHERE User_Id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function getUserData($id)
    {
        $where = "User_Id='$id'";
        $this->setTable(User);
        $result = $this->fetchData($where);
        return $result;
    }


    public function deactivateAccount($username)
    {
        $query = "UPDATE Doctors SET 'Status'='Inactive' WHERE 	Username='$username'";
        $result = $this->executeQuery($query);
        return $result;
    }


    public function addMedicine($data)
    {
        $this->setTable(Medicine);
        $result = $this->insertData($data);
        return $result;
    }

    public function getMedicinebyUniqeid($unique_id){
        $where = "unique_id='$unique_id'";
        $this->setTable(Medicine);
        $result = $this->fetchData($where);
        return $result;
        
    }
    
    
}



















?>