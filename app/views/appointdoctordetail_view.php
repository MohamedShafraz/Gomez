<?php
include_once(APPROOT.'/views/header_view.php');
?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/contactus.css">
<style>
    .flex-container {
      display: flex;
      flex-wrap: wrap;
      
      /* justify-content: space-between; Adjust as needed */
    }

    .flex-item {
      width: calc(50% - 10px); /* Adjust width and margin as needed */
      
      box-sizing: border-box;
      border: 1px solid #ccc; /* Optional: Add borders for clarity */
      grid-column-gap: 3rem;
    /* flex-direction: column; */
    display: flex;
    flex-direction: row;
    }
    img {
      max-width: 100%;
      height: auto;
    }
  </style>
<!DOCTYPE html>
<html lang="en">
<br><br><br>
<body >


<ul style="height: 26rem;padding: 5%;margin-left:-30%">
    <div class="complainttext">Available Doctors</div>
    <br>

    <div id="appointments" style="height: 59vh;    margin-left: 31.5rem;
    height: 59vh;
    width: 77rem;
    overflow-y: scroll;
    overflow-x: hidden;
    scrollbar-width: none;
">
        <?php
        $size = sizeof($data)??5;
       
        for ($i = 0; $i < $size; $i++) {
          
            $image = $data[$i]['image'] ?? "http://localhost/gomez/public/resources/doctor1.png'";
            $name = $data[$i]['fullname']??"Samar";
            $url = "appointment/make?fullname=".$name."&specialization=&date=";
            // $Date =$data[$i]['Date'];
            $special = $data[$i]['Specialization'] ?? "Heart specialist";
            echo "<div class='flex-item' style='padding: 0.5rem;background: white;width:55.5rem;margin-left:1rem'>
             <div style='display: flex;flex-direction: row;'>
                 <div style='width: 20%;'><img src='" . $image . " style='padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;'></div>
                 <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                     <ul style='list-style-type: none;padding:0;'>
                         <li>" . $name . "</li>
                         <li style='font-size: medium;'>" . $special . "</li>
                     </ul>
                 </div>
                 
                  <div style='width: 27%;'>
                  
                     <div class='logbutton' style='height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 17rem;border-radius: 0.5rem;box-shadow:none'>
                         <a href=".$url." style='text-decoration: none;'>
                             <font class='font1'>Channel</font>
                         </a>
                     </div>
                 </div></div></div><br>";
        }
        ?> 
        </div>

    </ul>





</body>
</html>
