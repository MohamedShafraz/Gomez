<?php
class DashboardModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getUserCounts() {
        $sql = "SELECT usertype, COUNT(*) as count FROM user_db GROUP BY usertype";
        $result = $this->db->getConnection()->query($sql);
        $users = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['usertype'] != 'Admin') {
                    $users[$row['usertype']] = $row["count"];
                }
            }
        }

        return $users;
    }

    public function getVisitorCount() {
        $sql = "SELECT COUNT(DISTINCT ip_address) as count FROM visitor_db";
        $result = $this->db->getConnection()->query($sql);
        $visitorCount = 0;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $visitorCount = $row["count"];
            }
        }

        return $visitorCount;
    }
}
?>