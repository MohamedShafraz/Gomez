<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<style>
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li a {
            text-decoration: none;
            color: inherit;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            /* Change to block to make it a block element */
            margin: 0 auto;
            /* Center horizontally */
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-right: 2%;
        }

        label {
            text-align: center;
            color: darkblue;
            margin-right: 2%;
        }

        /* Center the form */
        .dashboard {
            text-align: center;
        }

        .card{
            border-radius: 27px;
            background: #ffffff;
            box-shadow:  5px 5px 10px #b0b0b0,
                        -5px -5px 10px #ffffff;
            padding: 20px;
        }

    </style>

</aside>
<article class="dashboard" style="font-family: inter;">
    <div style="margin-left:24%; display:flex; justify-content:center;">
    <form class="card" id="medicineForm" style="width: 90%;">
        <h1 style="text-align:center;margin-bottom:15px; margin-top:15px">Medicine Information</h1>
        <div id="medicineItems">
            <div style="display: flex;flex-direction:row; justify-content:center">
                <label for="medicineName">Medicine Name</label>
                <select name="medicineName[]" id="medicineName">
                    <option value="MedicineA">MedicineA</option>
                    <option value="MedicineB">MedicineB</option>
                    <option value="MedicineC">MedicineC</option>
                    <option value="MedicineD">MedicineD</option>
                    <option value="MedicineE">MedicineE</option>
                <select>
                <label for="dose">Dose</label>
                <input type="number" id="dose" name="dose[]" required>
                <label for="timing">Timing</label>
                <select name="timing[]" id="timing">
                    <option value="Morning">Morning</option>
                    <option value="Noon">Noon</option>
                    <option value="Evening">Evening</option>
                    <option value="Night">Night</option>
                    <option value="morningevening">Morning and Evening</option>
                    <option value="morningnight">Morning and Night</option>
                </select>
                <label for="meal">Before/After Meal</label>
                <select name="meal[]" id="meal">
                    <option value="Before">Before</option>
                    <option value="After">After</option>
                </select>
                <button class="bluebutton" id="addMedicine">Add Medicine</button>
            </div>
        </div>
        <button class="greenbutton" type="submit" class="btn" style="width: 25%; margin-top:20px">Submit</button>
    </form>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("#addMedicine").click(function(e) {
      e.preventDefault();
      $("#medicineItems").prepend(`
        <div style="display: flex;flex-direction:row; justify-content:center">
          <label for="medicineName">Medicine Name</label>
          <select name="medicineName[]" id="medicineName">
            <option value="MedicineA">MedicineA</option>
            <option value="MedicineB">MedicineB</option>
            <option value="MedicineC">MedicineC</option>
            <option value="MedicineD">MedicineD</option>
            <option value="MedicineE">MedicineE</option>
          </select>
          <label for="dose">Dose</label>
          <input type="number" id="dose" name="dose[]" required>
          <label for="timing">Timing</label>
          <select name="timing[]" id="timing">
            <option value="Morning">Morning</option>
            <option value="Noon">Noon</option>
            <option value="Evening">Evening</option>
            <option value="Night">Night</option>
            <option value="morningevening">Morning and Evening</option>
            <option value="morningnight">Morning and Night</option>
          </select>
          <label for="meal">Before/After Meal</label>
          <select name="meal[]" id="meal">
            <option value="Before">Before</option>
            <option value="After">After</option>
          </select>
          <button class="redbutton" id="removeMedicine">Remove</button>
        </div>
      `);
    });

    $(document).on('click', '#removeMedicine', function(e) {
      e.preventDefault();
      $(this).parent('div').remove();
    });

    $("#medicineForm").submit(function(e) {
      e.preventDefault();
      var formData = $(this).serialize(); // Serialize the medicineForm

      $.ajax({
        type: "POST",
        url: "<?php echo URLROOT; ?>/Doctor/AddMedicine",
        data: formData,
        success: function(data) {
          console.log(data);
        }
      });
    });
  });
</script>


<?php require_once(APPROOT . "/views/Admin/footer_view.php");?>