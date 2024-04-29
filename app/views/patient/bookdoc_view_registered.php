<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">
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

<!-- background-color:#E9F3FD -->
<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
        <?php include APPROOT.'/views/patient/navbar_view.php'?>


<article class="dashboard">
    
    <!-- <a>Welcome to Gomez</a> -->
    
    <ul style="height: 26rem;background-color: white;padding: 5%;width: 62rem;">
    
    <div style="display: flex;width: 71.5rem;background-color: darkgray;margin-top: -4.7rem;height: 25rem;flex-direction: column;    margin-left: -4.8rem;">
    <div><br></div>
    <?php
            $name = $data[0][0]['fullname'];
            $name = $data[0][0]['Username'];
            $specialization = $data[0][0]['Specialization'];
            echo "
            <div class='flex-item' style='padding: 0.5rem;background: white;width:55.5rem;margin-left:1rem'>
                    <div style='display: flex;flex-direction: row;'>
                        <div style='width: 20%;'><img src='" . URLROOT . "/resources/doctor1.png' style='padding: 1rem 1rem 1rem 1rem;height: 5rem;width: 5rem;border:1px solid;'></div>
                        <div style='margin:-1rem 0rem 0rem 0rem;font-weight: bold;font-size: xx-large;padding: 2rem 0rem 1rem 0rem;width:53%'>
                            <ul style='list-style-type: none;padding:0;'>
                                <li>$name</li>
                                <li style='font-size: medium;'>$specialization</li>
                            </ul>
                        </div>
                        
                        <div style='width: 27%;'>

                            
                        </div>
                    </div>
                    
                </div><br>";
                ?>
        <div><br></div>
    <div class="custom-div" style="align-self: center;width: 98%;background-color: #fff;height: fit-content;">
        <div style="display: flex; flex-direction:row">
            <div style="border-left: solid;width:18rem;">
                <ul style="list-style-type: none;text-align: left;margin: 1rem 0rem 0rem 0rem;"><li>03/15/2024</li><li style="font-weight: bold;font-size: x-large;">Friday 5.00PM-6.00PM</li></ul>
            </div>
            <div style="width: 13rem;">
                <ul style="list-style-type: none;text-align: left;margin: 1rem 0rem 0rem 0rem;width: 10rem;"><li>Active Appointments</li><li style="font-weight: bold;font-size: x-large;">00</li></ul>
            </div>
            <div style="width: 13rem;">
                <ul style="list-style-type: none;text-align: left;margin: 1rem 0rem 0rem 0rem;width: 11rem;"><li>Maximum Appointments</li><li style="font-weight: bold;font-size: x-large;">50</li></ul>
            </div>
            <div style="width: 13rem;">
                <ul style="list-style-type: none;text-align: left;margin: 1rem 0rem 1rem -4rem;"><div style="flex-direction: row;display: flex;margin-left:14rem"><div style="margin-top: -1.75rem;"><li><div style="width: 27%;"><div class='logbutton' style="height: fit-content;padding: 0.5rem;margin: 2rem 0rem 0rem 0rem;box-shadow: none;background: var(--Gomez-highlight);">
           <a href="patient/dashboard" style="text-decoration: none;"> <font class="font1">Make appointment</font></a>
        </div></div></li></div></div></ul>
            </div>
        </div>
    </div>
    </div>

    </ul>
</div>
</article>
</body>
<script src="<?=URLROOT?>./javascript/dashboard.js"></script>
<script>
    function select2()
{if(document.getElementsByClassName("navbar")[0].style.display=="none"){
    document.getElementsByClassName("navbar")[0].style.display="flex";
}
else{
    document.getElementsByClassName("navbar")[0].style.display="none";
}
}
document.getElementById("deactivate").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="block";
            document.getElementsByClassName("dashboard")[0].style.filter = "blur(3px)";
        };
        document.getElementById("no").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="none";
            document.getElementsByClassName("dashboard")[0].style.filter = "";
        }
        document.getElementById("yes").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="none";
            document.getElementsByClassName("dashboard")[0].style.filter = "";
        }   
</script>