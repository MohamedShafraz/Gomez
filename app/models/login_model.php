<?php

class LoginModel extends Database{
  public function loginUser($username, $password) {
    $Password = md5($password);
    print_r($Password);
    $where = "`Username`='$username' AND `Password`='$Password'";
    $this->setTable(User);
    $result = $this->fetchData($where);
    return $result;
}
}
?>