<?php
include_once(APPROOT . '/views/header_view.php');
?>
<link rel="stylesheet" href="<?= URLROOT ?>/css/patient/contactus.css">

<!DOCTYPE html>
<html lang="en">
<br><br><br>

<body>

    <div class="bgimage" style="background-image: url(<?= URLROOT . '/resources/contact.jpg' ?>);background-size: contain;background-repeat:inherit;">

        <div class="columns" style="height: 41rem;width: 22rem;">



            <form action="" method="post" class="lay" style="height: 36.8rem;width: 20rem;background: linear-gradient(64deg, #b2d3f4, #c0ddff);margin-left: -3%;padding: 4% 2% 17% 11%;padding: 4% 8% 17% 11%;
  gap: 2px;">
                <h2 style="text-align: left;">Contact US</h2>
                <label for="name">Name</label><br>
                <input type="text" class="login" id="name" name='name'><br>
                <label for="mobile">Mobile</label><br>
                <input type="text" class="login" id="mobile" name="mobile"><br>
                <label for="email">Email</label><br>
                <input type="text" class="login" id="email" name="email"><br>
                <label for="message">Message</label><br>
                <textarea name="message" id="" cols="30" rows="5" id="message"></textarea><br>

                <input name="submit" type="submit" value="submit" class="logbutton" id="submit">
            </form>
        </div>
        <div class="columns" style="width: 66%;">
            <article class="dashboard" style="height: 39rem;gap: 4rem 13rem;">
                <ul>

                    <li class="option" style="background-color:#21519f"><img src="<?= URLROOT . "/resources/phone.png" ?>" width="40px" height="40px"><a style="font-size:6vh">Call us</a><br>0766414857 <br>0766654712<br><br></li>
                    <li class="option" style="background-color:#21519f"><img src="<?= URLROOT . "/resources/location.png" ?>" width="40px" height="40px"><a style="font-size:6vh">Location</a><br>No,63, Avissawella, Sri Lanka<br><br></li>
                    <li class="option" style="background-color: #21519f;"><img src="<?= URLROOT . "/resources/mail.png" ?>" width="40px" height="40px"><a style="font-size:6vh">Email</a><br>gomezhospital@gmail.com<br><br></li>
                    <li class="option" style="background-color: #21519f;"><img src="<?= URLROOT . "/resources/time.png" ?>" width="40px" height="40px"><a style="font-size:6vh">Hours</a><br>Always open<br><br></li>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4685081687035!2d80.20674997456995!3d6.953930118012695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3a998aefebc93%3A0xca78961aaa430a47!2sGomez%20Hospital%20Pvt%20Ltd!5e0!3m2!1sen!2slk!4v1698814609733!5m2!1sen!2slk" width="700" height="120" style="height: 13rem;width: 65rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </ul>
            </article>
        </div>
    </div>



</body>




</body>

</html>