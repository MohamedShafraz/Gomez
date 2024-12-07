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
        $where = "doctor_id='$id' ORDER BY date DESC , end_time DESC";
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

    public function addDisese($data)
    {
        $this->setTable(Disease);
        $result = $this->insertData($data);
        return $result;
    }

    public function addTest($data)
    {
        $this->setTable(Test_data);
        $result = $this->insertData($data);
        return $result;
    }

    public function getMedicinebyUniqeid($unique_id){
        $where = "unique_id='$unique_id'";
        $this->setTable(Medicine);
        $result = $this->fetchData($where);
        return $result;
        
    }

    public function updateUserDetails($details=null, $filecontent=null)
    {
        $where = "Doctor_id = " . $_SESSION['User_Id'];
        $this->setTable(Doctors);

        $users['fullname'] = $_POST["Fullname"];
        $users['phonenumber'] = $_POST['phonenumber'];
        // $users['NIC'] = $_POST['NIC'];
        $users['gender'] = $_POST['gender'];
        $users['age'] = $_POST['age'];
        $picture["profilepicture"] = $details;
        $data = $this->updateData($users, $where);
        
       // $this->setTable('user_db');
      //  $where1 = "User_Id = " . $_SESSION['User_Id'];
       // $data = $this->updateData($picture, $where1);

       // $_SESSION["USER"]["profilepicture"] = $filecontent;
        // print_r($_SESSION["USER"]["profilepicture"]);
        //return $details;
        return $data;
    }

    public function getLabtest(){
        $this->setTable(Labtest);
        $result = $this->fetchData("test_id != ''");
        return $result;
    }

    public function getDrugs(){
        $this->setTable(Drug);
        $result = $this->fetchData("id != ''");
        return $result;
    }

    public function getDisease(){
        $this->setTable(Disease);
        $result = $this->fetchData("diseaseid  != ''");
        return $result;
    }

    public function findDisease($disease){
        $this->setTable(Disease);
        $result = $this->fetchData("disease = '$disease'");
        return $result;
    }

    public function getSessionsbyId($id){
        $this->setTable(Session);
        $result = $this->fetchData("session_id = '$id'");
        return $result;
    }

  // public function getPatientbyappointment($userid)
 // {
  //  $where = "ID =''"; // 
   // $this->setTable('Patients'); // 
    //$result = $this->fetchData($where);

  //  return $result;
 //}

    
    
}



















?>