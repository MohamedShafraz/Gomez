<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
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

        input[type="number"],
        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        label {
            text-align: center;
            color: darkblue;
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
<article class="dashboard">
    <div style="margin-left:24%; display:flex; justify-content:center;">
    
  
    <form id="labForm" class="card" onsubmit="submitForm()" action="<?=URLROOT."/Doctor/AddPrescription"?>" method="post" style="margin-top:5%;">
            <input type="hidden" name="Appointment_Id" value="<?php echo $appointment[0]['Appointment_Id']?>">
            <input type="hidden" name="patient_id" value="<?php echo $appointment[0]['Patient_Id']?>">

            <label for="age">Age</label><br>
            <input type="number" id="age" name="age" min=0 value=""><br><br>

            <label for="disease">Disease</label><br>
            <textarea id="disease" name="disease" rows="4" cols="50"></textarea><br><br>

            <label for="prescription">Instructions</label><br>
            <textarea id="prescription" name="prescription" rows="4" cols="50"></textarea><br><br>

            <label for="labtesting">Lab Testing</label><br>
            <ul id="selectedValues" ></ul>
            <div style="display:flex;flex-direction:row;">
                <select id="labtestinglist" name="labtesting">
                       <option value="FBS">FBS</option>
                       <option value="Lipid">Lipid</option>
                       <option value="CBC">CBC</option>
                       <option value="PTT">PTT</option>
                      <option value="UA">UA</option>
                      <option value="X-rays">X-rays</option>
                       <option value="CT Scan">CT Scan</option>
                       <option value="ECG">ECG</option>
                        <option value="GTT">GTT</option>
                       <option value="TB Testing">TB Testing</option>
                       <option value="Stool Culture">Stool Culture</option>
                        <option value="Blood Drug Test">Blood Drug Test</option>
                        <option value="">Select a Test</option>
                        <option value="Urine Full Report (UFR)">Urine Full Report (UFR)</option>
                        <option value="Thyroid Profile (TSH / fT4)">Thyroid Profile (TSH / fT4)</option>
                        <option value="Vitamin D (25-Hydroxy)">Vitamin D (25-Hydroxy)</option>
                        <option value="VDRL/RPR (Quantitative)">VDRL/RPR (Quantitative)</option>
                        <option value="Urine Pregnancy Test">Urine Pregnancy Test</option>
                        <option value="Urine for Albumin">Urine for Albumin</option>
                        <option value="Uric Acid">Uric Acid</option>
                        <option value="Urea">Urea</option>
                        <option value="TSH">TSH</option>
                        <option value="Troponin T (High Sensitive)">Troponin T (High Sensitive)</option>
                        <option value="Troponin I">Troponin I</option>
                        <option value="TPHA">TPHA</option>

                </select><br><br>
                <button type="button" onclick="addValue()"></button> <!-- Changed type to button -->
            </div>

            <label for="otherremarks">Other Remarks</label><br>
            <textarea id="otherremarks" name="otherremarks" rows="4" cols="50"></textarea><br><br>

            <input type="hidden" id="labtesting" name="labtesting" value="">

            <input type="hidden" id="priscription_date" name="priscription_date" value="<?= date('Y-m-d'); ?>">

            <input type="submit" value="Submit">
        </form>
    </div>
</article>

<!-- Display selected values -->
<p>Selected Values:</p>
<ul id="selectedValues"></ul>

<script>
    var selectedValues = [];

    // Function to add selected value to array
    function addValue() {
        var select = document.getElementById("labtestinglist");
        var selectedOption = select.options[select.selectedIndex];
        var selectedValue = selectedOption.value;
        var selectedText = selectedOption.text;

        // Check if value is already in array
        if (!selectedValues.includes(selectedValue)) {
            selectedValues.push(selectedValue);

            // Display selected value
            var selectedValuesList = document.getElementById("selectedValues");
            var listItem = document.createElement("li");
            listItem.textContent = selectedText;

            // Create delete button
            var deleteButton = document.createElement("button");
            deleteButton.textContent = "Delete";
            deleteButton.onclick = function() {
                listItem.remove(); // Remove the associated list item when the delete button is clicked
                // Remove the value from the selectedValues array
                var index = selectedValues.indexOf(selectedValue);
                if (index !== -1) {
                    selectedValues.splice(index, 1);
                }
            };

            // Append delete button to list item
            listItem.appendChild(deleteButton);

            // Append list item to selected values list
            selectedValuesList.appendChild(listItem);
        }

        console.log(selectedValues);
    }
    
    function submitForm() {
        
       
        var labtestingValue = selectedValues.join(', ');
        
        
        document.getElementById("labtesting").value = labtestingValue;

        
        selectedValues = [];
        
        document.getElementById("selectedValues").innerHTML = "";
       
        return true;
        
    }
</script>

<?php require_once(APPROOT . "/views/Admin/footer_view.php");?>
