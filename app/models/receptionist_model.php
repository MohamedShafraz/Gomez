<?php

class ReceptionistModel2 extends Database
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
        $where = 1;
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
}
