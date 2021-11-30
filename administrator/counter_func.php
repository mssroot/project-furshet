<?php
	require_once "../configure.php";

	if(isset($_GET['insert'])){
		$category = mysql_real_escape_string($_POST['category']);
		$title = mysql_real_escape_string($_POST['title']);
		$number = mysql_real_escape_string($_POST['number']);
		$descr = mysql_real_escape_string($_POST['number']);
		$counter_active = 1;

		$sql = "insert into counter (category, title, number, descr, counter_active)
						values ('$category', '$title','$number','$descr','$counter_active')";
		if(mysql_query($sql)){
			?>
			<script type="text/javascript">
				alert("successfully uploaded");
				window.location.href="index.php?succ";
			</script>
			<?php
		}
		else {
			?>
			<script type="text/javascript">
				alert("error while uplaoding");
				window.location.href="index.php?error";
			</script>>
			<?php
		}
	}
?>