<?php
require_once(APPROOT . "/views/Owner/navbar_view.php");
?>
<script>
    $data = [];
    $data.push("<?= "Fullname :" . $data['userName'] ?>");
    $data.push("<?= "gender :" . $data['gender'] ?>");
    $data.push("<?= "age : " . $data['age'] ?>");
    $data.push("<?= "phonenumber : " . $data['phonenumber'] ?>");
    $data.push("<?= "email : " . $data['email'] ?>");

    // console.log($data);
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
        /* box-shadow: 2px 2px 1px var(--Gomez-Black); */
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

    .preview {
        margin-top: 5px;
        max-width: 300px;
        max-height: 300px;
        display: block;
        padding: 0% 20%;
        margin-right: 79px;
        margin-left: -59px;

    }

    /* input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    } */
</style>

<div class="lay" style="
    position: fixed;
  margin: 6% 10% 0% 28%;
  z-index: 100;
  padding: 5% 0% 5% 5%;;
  visibility: visible;
  min-width: 200px;
  justify-content: center;
  flex-direction:column;
" id='popup2'>
    <form action="./update" method="post" enctype="multipart/form-data">
        <!-- <div class="users" style="float: left;gap: 5%;width:50% ;"> -->

        <div>
            <label for="fileupload" style="font-family: inter;
  padding: 0% 14%;">&emsp;Image</label><br><br>
            <label for="file" id="fileupload" class="uploadimage">Upload Image</label><br>
            <br>
        </div>
        <div id="buttonbox" style="display:flex;flex-direction:row;gap:20px">
            <input style="display: none;" id="file" type="file" name="file" required>
            <button class="button" style="padding:16px 20px" onclick='history.go(-1)'>back</button>
            <!-- <img id="imagePreview" class="preview" style="display: none;" alt="Image Preview"> -->
            <input class="button" id="imagesubmit" style="padding: 16px 20px;display: none;" type="submit" value="submit">
        </div>

        <br>


        <script>
            const fileInput = document.getElementById('file');
            // const imagePreview = document.getElementById('imagePreview');
            const buttonbox = document.getElementById('buttonbox');
            const button = document.getElementById('imagesubmit');
            fileInput.addEventListener('change', (event) => {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('fileupload').innerText = file.name;
                        // imagePreview.src = e.target.result;
                        // imagePreview.style.display = 'block';

                        buttonbox.style.margin = "0px -19px";
                        button.style.display = 'block';
                    };

                    reader.readAsDataURL(file);
                }
            });
        </script>
        <!-- </div> -->
    </form>
</div>
<div class="lay" style="
    position: fixed;
    margin: 1% 10% 0% 28%;z-index:100;
    padding: 4% 11% 5% 11%;
     visibility: visible;
" id='popup1'>


    <h1>Update Profile</h1>

    <form action="update" method="post" enctype="multipart/form-data">
        <div style="display:flex">
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
                    <button onclick="history.go(-1)" class="button" style="padding:6% 7%;">cancel</button>
                </div>

            </div>
        </div>
    </form>

</div>
<article class="dashboard">



    <ul style="background-color: white;padding:5%; width:50%">
        <!-- <div class="users" style="float: left;gap: 5%;width:50% ;"><img src="<?= URLROOT . "/public/resources/user.jpeg" ?>" alt="Profile Picture" style="width: 73%;"></div> -->
        <div class="users" style="float: left;gap: 8%;width:50% ;">
            <div style="display:flex;flex-direction:column;gap:5%"><?= "<img src='data:image/png;base64," . base64_encode($data['image']) . "' alt='Profile Picture' style='    width: 12.3rem;margin-bottom: 8px;
    height: 12.3rem;border-radius:12.3rem;'>" ?><br /><button class="button" style="padding: 9px 22px;" onclick="window.location.href += '/profile?'+.<?= $_SESSION['User_Id'] ?>">Update Profile Picture</button></div>
        </div>

        <script>
            $data.forEach(element => {

                document.writeln("<li class='users'>" + element + "<br><br></li>");

            });
        </script>



        <button onclick="window.location.href += '/id?'+.<?= $_SESSION['User_Id'] ?>" style="float:right" class="button">Edit</button>
    </ul>
    </div>
</article>
</body>
<script>
    if (window.location.href.split('?').length < 2) {
        document.getElementById('popup1').style.visibility = 'hidden';
        document.getElementById('popup2').style.visibility = 'hidden';
    }


    function m($id) {

        console.log($data);
        // window.location.href = '.';
        document.getElementById($id.toString()).style.visibility = 'hidden';
    }
    if (window.location.href.split('?').length == 2 && window.location.href.split('?')[0].split('/')[6] == "profile") {
        document.getElementById('popup1').style.visibility = 'hidden';
        document.getElementById('popup2').style.visibility = 'visible';
    }
    if (window.location.href.split('?').length == 2) {
        document.getElementsByClassName('dashboard')[0].style.filter = 'blur(4px)';
    }
</script>
<?php require_once(APPROOT . "/views/Owner/footer_view.php"); ?>