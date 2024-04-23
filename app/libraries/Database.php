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

    public function filterByDoctor($where, $doctor){
        $query = "Select * FROM " . $this->table . " WHERE " . $where . " AND ". $doctor;
   
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
