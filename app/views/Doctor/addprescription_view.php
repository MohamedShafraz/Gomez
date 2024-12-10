<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<style>
    /* General Styles */
    body {
        font-family: 'Inter', sans-serif;
        background-image: linear-gradient(90deg, white, #E9F3FD);
    }

    ul li a {
        text-decoration: none;
        color: inherit;
    }

    input[type="submit"] {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: block;
        margin: 0 auto;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: darkblue;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    textarea,
    select {
        width: 100%;
        display: inline-block;
        border: 1px solid darkblue;
        border-radius: 4px;
        box-sizing: border-box;
        padding: 10px;
        margin-top: 5px;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    input[type="number"]:focus,
    textarea:focus,
    select:focus {
        border-color: blue;
    }

    label {
        text-align: left;
        color: darkblue;
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    .dashboard {
        text-align: center;
        padding: 20px;
        max-width: 800px;
        margin: 0 auto;
        border-radius: 8px;
    }

    .card {
        padding: 20px;
        border-radius: 8px;
        width: 100%;
        background: #ffffff;
        border: 2px solid darkblue;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #selectedValuesTable {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    #selectedValuesTable th,
    #selectedValuesTable td {
        padding: 8px;
        text-align: left;
    }

    #selectedValuesTable th {
        background-color: #E9F3FD;
    }

    #selectedValuesTable button {
        background-color: red;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #selectedValuesTable button:hover {
        background-color: darkred;
    }

    .input-group {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .input-group select,
    .input-group input,
    .input-group button {
        margin-top: 0;
        width: auto;
    }

    .input-group input {
        flex-grow: 1;
        margin-right: 10px;
    }

    .input-group button {
        margin-left: 10px;
        background-color: blue;
        color: white;
        border: none;
        height: 34px;
        border-radius: 4px;
        cursor: pointer;
    }

    .input-group button:hover {
        background-color: darkblue;
    }

    .hidden {
        display: none;
    }

    .separator {
        height: 2px;
        background-color: darkblue;
        margin: 20px 0;
    }
</style>

<article class="dashboard" style="font-family: inter; margin-top: 3%; margin-left: 30%;">
    <div>
        <form id="labForm" class="card" onsubmit="return submitForm()" action="<?= URLROOT . '/Doctor/AddPrescription' ?>" method="post">
            <input type="hidden" name="Appointment_Id" value="<?php echo $appointment[0]['Appointment_Id'] ?>">
            <input type="hidden" name="patient_id" value="<?php echo $appointment[0]['Patient_Id'] ?>">

            <label for="disease">Disease</label>
            <div class="input-group">
                <select id="disease" name="disease">
                    <option value="">Select Disease</option>
                    <?php foreach ($diseases as $disease) : ?>
                        <option value="<?= htmlspecialchars($disease['disease'], ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars($disease['disease'], ENT_QUOTES, 'UTF-8') ?>
                        </option>
                    <?php endforeach; ?>
                    <option value="custom">Enter custom Disease</option>
                </select>
                <input type="text" id="customDisease" name="customDisease" placeholder="Enter Disease Name"  style="display: none;"  />
                <button type="button" id="customDiseaseClose" class="hidden">X</button>
            </div>

            <label for="prescription">Instructions</label>
            <textarea id="prescription" name="prescription" rows="4" required></textarea>

            <label for="labtesting">Lab Testing</label>
            <table id="selectedValuesTable"></table>
            <div class="input-group">
                <select id="labtestinglist" name="labtesting">
                    <option value="">Select Lab Test</option>
                    <?php foreach ($labtests as $test) : ?>
                    <option value="<?php echo $test['test']; ?>"><?php echo $test['test']; ?></option>
                    <?php endforeach; ?>
                    <option value="custom">Enter custom Labtest</option>
                </select>
                <input type="text" id="customLabtest" name="labtesting" class="hidden" placeholder="Enter Test Name" style="display: none;" />
                <button type="button" id="customMedicineClose" class="hidden">X</button>
                <button type="button" onclick="addValue()">Add test</button>
            </div>

            <label for="otherremarks">Other Remarks</label>
            <textarea id="otherremarks" name="otherremarks" rows="4"></textarea>

            <input type="hidden" id="labtesting" name="labtesting" value="" >
            <input type="hidden" id="priscription_date" name="priscription_date" value="<?= date('Y-m-d'); ?>">
            <pre>
            </pre>
            <input type="submit" value="Submit">
        </form>
    </div>
</article>



<script>
    var selectedValues = [];

    document.getElementById('disease').addEventListener('change', function () {
        var customDiseaseInput = document.getElementById('customDisease');
        var diseaseList = document.getElementById('disease');
        var customDiseaseClose = document.getElementById('customDiseaseClose');
        
        customDiseaseClose.style.backgroundColor = "red";
        customDiseaseClose.style.color = "white";
        customDiseaseClose.style.border = "none";
        customDiseaseClose.style.cursor = "pointer";

        if (this.value === 'custom') {
            customDiseaseInput.style.display = 'inline';
            diseaseList.style.display = 'none';
            customDiseaseClose.style.display = 'inline';
            customDiseaseInput.setAttribute('required', 'true');
        } else {
            customDiseaseInput.style.display = 'none';
            diseaseList.style.display = 'inline';
            customDiseaseClose.style.display = 'none';
            customDiseaseInput.removeAttribute('required');
        }

        customDiseaseClose.addEventListener('click', function() {
            customDiseaseInput.style.display = 'none';
            diseaseList.style.display = 'inline';
            customDiseaseClose.style.display = 'none';
            diseaseList.selectedIndex = 0;
            customDiseaseInput.removeAttribute('required');
        });
    });

        customDiseaseClose.addEventListener('click', function() {
            customDiseaseInput.style.display = 'none';
            diseaseList.style.display = 'inline';
            customDiseaseClose.style.display = 'none';
            diseaseList.selectedIndex = 0;
            customDiseaseInput.removeAttribute('required');
        });

    document.getElementById('labtestinglist').addEventListener('change', function () {
        var customLabtestInput = document.getElementById('customLabtest');
        var labtestingList = document.getElementById('labtestinglist');
        var customMedicineClose = document.getElementById('customMedicineClose');

        if (this.value === 'custom') {
            customLabtestInput.style.display = 'inline';
            labtestingList.style.display = 'none';
            customMedicineClose.style.display = 'inline';
        } else {
            customLabtestInput.style.display = 'none';
            labtestingList.style.display = 'inline';
            customMedicineClose.style.display = 'none';
        }

        customMedicineClose.addEventListener('click', function() {
            customLabtestInput.style.display = 'none';
            labtestingList.style.display = 'inline';
            customMedicineClose.style.display = 'none';
        });
    });

    function addValue() {
        var select = document.getElementById("labtestinglist");
        var customLabtestInput = document.getElementById("customLabtest");
        var testingList = document.getElementById("labtestinglist");

        var selectedValue = select.value === 'custom' ? customLabtestInput.value : select.value;
        var selectedText = select.value === 'custom' ? customLabtestInput.value : select.options[select.selectedIndex].text;

        if (selectedValue === '') {
            alert('Please enter a custom lab test name.');
            return;
        }

        if (!selectedValues.includes(selectedValue)) {
            selectedValues.push(selectedValue);

            var selectedValuesTable = document.getElementById("selectedValuesTable");
            var newRow = selectedValuesTable.insertRow();
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);

            cell1.textContent = selectedText;

            var deleteButton = document.createElement("button");
            deleteButton.textContent = "X";
            deleteButton.style.backgroundColor = "red";
            deleteButton.style.color = "white";
            deleteButton.style.border = "none";
            deleteButton.style.cursor = "pointer";
            deleteButton.style.marginLeft = "90%";
            deleteButton.onclick = function () {
                var rowIndex = newRow.rowIndex;
                selectedValuesTable.deleteRow(rowIndex - 1); // Adjust for the table header if present
                var index = selectedValues.indexOf(selectedValue);
                if (index !== -1) {
                    selectedValues.splice(index, 1);
                }
            };

            cell2.appendChild(deleteButton);

            var customMedicineClose = document.getElementById('customMedicineClose');
            customMedicineClose.click();
        }

        if (select.value === 'custom') {
            customLabtestInput.value = '';
            select.value = '';
            customLabtestInput.style.display = 'none';
        }

        
    }

    function submitForm() {
        var diseaseSelect = document.getElementById('disease');
        var customDiseaseInput = document.getElementById('customDisease');

        // Prevent submission if a valid disease is not selected
        if (diseaseSelect.value === '' || (diseaseSelect.value === 'custom' && customDiseaseInput.value.trim() === '')) {
            alert('Please select or enter a valid disease.');
            return false;
        }

        if (diseaseSelect.value === 'custom') {
            diseaseSelect.value = customDiseaseInput.value;
        }

        var labtestingValue = selectedValues.join(', ');
        document.getElementById("labtesting").value = labtestingValue;

        selectedValues = [];
        return true;
    }

</script>

</div>
<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>

