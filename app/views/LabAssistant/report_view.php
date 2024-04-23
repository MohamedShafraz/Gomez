<?php
require_once(APPROOT . "/views/LabAssistant/navbar_view.php");
$pdfFilePath = APPROOT . '/views/LabAssistant/uploadPdf/1-1245001.pdf';


header('Content-type: application/pdf');


$file = fopen($pdfFilePath, 'rb');

fpassthru($file);


fclose($file);
?>
