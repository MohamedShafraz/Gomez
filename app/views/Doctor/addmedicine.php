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
                    <?php foreach ($drugs as $drug) {
                        echo "<option value='{$drug['name']}'>{$drug['name']}</option>";
                    } ?>
                    <option value="custom">Enter Custom Medicine</option>
                </select>
                <input type="text" id="customMedicineName" name="customMedicineName" placeholder="Enter Medicine Name" style="display: none; height: 40px;" />
                <button type="button" id="customMedicineClose" style="display: none;">X</button>

                    <label style="margin-left: 2%;" for="dose">Dose</label>
                    <input type="number" id="dose" name="dose" min="1" required>

                    <select name="dosage_type" id="dosage_type">
                        <option value="ml">ml</option>
                        <option value="tablets">tablets</option>
                        <option value="drops">drops</option>
                    </select>

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

        document.addEventListener('DOMContentLoaded', function() {
            var customMedicineInput = document.getElementById('customMedicineName');
            var medicineNameSelect = document.getElementById('medicineName');
            var customMedicineClose = document.getElementById('customMedicineClose');

            medicineNameSelect.addEventListener('change', function() {
                if (this.value === 'custom') {
                    customMedicineInput.style.display = 'inline';
                    medicineNameSelect.style.display = 'none';
                    customMedicineInput.setAttribute('required', 'required');
                    customMedicineClose.style.display = 'inline';
                } else {
                    customMedicineInput.style.display = 'none';
                    customMedicineInput.removeAttribute('required');
                    medicineNameSelect.setAttribute('required', 'required');
                    medicineNameSelect.style.display = 'inline';
                    customMedicineClose.style.display = 'none';
                }
            });

            customMedicineClose.addEventListener('click', function() {
                customMedicineInput.style.display = 'none';
                customMedicineInput.removeAttribute('required');
                medicineNameSelect.setAttribute('required', 'required');
                medicineNameSelect.style.display = 'inline';
                customMedicineClose.style.display = 'none';
                medicineNameSelect.value = '';  // Reset the dropdown to the default state
            });
        });


        function addMedicine(event) {
            event.preventDefault(); // Prevent form submission

            var medicineNameSelect = document.getElementById('medicineName');
            var customMedicineName = document.getElementById('customMedicineName');
            var dose = document.getElementById('dose').value;
            var timing = document.getElementById('timing').value;
            var meal = document.getElementById('meal').value;
            var dosageType = document.getElementById('dosage_type').value;

            var medicineName = medicineNameSelect.value === 'custom' ? customMedicineName.value : medicineNameSelect.value;

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

            // Create table element
            var table = document.createElement('table');
            table.classList.add('medicine-table');

            // Create table header row
            var headerRow = document.createElement('tr');
            var headers = ['Medicine', 'Dose', 'Dosage Type', 'Timings', 'Meals', 'Actions'];
            headers.forEach(function(headerText) {
                var th = document.createElement('th');
                th.appendChild(document.createTextNode(headerText));
                headerRow.appendChild(th);
            });
            table.appendChild(headerRow);

            for (var i = 0; i < medicineItems.length; i++) {
                var tr = document.createElement('tr');

                // Create and append cells with medicine details
                var tdMedicine = document.createElement('td');
                tdMedicine.appendChild(document.createTextNode(medicineItems[i]));
                tr.appendChild(tdMedicine);

                var tdDose = document.createElement('td');
                tdDose.appendChild(document.createTextNode(doses[i]));
                tr.appendChild(tdDose);

                var tdDosageType = document.createElement('td');
                tdDosageType.appendChild(document.createTextNode(dosageTypes[i]));
                tr.appendChild(tdDosageType);

                var tdTimings = document.createElement('td');
                tdTimings.appendChild(document.createTextNode(timings[i]));
                tr.appendChild(tdTimings);

                var tdMeals = document.createElement('td');
                tdMeals.appendChild(document.createTextNode(meals[i]));
                tr.appendChild(tdMeals);

                // Create and append cell with delete button
                var tdActions = document.createElement('td');
                var deleteButton = document.createElement('button');
                deleteButton.appendChild(document.createTextNode('Delete'));
                deleteButton.classList.add('delete-button');
                deleteButton.setAttribute('data-index', i);
                deleteButton.addEventListener('click', function(event) {
                    deleteMedicine(event.target.getAttribute('data-index'));
                });
                tdActions.appendChild(deleteButton);
                tr.appendChild(tdActions);

                table.appendChild(tr);
            }

            // Append the table to the ul element
            ul.appendChild(table);
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
            var medicineNameValues = document.getElementById('medicineNameValues');
            var doseValues = document.getElementById('doseValues');
            var timingValues = document.getElementById('timingValues');
            var mealValues = document.getElementById('mealValues');
            var dosageTypeValues = document.getElementById('dosageTypeValues');

            medicineNameValues.value = JSON.stringify(medicineItems);
            doseValues.value = JSON.stringify(doses);
            timingValues.value = JSON.stringify(timings);
            mealValues.value = JSON.stringify(meals);
            dosageTypeValues.value = JSON.stringify(dosageTypes);

            return true; // Allow form submission
        }
    </script>
</article>

<?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>
