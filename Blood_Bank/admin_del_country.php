<?php
include("config/config.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE FROM country WHERE COUNTRY_ID=$id";
	$con->query($sql);
	echo "<script>
		alert('Country Deleted');
		window.open('admin_country.php','_self');
	</script>";
}
?>