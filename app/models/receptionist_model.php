<?php

class ReceptionistModel extends Database
{

    public function getreceptionist($username)
    {

        $where = "Username='$username'";
        $this->setTable("receptionists");
        $result = $this->fetchData($where);

        return $result;
    }


    public function updatereceptionist($id, $data)
    {
        $query = "UPDATE receptionists SET fullname='$data[fullname]', email='$data[email]', phonenumber='$data[phonenumber]',Username='$data[Username]',age='$data[age]',Specialization='$data[Specialization]'WHERE id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function updatelabasisstantinuser($id, $data)
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

    public function getReportData()
    {
        $where = "status = 'Completed' or status = 'Add PDF'";
        $this->setTable(Report);
        $result = $this->fetchData($where);
        return $result;
    }

    public function updatereceipt($id, $data)
    {
        $query = "UPDATE report SET refno='$data[refno]',patientName='$data[patientName]', contactNo='$data[contactNo]', age='$data[age]',testname='$data[testname]']'WHERE id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    public function getTestNames()
    {

        $where = 1;
        $this->setTable(Labtest);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getlastref()
    {

        $where = "SELECT MAX(`refno`) as  m FROM `report` WHERE 1";

        $result = $this->executeQuery($where);
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }

        return $data[0]['m'];
    }

    public function getPatientNames()
    {

        $where = 1;
        $this->setTable(Patients);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getPatientbyID($id)
    {
        $where = "ID='$id'";
        $this->setTable(Patients);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getReportbyID($id)
    {
        $where = "refno='$id'";
        $this->setTable(Report);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getTestdata($id)
    {
        $where = "id='$id'";
        $this->setTable(Test_Data);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getAlltestdata()
    {
        $where = "status = 'pending'";
        $this->setTable(Test_Data);
        $result = $this->fetchData($where);
        return $result;
    }

    public function getPrescriptionDataByUniqueID($id)
    {
        $where = "unique_id='$id'";
        $this->setTable(Prescription);
        $result = $this->fetchData($where);
        return $result;
    }

    public function updateTestDataStatus($id, $status)
    {

        $query = "UPDATE test_data SET status='$status' WHERE id='$id'";
        $result = $this->executeQuery($query);
        return $result;
    }

    // get last inserted id patient table
    public function getlastinsertedid()
    {
        $where = "SELECT MAX(`ID`) as  m FROM `patients` WHERE 1";

        $result = $this->executeQuery($where);
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }

        return $data[0]['m'];
    }

    // find test id by test name
    public function getTestIdByTestName($testname)
    {
        $where = "test='$testname'";
        $this->setTable(Labtest);
        $result = $this->fetchData($where);
        $result = $result[0]['test_id'];
        return $result;
    }

    // get test name by id 
    public function getTestNameByTestId($testid)
    {
        $where = "test_id='$testid'";
        $this->setTable(Labtest);
        $result = $this->fetchData($where);
        if (isset($result[0]['test'])) {
            $result = $result[0]['test'];
        } else {
            $result = '';
        }
        return $result;
    }
}
