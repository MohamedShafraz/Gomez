<?php

class labReportModel extends Database
{
    public function getLabReportDetails($testname = null)
    {
        
        $where = "patient_id = " . $_SESSION['User_Id'];
        if($testname != null){
            $where .= " AND testname = '".$testname."'";
        }
        $this->setTable('report');
        $data = $this->fetchData($where);
       

        
        $i = 0;
        foreach ($data as $row) {
            $users[$i]['Reference_No'] = $row["refno"];
            $users[$i]['Passcode'] = $row["passcode"];
            $users[$i]['Test_Name'] = $row['testname'];
            $users[$i]['Status'] = $row['status'];
            $users[$i]['File_Name'] = $row['filename'];
            $i++;
        }
        
        return $users;
    }
}
