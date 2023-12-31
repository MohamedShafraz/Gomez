<?php

class LoginModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function loginUser($username, $password) {
        $Password = md5($password);
        $query = "SELECT `Username`, `usertype` FROM user_db WHERE `Username`='$username' AND `Password`='$Password'";
        $result = $this->db->fetchData($query);
        return $result;
    }
}

?>