<footer>
	<p class='text-center'>Copyright <span id="copyright_year"></span> &copy; Rebika Shrestha</p>
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
	$(function() {

		$(".DATES").datepicker({

			dateFormat: "yy-mm-dd",
			changeMonth: true,
			changeYear: true,
			yearRange: '1900:' + new Date().getFullYear()
		}).val();

		// Set the current year in the footer
		$('#copyright_year').text(new Date().getFullYear());
	});
</script>