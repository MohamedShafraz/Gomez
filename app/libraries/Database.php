<?php

class Database {
    private $host = Hostname; // Your host
    private $username = Username; // Your username
    private $password = Password; // Your password
    private $database = Dbname; // Your database name
    private $connection;

    // Constructor to establish the connection
    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Method to execute queries
    public function executeQuery($query) {
        $result = $this->connection->query($query);
        return $result;
    }

    // Method to fetch data
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

    // Method to insert data
    public function insertData($query) {
        $result = $this->executeQuery($query);
        return $result;
    }

    // Method to update data
    public function updateData($query) {
        $result = $this->executeQuery($query);
        return $result;
    }

    // Method to delete data
    public function deleteData($query) {
        $result = $this->executeQuery($query);
        return $result;
    }

    // Destructor to close the connection
    public function __destruct() {
        $this->connection->close();
    }
}
?>
