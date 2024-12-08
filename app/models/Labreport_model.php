<?php

class LabReportModel extends Database
{
    public function getLabreport($refno, $passcode)
    {
        $where = "`refno`='$refno' AND `passcode`='$passcode'";
        $this->setTable(Report);
        $result = $this->fetchData($where);
        return $result;
    }
}
