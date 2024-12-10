<body style="background-image:linear-gradient(90deg, white, #E9F3FD); font-family: 'Inter', sans-serif;">
    <?php require_once(APPROOT . "/views/Doctor/navbar_view.php"); ?>

    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet">
    <link rel="stylesheet" href="<?= URLROOT ?>/css/Doctor/doctorcommon.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid darkblue;
            text-align: center;
        }

        th {
            background-color: darkblue;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: white;
        }

        .details {
            margin-bottom: 20px;
        }

        .card {
            margin-left: 23%;
            padding: 20px;
            border: 2px solid darkblue;
        }

        .bluebutton {
            margin-top: 2%;
            width: 200px;
            background-color: blue;
            color: white;
        }

        .separator {
            height: 2px;
            background-color: darkblue;
            margin: 20px 0;
        }
    </style>

    <div class="card">
        <div style="display: flex; justify-content: space-between;">
            <div class="details">
                <p>Patient Name: <?= $patient["fullname"] ?></p>
                <p>Patient Age: <?= $prescription[0]["age"] ?></p>
                <p>Patient Gender: <?= $patient["gender"] ?></p>
            </div>
            <div class="details">
                <p>Prescription Date: <?= $prescription[0]["priscription_date"] ?></p>
            </div>
        </div>

        <div class="separator"></div>

        <div class="details">
            <p>Disease: <?= $prescription[0]["disease"] ?></p>
            <p>Prescription: <?= $prescription[0]["prescription"] ?></p>
            <p>Lab Testing: <?= $prescription[0]["labtesting"] ?></p>
        </div>

        <div class="separator"></div>

        <div class="details">
            <p>Other Remarks: <?= $prescription[0]["otherremarks"] ?></p>
        </div>

        <?php if ($medicine): ?>
            <div class="separator"></div>
            <div class="details">
                <h3>Medicines</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Medicine Name</th>
                            <th>Medicine Dosage</th>
                            <th>Dosage Type</th>
                            <th>Times</th>
                            <th>Before/After Meal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($medicine as $med): ?>
                            <tr>
                                <td><?= $med["medicine"] ?></td>
                                <td><?= $med["dose"] ?></td>
                                <td><?= $med["doseunit"] ?></td>
                                <td><?= $med["times"] ?></td>
                                <td><?= $med["before_after"] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

        <?php if ($prescription[0]["priscription_date"] == date("Y-m-d")): ?>
            <button class="bluebutton" onclick="editPrescription()">Edit Prescription</button>
        <?php endif; ?>
    </div>

    <script>
        function editPrescription() {
            window.location.href = '<?= URLROOT ?>/Doctor/EditPrescriptionView/<?= $prescription[0]["prescriptionnumber"] ?>';
        }
    </script>

    <?php require_once(APPROOT . "/views/Admin/footer_view.php"); ?>
</body>