<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("head.php"); ?>
</head>

<body>


	<?php
	include('./includes/top_nav_path.php');
	include top_nav;
	?>

	<!-- Page Content -->
	<div class="container-fluid" style='margin-top:70px;'>
		<!-- Marketing Icons Section -->
		<div class="row">
			<div class="col-lg-12">
				<h3 class=" text-primary">
					<i class='fa fa-search'></i> Search Donor Avalibility
				</h3>
				<hr>
			</div>
		</div>

		<?php
		include('./includes/blood_bread_path.php');
		include blood_bread;
		?>




		<div class="row  centered-form ">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-search "> </span> Search Donor Avalibility</h3>
					</div>
					<div class="panel-body">
						<form name="frm" id="frm">
							<div class="form-group">
								<label class="control-label text-primary">Search Type</label>
								<select name="STYPE" id="STYPE" required class="form-control input-sm">
									<option value="PINCODE">Pincode</option>
									<option value="AREA">Area</option>
									<option value="CITY">City</option>
									<option value="STATE">State</option>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label text-primary">Required Blood Group</label>
								<select name="BLOOD" id="BLOOD" required class="form-control input-sm">
									<option value="A+">A+</option>
									<option value="B+">B+</option>
									<option value="O+">O+</option>
									<option value="AB+">AB+</option>
									<option value="A1+">A1+</option>
									<option value="A2+">A2+</option>
									<option value="A1B+">A1B+</option>
									<option value="A2B+">A2B+</option>
									<option value="A-">A-</option>
									<option value="B-">B-</option>
									<option value="O-">O-</option>
									<option value="AB-">AB-</option>
									<option value="A1-">A1-</option>
									<option value="A2-">A2-</option>
									<option value="A1B">A1B-</option>
									<option value="A2B">A2B-</option>
									<option value="A2B">Bombay o+</option>
									<option value="A2B">Bombay o-</option>

								</select>
							</div>
							<div class="form-group">
								<label class="control-label text-primary">Search Text</label>
								<input type="text" name="str" id="str" required placeholder="Type Here" class="form-control input-sm">
							</div>

							<div class="form-group">
								<button class="btn btn-primary" name="submit" type="button" id="submit"><i class='fa fa-search'></i> Search Donor</button>
							</div>

					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6" id="feedback">
				<p>
					Please fill the correct details and search your nearest donor.For more queries contact our admin.
				</p>
			</div>



		</div>

	</div>


	<?php
	include('./includes/footer_path.php');
	include footer;
	?>

	<script>
		$(document).on('click', '#submit', function() {

			$.ajax({
				url: "search_don.php",
				method: "POST",
				data: $("#frm").serialize(),
				success: function(data) {
					$("#feedback").html(data);

				}
			});

		});
	</script>

</body>

</html>