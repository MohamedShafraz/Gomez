<?php
include("db_connect.php");

$sql = "SELECT usertype, COUNT(*) as count FROM user_db GROUP BY usertype";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    if($row['usertype']!='Admin'){
    $users[$row['usertype']]= $row["count"];
    
    }
    }
} else {
   ;
}
$sql = "SELECT COUNT(DISTINCT ip_address) as count FROM visitor_db";
$result = $dbcon->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $Visitorcount  = $row["count"];
    }
} else {
    
}

?>