<?php

class DashboardModel extends Database{
    public function getUserCounts() {
        $where = "usertype != 'Admin' GROUP BY usertype";
        $this->setTable(User);
    $data = $this->getcount($where);
        
        $users = [];
        foreach ($data as $row) {
            $users[$row['usertype']] = $row["count"];
        }
        return $users;
    }
}
?>
