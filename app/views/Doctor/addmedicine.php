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
    }

    label {
        text-align: center;
        color: darkblue;
        margin-right: 2%;
    }

    .dashboard {
        text-align: center;
    }

    .delete-button {
        margin-left: 10px;
        background-color: red;
        color: white;
        border: none;
        padding: 5px;
        cursor: pointer;
    }

    .delete-button:hover {
        background-color: darkred;
    }

    #submit {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: block;
        margin: 0 auto;
    }

    .bluebutton {
        background-color: darkblue;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .medicine-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .medicine-table th, .medicine-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .medicine-table th {
        background-color: #f2f2f2;
    }
</style>

<aside></aside>
<article class="dashboard" style="font-family: Inter;">
    <div style="margin-left: 24%; display: flex; justify-content: center;">
        <form class="card" id="medicineForm" style="width: 90%; margin-top: 5%; width: 100%" action="<?php echo URLROOT; ?>/Doctor/AddMedicine" method="POST" onsubmit="return submitForm()">
            <h1 style="text-align: center; margin-bottom: 15px; margin-top: 15px; color: darkblue">Medicine Information</h1>
            <ul id="medicinelist"></ul>
            <div id="medicineItems">
                <div style="display: flex; flex-direction: row; justify-content: center;">
                <label for="medicineName">Medicine Name</label>
                <select name="medicineName" id="medicineName" style="border: none;" required>
                    <?php foreach ($drugs as $drug) { ?>
                        <option value="<?php echo $drug['name']; ?>" data-dosage-type="<?php echo $drug['dosage_type']; ?>">
                            <?php echo $drug['name']; ?>
                        </option>
                    <?php } ?>
                    <!-- <option value="custom" data-dosage-type="">Enter Custom Medicine</option> -->
                </select>

                <input type="text" id="customMedicineName" name="customMedicineName" placeholder="Enter Medicine Name" style="display: none; height: 40px;" />
                <button type="button" id="customMedicineClose" style="display: none;">X</button>

                <label style="margin-left: 2%;" for="dose">Dose</label>
                <input type="number" id="dose" name="dose" min="1" required>

                <label style="margin-left: 2%;" for="dosage_type">Dosage Type</label>
                <input type="hidden" id="dosage_type" name="dosage_type" value="">
                <p id="dosageTypeDisplay"></p>
                <label style="margin-left: 2%;">Timing</label>
                <select name="timing" id="timing">
                        <option value="Morning">Morning</option>
                        <option value="Evening">Evening</option>
                        <option value="Night">Night</option>
                        <option value="morningevening">Morning and Evening</option>
                        <option value="morningnight">Morning and Night</option>
                </select>

                <label style="margin-left: 2.5%;">Before/After Meal</label>
                <select name="meal" id="meal">
                        <option value="Before">Before</option>
                        <option value="After">After</option>
                </select>

                    <button class="bluebutton" onclick="addMedicine(event)" style="margin-left: 5%;">Add</button>
                </div>
            </div>
            <input type="hidden" name="medicineNameValues[]" id="medicineNameValues">
            <input type="hidden" name="doseValues[]" id="doseValues">
            <input type="hidden" name="timingValues[]" id="timingValues">
            <input type="hidden" name="mealValues[]" id="mealValues">
            <input type="hidden" name="dosageTypeValues[]" id="dosageTypeValues">
            <button id="submit" type="submit" style="width: 25%; margin-top: 20px;">Submit</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        var medicineItems = [];
    var doses = [];
    var timings = [];
    var meals = [];
    var dosageTypes = [];

    document.addEventListener('DOMContentLoaded', function () {
        var customMedicineInput = document.getElementById('customMedicineName');
        var medicineNameSelect = document.getElementById('medicineName');
        var customMedicineClose = document.getElementById('customMedicineClose');
        var dosageTypeDisplay = document.getElementById('dosageTypeDisplay');

        medicineNameSelect.addEventListener('change', handleMedicineSelection);

        customMedicineClose.addEventListener('click', resetCustomMedicineInput);
    });

    function handleMedicineSelection() {
        var medicineNameSelect = document.getElementById('medicineName');
        var customMedicineInput = document.getElementById('customMedicineName');
        var customMedicineClose = document.getElementById('customMedicineClose');
        var dosageTypeDisplay = document.getElementById('dosageTypeDisplay');
        var dosageTypeHiddenInput = document.getElementById('dosage_type');

        var selectedOption = medicineNameSelect.options[medicineNameSelect.selectedIndex];
        var dosageType = selectedOption.getAttribute('data-dosage-type');

        if (medicineNameSelect.value === 'custom') {
            customMedicineInput.style.display = 'inline-block';
            customMedicineClose.style.display = 'inline-block';
            dosageTypeDisplay.textContent = 'Custom';
            dosageTypeHiddenInput.value = ''; 
        } else {
            customMedicineInput.style.display = 'none';
            customMedicineClose.style.display = 'none';
            dosageTypeDisplay.textContent = dosageType ? dosageType : '';
            dosageTypeHiddenInput.value = dosageType; // Update hidden input
        }
    }

    function resetCustomMedicineInput() {
        var customMedicineInput = document.getElementById('customMedicineName');
        var customMedicineClose = document.getElementById('customMedicineClose');
        var medicineNameSelect = document.getElementById('medicineName');
        var dosageTypeDisplay = document.getElementById('dosageTypeDisplay');
        var dosageTypeHiddenInput = document.getElementById('dosage_type');

        customMedicineInput.value = '';
        customMedicineInput.style.display = 'none';
        customMedicineClose.style.display = 'none';
        medicineNameSelect.value = ''; 
        dosageTypeDisplay.textContent = '';
        dosageTypeHiddenInput.value = ''; 
    }

    function addMedicine(event) {
        event.preventDefault(); 

        var medicineNameSelect = document.getElementById('medicineName');
        var customMedicineName = document.getElementById('customMedicineName');
        var dose = document.getElementById('dose').value;
        var timing = document.getElementById('timing').value;
        var meal = document.getElementById('meal').value;
        var dosageType = document.getElementById('dosage_type').value;

        var medicineName = medicineNameSelect.value === 'custom'
            ? customMedicineName.value
            : medicineNameSelect.value;

        if (!medicineName) {
            alert('Please enter a medicine name.');
            return;
        }

        medicineItems.push(medicineName);
        doses.push(dose);
        timings.push(timing);
        meals.push(meal);
        dosageTypes.push(dosageType);

        renderMedicineList();
    }

    function renderMedicineList() {
        var ul = document.getElementById('medicinelist');
        ul.innerHTML = ''; 

        var table = document.createElement('table');
        table.classList.add('medicine-table');

        var headerRow = document.createElement('tr');
        var headers = ['Medicine', 'Dose', 'Dosage Type', 'Timings', 'Meals', 'Actions'];
        headers.forEach(function (headerText) {
            var th = document.createElement('th');
            th.appendChild(document.createTextNode(headerText));
            headerRow.appendChild(th);
        });
        table.appendChild(headerRow);

        for (var i = 0; i < medicineItems.length; i++) {
            var tr = document.createElement('tr');

            tr.appendChild(createTableCell(medicineItems[i]));
            tr.appendChild(createTableCell(doses[i]));
            tr.appendChild(createTableCell(dosageTypes[i]));
            tr.appendChild(createTableCell(timings[i]));
            tr.appendChild(createTableCell(meals[i]));

            var tdActions = document.createElement('td');
            var deleteButton = document.createElement('button');
            deleteButton.appendChild(document.createTextNode('Delete'));
            deleteButton.classList.add('delete-button');
            deleteButton.setAttribute('data-index', i);
            deleteButton.addEventListener('click', function (event) {
                deleteMedicine(event.target.getAttribute('data-index'));
            });
            tdActions.appendChild(deleteButton);
            tr.appendChild(tdActions);
            table.appendChild(tr);
        }

        ul.appendChild(table);
    }

    function createTableCell(content) {
        var td = document.createElement('td');
        td.appendChild(document.createTextNode(content));
        return td;
    }

    function deleteMedicine(index) {
        medicineItems.splice(index, 1);
        doses.splice(index, 1);
        timings.splice(index, 1);
        meals.splice(index, 1);
        dosageTypes.splice(index, 1);
        renderMedicineList();
    }

    function submitForm() {
        document.getElementById('medicineNameValues').value = JSON.stringify(medicineItems);
        document.getElementById('doseValues').value = JSON.stringify(doses);
        document.getElementById('timingValues').value = JSON.stringify(timings);
        document.getElementById('mealValues').value = JSON.stringify(meals);
        document.getElementById('dosageTypeValues').value = JSON.stringify(dosageTypes);
        return true; 
    }
    </script>
</article>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>
