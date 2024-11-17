<?php
// require_once(APPROOT . "/views/LabAssistant/navbar_view.php");
$test = $data['check']??'2-124506';
$pdfFilePath = APPROOT . '/views/LabAssistant/uploadPdf/'.$test.'.pdf';


header('Content-type: application/pdf');


$file = fopen($pdfFilePath, 'rb');

fpassthru($file);


fclose($file);
?>
