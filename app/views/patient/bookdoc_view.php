<?php
include_once(APPROOT.'/views/header_view.php');
?>
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/contactus.css">
<style>
    .custom-div:hover {
        background-color: #8393ca; /* Change to the desired hover background color */
    }
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

<body >

<center>
    
    <div style="display: flex;width: 90rem;background-color: darkgray;margin-top: 6rem;height: 42rem;flex-direction: column;">
    <div><br></div>
        <div style="align-self: center;height: 7rem;background-color: #ffffff;width: 88rem;">
        <div style="display: flex;flex-direction: row;"><div style="height: 6rem;padding: 0.25rem;"><img src="<?=URLROOT."/public/resources/doctor1.png"?>" style="padding: 1rem 1rem 1rem 1rem;height: 4rem;width: 4rem;border: 1px solid;" ></div><div style="margin: -3rem 0rem 0rem 1rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;"><ul style="list-style-type: none;padding:0;"><li>Dr.Shamath</li><li style="font-size: medium;">Heart specialist</li></ul></div></div>
        </div>
        <div><br></div>
    <div class="custom-div" style="align-self: center;width: 98%;background-color: #fff;height: fit-content;">
        <div style="display: flex; flex-direction:row">
            <div style="border-left: solid;width:13rem;">
                <ul style="list-style-type: none;text-align: left;"><li>03/15/2024</li><li style="font-weight: bold;font-size: x-large;">Friday 5.00PM</li></ul>
            </div>
            <div style="width: 13rem;">
                <ul style="list-style-type: none;text-align: left;"><li>Active Appointments</li><li style="font-weight: bold;font-size: x-large;">00</li></ul>
            </div>
            <div style="width: 30rem;">
                <ul style="list-style-type: none;text-align: left;"><div style="flex-direction: row;display: flex;"><div style="margin-top: -1.75rem;"><li><div style="width: 27%;"><div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;">
           <a href="../index" style="text-decoration: none;"> <font class="font1">Make appointment</font></a>
        </div></div></li></div><div style="margin-left: 1rem;margin-top: 0.75rem"><li style="font-weight: bold;font-size: x-large;">Friday 5.00PM</li></div></div></ul>
            </div>
        </div>
    </div>
    </div>
    
</center>





</body>
</html>
