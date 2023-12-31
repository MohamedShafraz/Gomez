<?php
class database{
  private $dbcon;
   public function __construct() {
        $this->dbcon = new mysqli(Hostname, Username, Password, DatabaseName);

        if ($this->dbcon->connect_error) {
            die("dbcon failed: " . $this->dbcon->connect_error);
        }
    }

    // Method to execute queries
    public function executeQuery($query) {
        $result = $this->dbcon->query($query);
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

    // Destructor to close the dbcon
    public function __destruct() {
        $this->dbcon->close();
    }
}
  ?>