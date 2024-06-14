<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"]) && isset($_POST["refno"])) {
    $refno = $_POST["refno"];
    $file = $_FILES["file"];
    
    // Specify the directory where you want to save the uploaded files
    $uploadDir = APPROOT."/views/LabAssistant/uploadPdf/";

    // Move the uploaded file to the specified directory
    $uploadedFilePath = $uploadDir . $file["name"];
    move_uploaded_file($file["tmp_name"], $uploadedFilePath);
    $filename = explode(".",$file["name"])[0];
    
    $filename = explode(" ",$filename);
    
    $filename = implode("_",$filename);
    
    
    header("location: ./uploadReport/".$filename.'/'.$refno);
    // You can do additional processing here, like saving the file path to a database
    // For demonstration, let's just echo the file path
    // echo $uploadedFilePath;
}

?>
