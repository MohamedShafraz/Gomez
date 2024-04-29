<?php

class Database
{
    private $host = Hostname;
    private $username = Username;
    private $password = Password;
    private $database = Dbname;
    private $connection;
    private $table;

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function setTable($table)
    {
        $this->table = $table;
    }
    public function executeQuery($query)
    {

        $result = $this->connection->query($query);
        // print_r($query);
        // print_r($this->connection->error);
        return $result;
    }
    public function check()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function fetchData($where)
    {

        $query = "Select * FROM " . $this->table . " WHERE " . $where;

        $result = $this->executeQuery($query);

        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }

        return $data;
    }
    public function fetchSession($where, $data=1)
    {
        
        $query = "SELECT * FROM session JOIN doctors ON session.`Doctor_Id` = doctors.Doctor_id  JOIN user_db ON user_db.User_Id = session.Doctor_id WHERE " . $where . " AND " . $data;
    
        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        // print_r($query);
    
        return $data;
    }
    public function fetchAppointment($where, $data=1)
    {
        
        $query = "SELECT * FROM session JOIN doctors ON session.`Doctor_Id` = doctors.Doctor_id JOIN appointment ON appointment.session_id = session.session_id JOIN user_db ON user_db.User_Id = session.Doctor_id WHERE " . $where . " AND " . $data;
    
        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        
        return $data;
    }

    public function fetchAppointmentbydoctor($where, $data=1)
    {
        
        $query = "SELECT *,doctors.fullname as doctor_name ,patients.fullname as full FROM session JOIN doctors ON session.`Doctor_Id` = doctors.Doctor_id JOIN user_db ON user_db.`User_Id` = doctors.Doctor_id JOIN appointment ON appointment.session_id = session.session_id JOIN patients ON appointment.Patient_Id = patients.ID  WHERE " . $where . " AND " . $data;
    
        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        // print_r($query);
        return $data;
    }
    public function printId(){
     return $this->connection->insert_id;
    }

    public function fetchDataByUser($where, $data=1)
    {
        $id = null;
        switch ($this->table) {
            case  Doctors:
                $id = 'Doctor_id';
                break;
            case Patients:
                $id =  'ID';
                break;
        }
        $query = "SELECT * FROM doctors JOIN user_db ON user_db.User_Id = $this->table.$id JOIN `session` ON session.Doctor_id = $this->table.$id WHERE " . $where . " AND " . $data;

        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        
        return $data;
    }
    public function fetchAppointmentByDoctors($where, $data=1)
    {
        $id = null;
        // switch ($this->table) {
        //     case  Doctors:
        //         $id = 'Doctor_id';
        //         break;
        //     case Patients:
        //         $id =  'ID';
        //         break;
        // }
        $query = "SELECT * FROM doctors JOIN user_db ON user_db.User_Id = $this->table.Doctor_id JOIN `session` ON session.Doctor_id = $this->table.Doctor_id WHERE " . $where . " AND " . $data;

        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        
        return $data;
    }

    public function fetchdoctorforsession($where, $data=1)
    {
        $id = null;
        // switch ($this->table) {
        //     case  Doctors:
        //         $id = 'Doctor_id';
        //         break;
        //     case Patients:
        //         $id =  'ID';
        //         break;
        // }
        $query = "SELECT * FROM doctors JOIN user_db ON user_db.User_Id = $this->table.Doctor_id WHERE " . $where . " AND " . $data;

        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        // print_r($query);
        return $data;
    }

    public function filter($where, $data)
    {
        $query = "SELECT * FROM doctors JOIN appointment ON appointment.`doctor_id` = doctors.`Doctor_id` WHERE " . $where . " AND " . $data;

        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        
        return $data;
    }
    public function fetchPatient()
    {
        $where = "ID = " . $_SESSION['User_Id'];
        
        $query = "SELECT * FROM patients JOIN user_db ON patients.`ID` = user_db.`User_Id` WHERE " . $where ;
       
        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        
        return $data;
    }
    public function filterByDoctor($where, $doctor)
    {
        $query = "Select * FROM " . $this->table . " WHERE " . $where . " AND " . $doctor;


        $result = $this->executeQuery($query);

        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        
        return $data;
    }

    public function insertData($data)
    {
        $fields = implode(', ', array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $query = "INSERT INTO " . $this->table . " ($fields) VALUES ($values)";

        print_r($query);
        print_r('<br>');
        return $this->executeQuery($query);
    }
public function printErrno()
{
    return $this->connection->errno;
}
    public function updateData($data, $condition)
    {

        $setClause = '';
        foreach ($data as $key => $value) {
            if ($key == 'profilepicture') {
                $setClause .= "$key = $value" . " ";
            } else {
                $setClause .= "$key = '$value', ";
            }
        }
        $setClause = rtrim($setClause, ', ');

        $query = "UPDATE " . $this->table . " SET " . $setClause . " WHERE " . $condition;
        //print_r($query);
        return $this->executeQuery($query);
    }

    public function deleteData($condition)
    {
        $query = "DELETE FROM " . $this->table . " WHERE $condition";

        return $this->executeQuery($query);
    }

    public function getcount($where)
    {
        $query = "SELECT usertype, COUNT(*) as count FROM " . $this->table . " WHERE " . $where;

        $data = [];
        $result = $this->executeQuery($query);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }
    public function checkSession($where){
        
        $query = "SELECT `date`,`start_time` From session where ".$where;
        $result = $this->executeQuery($query);
        $data = [];
        $i = 0;
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[$i] = $row;
                $i++;
            }
        }
        
        return $data;
    }

    // public function insertData($data) {
    //     $fields = implode(', ', array_keys($data));
    //     $values = "'" . implode("', '", array_values($data)) . "'";
    //     $query = "INSERT INTO " . $this->table . " ($fields) VALUES ($values)";


    //     return $this->executeQuery($query);
    // }

    // public function getcount($where){
    //     $query = "SELECT usertype, COUNT(*) as count FROM ".$this->table." WHERE ".$where;

    //     $data = [];
    //     $result = $this->executeQuery($query);if ($result && $result->num_rows > 0) {
    //         while ($row = $result->fetch_assoc()) {
    //             $data[] = $row;
    //         }
    //     }

    //     return $data;
    // }

    // public function updateData($data, $where) {
    //     $query = "UPDATE " . $this->table . " SET ";
    //     $valuesToUpdate = [];

    //     foreach ($data as $key => $value) {
    //         if ($value !== null) {
    //             $valuesToUpdate[] = $key . "='" . $value . "'";
    //         }
    //     }

    //     $query .= implode(", ", $valuesToUpdate);

    //     $query .= " WHERE " . $where;

    //     return $this->executeQuery($query);
    // }

}
