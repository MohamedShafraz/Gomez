<?php


require_once(APPROOT . "/views/Admin/navbar_view.php");
?>

<script>
    $data = [];
    $data.push("<?= "Fullname :" .  "John Doe" ?>");
    $data.push("<?= "Username :" .  "John Doe" ?>");
    $data.push("<?= "Gender :" . "Male" ?>");
    $data.push("<?= "DOB : " . "2021-03-25" ?>");
    $data.push("<?= "Phonenumber : " .  "0771234567" ?>");
    $data.push("<?= "Email : " .  "Johndoe@live.com" ?>");
    $data.push("<?= "Password : " .  "*******" ?>");

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
        /* box-shadow: 2px 2px 1px var(--Gomez-Black); */
        font-family: inter;

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
  margin: 1% 10% 0% 27%;
  z-index: 100;
  padding: 4% 22% 5% 23%;
  top: 81;
  width: 282px;
  justify-content: center;
  align-content: center;
  align-items: center;

" id='popup1'>
    <a href="./" style="position: relative;
  margin: 0% 0% 0% -171%;
  width: 10%;

   "><img style="width:100%;postion:fixed" src="<?= URLROOT . "/resources/back-button-svgrepo-com.svg" ?>"></a><br>

    <h1 style="">Create New Patient</h1>

    <form action="./created" method="post" enctype="multipart/form-data">
        <div style="display:flex">


        </div>
        <div class="users" style="gap: 5%;width:50% ;">
            <script>
                let $date = new Date().toJSON().slice(0, 10);;
                $data.forEach(element => {
                    if (element.split(" :")[0] == "Password") {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                            "<input type='password' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + " required><br><br>");
                    } else if (element.split(" :")[0] == "DOB") {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                            "<input type='date' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + " max=" + $date + " required ><br><br>");
                    } else {
                        document.writeln(
                            " <label for='" + element.split(" :")[0] + "1" + "' class='users'>" + element.split(" :")[0] + ": </label><br>" +
                            "<input type='text' id='" + element.split(" :")[0] + "1" + "' name='" + element.split(" :")[0] + "' class='users' placeholder=" + element.split(" :")[1] + " required><br><br>")
                    }
                });
            </script>
            <input name="submit" type="submit" class="button" value="create" style="padding:12px 15px;">

        </div>
</div>
</form>

</div>
<article class="dashboard">

    <!-- <a>Welcome to Gomez</a> -->


    </div>
</article>
</body>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>