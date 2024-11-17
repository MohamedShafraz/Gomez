<?php

class DoctorModel extends Database
{

    public function getDoctor($userid): array
    {
        $where = "Doctor_id ='$userid'";
        $this->setTable(table: Doctors);
        $result = $this->fetchData(where: $where);

        return $result;
    }

    public function getSessions($id): array
    {
        $where = "doctor_id='$id'";
        $this->setTable(table: Session);
        $result = $this->fetchData(where: $where);

        return $result;
    }

    public function getSessionsToday($id): array
    {
        $where = "date = CURDATE() AND Doctor_id='$id'";
        $this->setTable(table: Session);
        $result = $this->fetchData(where: $where);

        return $result;
    }

    public function getAppointmentbySession($id)
    {
        $where = "session_id='$id'";
        $this->setTable(Appointment);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getPatientbyPatiend($id): array
    {
        $where = "ID='$id'";
        $this->setTable(table: Patients);
        $result = $this->fetchData(where: $where);
        return $result;
    }


    public function getPatient($id): array
    {
        $where = "ID='$id'";
        $this->setTable(table: Patients);
        $result = $this->fetchData(where: $where);
        return $result;
    }

    public function addPrescription($data): bool|mysqli_result|string
    {
        $this->setTable(table: Prescription);
        $result = $this->insertData(data: $data);
        return $result;
    }


    public function getAppoinmentbyID($id)
    {
        $where = "Appointment_Id='$id'";
        $this->setTable(table: Appointment);
        $result = $this->fetchData(where: $where);
        return $result;
    }

    public function getPrescriptionbyID($id): array
    {
        $where = "prescriptionnumber='$id'";
        $this->setTable(table: Prescription);
        $result = $this->fetchData(where: $where);
        return $result;
    }


    public function getPrescriptionbyAppointment($id): array
    {
        $where = "Appointment_Id='$id'";
        $this->setTable(table: Prescription);
        $result = $this->fetchData(where: $where);
        return $result;
    }


    public function updateprescription($id, $data): bool|mysqli_result|string
    {
        $query = "UPDATE Prescription SET otherremarks='$data[otherremarks]' WHERE prescriptionnumber='$id'";
        $result = $this->executeQuery(query: $query);
        return $result;
    }

    public function updatedoctor($id, $data): bool|mysqli_result|string
    {
        $query = "UPDATE Doctors SET fullname='$data[fullname]', email='$data[email]', phonenumber='$data[phonenumber]',Username='$data[Username]' WHERE doctor_id='$id'";
        $result = $this->executeQuery(query: $query);
        return $result;
    }

    public function updatedoctorinuser($id, $data): bool|mysqli_result|string
    {
        $query = "UPDATE user_db SET Username='$data[Username]',Email='$data[email]' WHERE User_Id='$id'";
        $result = $this->executeQuery(query: $query);
        return $result;
    }

    public function getUserData($id): array
    {
        $where = "User_Id='$id'";
        $this->setTable(table: User);
        $result = $this->fetchData(where: $where);
        return $result;
    }


    public function deactivateAccount($username): bool|mysqli_result|string
    {
        $query = "UPDATE Doctors SET 'Status'='Inactive' WHERE 	Username='$username'";
        $result = $this->executeQuery($query);
        return $result;
    }


    public function addMedicine($data): bool|mysqli_result|string
    {
        $this->setTable(Medicine);
        $result = $this->insertData($data);
        return $result;
    }

    public function addDisese($data): bool|mysqli_result|string
    {
        $this->setTable(table: Disease);
        $result = $this->insertData(data: $data);
        return $result;
    }

    public function getMedicinebyUniqeid($unique_id): array{
        $where = "unique_id='$unique_id'";
        $this->setTable(table: Medicine);
        $result = $this->fetchData(where: $where);
        return $result;
        
    }

    public function updateUserDetails($details=null, $filecontent=null): bool|mysqli_result|string
    {
        $where = "Doctor_id = " . $_SESSION['User_Id'];
        $this->setTable(Doctors);

        $users['fullname'] = $_POST["Fullname"];
        $users['phonenumber'] = $_POST['phonenumber'];
        // $users['NIC'] = $_POST['NIC'];
        $users['gender'] = $_POST['gender'];
        $users['age'] = $_POST['age'];
        $picture["profilepicture"] = $details;
        $data = $this->updateData(data: $users, condition: $where);
        
       // $this->setTable('user_db');
      //  $where1 = "User_Id = " . $_SESSION['User_Id'];
       // $data = $this->updateData($picture, $where1);

       // $_SESSION["USER"]["profilepicture"] = $filecontent;
        // print_r($_SESSION["USER"]["profilepicture"]);
        //return $details;
        return $data;
    }

    public function getLabtest(): array{
        $this->setTable(table: Labtest);
        $result = $this->fetchData(where: "test_id != ''");
        return $result;
    }

    public function getDrugs(): array{
        $this->setTable(table: Drug);
        $result = $this->fetchData(where: "id != ''");
        return $result;
    }

    public function getDisease(): array{
        $this->setTable(table: Disease);
        $result = $this->fetchData(where: "diseaseid  != ''");
        return $result;
    }

    public function findDisease($disease): array{
        $this->setTable(table: Disease);
        $result = $this->fetchData(where: "disease = '$disease'");
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