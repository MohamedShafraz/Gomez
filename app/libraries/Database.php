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
        try {
            $result = $this->connection->query($query);
        } catch (Exception $e) {
            $result = "error";
        }


        return $result;
    }
    public function printId()
    {
        return $this->connection->insert_id;
    }
    public function printError()
    {
        return $this->connection->errno;
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
        if ($result == "error") {
            print_r("Failed to retrieve");
            return;
        }

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
    public function fetchUsers($where)
    {
        $datas = "";
        switch ($this->table) {
            case 'patients':
                $datas = 'ID';
                break;

            case 'doctors':
                $datas = 'Doctor_id';
                break;
            case 'lab_assistants':
                $datas = 'id';
                break;
            case 'receptionist':
                $datas = 'receptionist_id';
                break;
            case 'gm_admin':
                $datas = 'GM_AD_ID';
                break;
        }
        $query = "SELECT * FROM " . $this->table . " JOIN user_db ON user_db.`User_Id` = " . $this->table . "." . $datas . " WHERE " . $where;

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
        $fields = "`" . implode("`, `", array_keys($data)) . "`";
        $values = "'" . implode("', '", array_values($data)) . "'";
        $query = "INSERT INTO " . $this->table . " ($fields) VALUES ($values)";

        return $this->executeQuery($query);
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
