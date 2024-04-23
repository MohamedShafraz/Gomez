<?php
include_once(APPROOT.'/views/header_view.php');
?>
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

<center>
<div style="height: fit-content;align-self: center;width: 89rem;">
<div class="flex-container" style="margin-top: 3rem; border-left:solid 5px">
  <!-- Your flex items go here -->
  <div class="flex-item" style="padding: 0.5rem;"> <div style="width: 73%;display: flex;flex-direction: row;"><div><img src="<?=URLROOT."/public/resources/doctor1.png"?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;" ></div><div style="margin: -3rem 0rem 0rem 1rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;"><ul style="list-style-type: none;padding:0;"><li>Dr.Shamath</li><li style="font-size: medium;">Heart specialist</li></ul></div></div>
  <div style="width: 27%;"><div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
           <a href="appointment/make" style="text-decoration: none;"> <font class="font1">Chanel</font></a>
        </div></div></div>
        <div class="flex-item" style="padding: 0.5rem;"> <div style="width: 73%;display: flex;flex-direction: row;"><div><img src="<?=URLROOT."/public/resources/doctor1.png"?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;" ></div><div style="margin: -3rem 0rem 0rem 1rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;"><ul style="list-style-type: none;padding:0;"><li>Dr.sajini</li><li style="font-size: medium;">Child specialist</li></ul></div></div>
  <div style="width: 27%;"><div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
           <a href="docdetail" style="text-decoration: none;"> <font class="font1">Chanel</font></a>
        </div></div></div>
        <div class="flex-item" style="padding: 0.5rem;"> <div style="width: 73%;display: flex;flex-direction: row;"><div><img src="<?=URLROOT."/public/resources/doctor1.png"?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;" ></div><div style="margin: -3rem 0rem 0rem 1rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;"><ul style="list-style-type: none;padding:0;"><li>Dr.Shaf</li><li style="font-size: medium;">ENT specialist</li></ul></div></div>
  <div style="width: 27%;"><div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
           <a href="docdetail" style="text-decoration: none;"> <font class="font1">Chanel</font></a>
        </div></div></div>

        <div class="flex-item" style="padding: 0.5rem;"> <div style="width: 73%;display: flex;flex-direction: row;"><div><img src="<?=URLROOT."/public/resources/doctor1.png"?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;" ></div><div style="margin: -3rem 0rem 0rem 1rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;"><ul style="list-style-type: none;padding:0;"><li>Dr.Shamath</li><li style="font-size: medium;">Heart specialist</li></ul></div></div>
  <div style="width: 27%;"><div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
           <a href="docdetail" style="text-decoration: none;"> <font class="font1">Chanel</font></a>
        </div></div></div>
        <div class="flex-item" style="padding: 0.5rem;"> <div style="width: 73%;display: flex;flex-direction: row;"><div><img src="<?=URLROOT."/public/resources/doctor1.png"?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;" ></div><div style="margin: -3rem 0rem 0rem 1rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;"><ul style="list-style-type: none;padding:0;"><li>Dr.sajini</li><li style="font-size: medium;">Child specialist</li></ul></div></div>
  <div style="width: 27%;"><div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
           <a href="docdetail" style="text-decoration: none;"> <font class="font1">Chanel</font></a>
        </div></div></div>
        <div class="flex-item" style="padding: 0.5rem;"> <div style="width: 73%;display: flex;flex-direction: row;"><div><img src="<?=URLROOT."/public/resources/doctor1.png"?>" style="padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;" ></div><div style="margin: -3rem 0rem 0rem 1rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;"><ul style="list-style-type: none;padding:0;"><li>Dr.Shaf</li><li style="font-size: medium;">ENT specialist</li></ul></div></div>
  <div style="width: 27%;"><div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;background:#8393ca;border-radius: 0.5rem;">
           <a href="docdetail" style="text-decoration: none;"> <font class="font1">Chanel</font></a>
        </div></div></div>
  <!-- Add more items as needed -->
</div>
</div>
</center>





</body>
</html>
