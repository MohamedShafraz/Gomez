<?php

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- bootstrap css and js -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<!-- JS for jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?php require_once(APPROOT . "/views/Lab-Assistant/navbar_view.php"); ?>

<article class="dashboard">

	<div class="container">

		<table class="table table-striped">
			<thead>
				<tr>
					<th>Reference No</th>
					<th>Patient ID</th>
					<th>Contact No </th>
					<th>Test Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				require 'database_connection.php';
				$display_query = "SELECT T1.REF_NO, T1.PATIENT_ID, T1.PATIENT_NAME, T1.PATIENT_MOBILENO, T1.TEST_NAME FROM REPORT_MST T1";
				$results = mysqli_query($con, $display_query);
				$count = mysqli_num_rows($results);
				if ($count > 0) {
					while ($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
				?>
						<tr>
							<td><?php echo $data_row['PATIENT_ID']; ?></td>
							<td><?php echo $data_row['PATIENT_NAME']; ?></td>
							<td><?php echo $data_row['PATIENT_MOBILENO']; ?></td>
							<td><?php echo $data_row['TEST_NAME']; ?></td>
							<td>
								<a href="pdf_maker.php?REF_NO=<?php echo $data_row['REF_NO']; ?>&ACTION=VIEW" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> View PDF</a> &nbsp;&nbsp;
								<a href="pdf_maker.php?REF_NO=<?php echo $data_row['REF_NO']; ?>&ACTION=DOWNLOAD" class="btn btn-danger"><i class="fa fa-download"></i> Download PDF</a>
								&nbsp;&nbsp;
								<a href="pdf_maker.php?REF_NO=<?php echo $data_row['REF_NO']; ?>&ACTION=UPLOAD" class="btn btn-warning"><i class="fa fa-upload"></i> Upload PDF</a>
							</td>
						</tr>
				<?php
					}
				}
				?>
			</tbody>
		</table>


	</div>
	<br>



</article>
<?php require_once(APPROOT . "/views/Lab-Assistant/footer_view.php"); ?>