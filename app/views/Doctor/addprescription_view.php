<?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<style>

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
        margin: 0 auto;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    input[type="text"],
    input[type="date"],
    input[type="number"],
    textarea,
    select {
        width: 100%;
        display: inline-block;
        border: 1px solid #ccc;
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
        border-color: #4CAF50;
    }

    label {
        text-align: left;
        color: darkblue;
        display: block;
        margin-top: 10px;
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
    }

    #selectedValuesTable {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    #selectedValuesTable th,
    #selectedValuesTable td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    #selectedValuesTable th {
        background-color: #f2f2f2;
    }

    #selectedValuesTable button {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #selectedValuesTable button:hover {
        background-color: #e53935;
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
    }

    .hidden {
        display: none;
    }
</style>


<article class="dashboard">
    <div>
        <form id="labForm" class="card" onsubmit="return submitForm()" action="<?= URLROOT . '/Doctor/AddPrescription' ?>" method="post">
            <input type="hidden" name="Appointment_Id" value="<?php echo $appointment[0]['Appointment_Id'] ?>">
            <input type="hidden" name="patient_id" value="<?php echo $appointment[0]['Patient_Id'] ?>">

            <label for="disease">Disease</label>
            <div class="input-group">
                <select id="disease" name="disease">
                    <?php foreach ($diseases as $disease) : ?>
                    <option value="<?php echo $disease['disease']; ?>"><?php echo $disease['disease']; ?></option>
                    <?php endforeach; ?>
                    <option value="custom">Enter custom Disease</option>
                </select>
                <input type="text" id="customDisease" style="display: none;" name="disease" placeholder="Enter Disease Name" class="hidden" />
                <button type="button" id="customDiseaseClose" class="hidden">X</button>
            </div>

            <label for="prescription">Instructions</label>
            <textarea id="prescription" name="prescription" rows="4" cols="50" required></textarea>

            <label for="labtesting">Lab Testing</label>
            <table id="selectedValuesTable"></table>
            <div class="input-group">
                <select id="labtestinglist" name="labtesting">
                    <?php foreach ($labtests as $test) : ?>
                    <option value="<?php echo $test['test']; ?>"><?php echo $test['test']; ?></option>
                    <?php endforeach; ?>
                    <option value="custom">Enter custom Labtest</option>
                </select>
                <input type="text" id="customLabtest" name="labtesting" style="display: none;" placeholder="Enter Test Name" class="hidden" />
                <button type="button" id="customMedicineClose" class="hidden">X</button>
                <button type="button" style="background-color: darkblue; color: white; border: none; height:34px" onclick="addValue()">Add test</button>
            </div>

            <label for="otherremarks">Other Remarks</label>
            <textarea id="otherremarks" name="otherremarks" rows="4" cols="50"></textarea>

            <input type="hidden" id="labtesting" name="labtesting" value="" >
            <input type="hidden" id="priscription_date" name="priscription_date" value="<?= date('Y-m-d'); ?>">
            <br></br>
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

        if (this.value === 'custom') {
            customDiseaseInput.style.display = 'inline';
            diseaseList.style.display = 'none';
            customDiseaseClose.style.display = 'inline';
        } else {
            customDiseaseInput.style.display = 'none';
            diseaseList.style.display = 'inline';
            customDiseaseClose.style.display = 'none';
        }

        customDiseaseClose.addEventListener('click', function() {
                customDiseaseInput.style.display = 'none';
                diseaseList.style.display = 'inline';
                customDiseaseClose.style.display = 'none';
        });
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
            deleteButton.textContent = "Delete";
            deleteButton.onclick = function () {
                var rowIndex = newRow.rowIndex;
                selectedValuesTable.deleteRow(rowIndex);
                var index = selectedValues.indexOf(selectedValue);
                if (index !== -1) {
                    selectedValues.splice(index, 1);
                }
            };

            cell2.appendChild(deleteButton);
        }

        if (select.value === 'custom') {
            customLabtestInput.value = '';
            select.value = '';
            customLabtestInput.style.display = 'none';
        }

        console.log(selectedValues);
    }

    function submitForm() {
        var diseaseSelect = document.getElementById('disease');
        var customDiseaseInput = document.getElementById('customDisease');

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

