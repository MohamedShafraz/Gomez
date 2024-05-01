<?php


require_once(APPROOT . "/views/doctor/navbar_view.php");
?>

<script>
    $data = [];
    $data.push("<?= "Fullname :" . $data['fullname'] ?>");
    $data.push("<?= "gender :" . $data['gender'] ?>");
    $data.push("<?= "age : " . $data['age'] ?>");
    $data.push("<?= "phonenumber : " . $data['phonenumber'] ?>");


     console.log($data);
</script>
<style>
    .button {
        display: flex;
        flex-direction: row;
        justify-content: center;
        flex-shrink: 0;
        color: var(--Gomez-White);
        font-family: 'inter-bold';
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        flex-shrink: 0;
        border-radius: 10px;
        background: var(--Gomez-highlight);
        position: relative;
        padding: 1.4% 2.5%;
        filter: drop-shadow(3px 3px 7px --Gomez-Black);
        width: max-content;
        border-style: none;
         box-shadow: 2px 2px 1px var(--Gomez-Black); 
        font-family: inter;

    }

    .uploadimage {
        background: border-box;
        border: 1px solid;
        padding: 5%;
        border-radius: 14px;
        font-family: 'Inter';
    }

    .uploadimage:hover {
        background-color: var(--Gomez-highlight);
        color: white;
        text-decoration: solid;
    }

     input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    } 
</style>

<div class="lay" style="
    position: fixed;
    margin: 1% 10% 0% 28%;z-index:100;
    padding: 4% 11% 5% 11%;
" id='popup1'>


    <h1>Update Profile</h1>

    <form action="<?php echo URLROOT; ?>/Doctor/update" method="post">
        <div style="display:flex">
            <div class="users" style="float: left;gap: 5%;width:50% ;">

                <label for="fileupload">&emsp;Image</label><br><br>
                <label for="file" id="fileupload" class="uploadimage">Upload Image</label><br>
                <!-- <label for="image" class="custom-file-upload">
                    Upload Image
                </label> -->
                <br>
           

                <br>

            </div>
           
            <div id="img">

            </div>
            <div class="users" style="float: right;gap: 5%;width:50% ;">
                <script>
                    $data.forEach(element => {
                        if (element.split(" :")[0] == 'phonenumber') {
                            document.writeln(
                                " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                                "<input type='Number' min=000000000 max=999999999 id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' value=" + element.split(" :")[1] + " required><br><br>");
                        } else {
                            document.writeln(
                                " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                                "<input type='text' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' value=" + element.split(" :")[1] + " required><br><br>");
                        }
                    });
                </script>
                <div style="    display: flex;
    flex-direction: row;
    gap: 10%;">
                    <input name="submit" type="submit" class="button" value="update" style="padding:6% 7%;">
                    <button onclick='window.location.href="./"' name="cancel" class="button" style="padding:6% 7%;">cancel</button>
                </div>

            </div>
        </div>
    </form>

</div>
<article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->

    <ul style="background-color: white;padding:5%; width:50%">
        <!-- <div class="users" style="float: left;gap: 5%;width:50% ;"><img src="<?= URLROOT . "/public/resources/user.jpeg" ?>" alt="Profile Picture" style="width: 73%;"></div> -->
        <div class="users" style="float: left;gap: 5%;width:50% ;"><?= "<img src='data:image/png;base64," . base64_encode($_SESSION["USER"]['profilepicture']) . "' alt='Profile Picture' style='    width: 12.3rem;
    height: 12.3rem;;'>" ?></div>

        <script>
            $data.forEach(element => {

                document.writeln("<li class='users'>" + element + "<br><br></li>");

            });
        </script>


        <div id="chartContainer"></div>
        <button onclick="window.location.href += '/id?'+.<?= $_SESSION['User_Id'] ?>" style="float:right" class="button">Edit</button>
    </ul>
    </div>
</article>
</body>
<script>
    if (window.location.href.split('?').length < 2) {
        document.getElementById('popup1').style.visibility = 'hidden';

    }

    function m($id) {

        console.log($data);
        // window.location.href = '.';
        document.getElementById($id.toString()).style.visibility = 'hidden';
    }
    if (window.location.href.split('?').length == 2) {
        document.getElementsByClassName('dashboard')[0].style.filter = 'blur(4px)';
    }
</script>
<?php require_once(APPROOT . "/views/Admin/footer_view.php");?>
