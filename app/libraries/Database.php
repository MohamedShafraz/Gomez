<?php

class Database {
    private $host = Hostname; 
    private $username = Username; 
    private $password = Password; 
    private $database = Dbname; 
    private $connection;

    
    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    
    public function executeQuery($query) {
        $result = $this->connection->query($query);
        return $result;
    }

    
    public function fetchData($query) {
        $result = $this->executeQuery($query);
        $data = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    
    public function insertData($query) {
        $result = $this->executeQuery($query);
        return $result;
    }

    
    public function updateData($query) {
        $result = $this->executeQuery($query);
        return $result;
    }

    
    public function deleteData($query) {
        $result = $this->executeQuery($query);
        return $result;
    }

    
    public function __destruct() {
        $this->connection->close();
    }
}
?>
