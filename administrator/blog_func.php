<?php
	require_once "../configure.php";

	if(isset($_GET['insert'])) {
		$title = mysql_real_escape_string($_POST['title']);
		$descr = mysql_real_escape_string($_POST['descr']);

		$file = rand(1000,100000)."-".$_FILES['file']['name'];
	    $file_loc = $_FILES['file']['tmp_name'];
	    $file_size = $_FILES['file']['size'];
	    $file_type = $_FILES['file']['type'];
	    $folder="../uploads/";

	    // new file size in KB
	    $new_size = $file_size/1024;
	    // new file size in KB

	    // make file name in lower case
	    $new_file_name = strtolower($file);
	    // make file name in lower case

	    $final_file=str_replace(' ','-',$new_file_name);

	    if(move_uploaded_file($file_loc,$folder.$final_file)){
	    	$sql = "insert into blog (file, size, type, title, descr)
	    					values('$final_file', '$new_size', '$file_type', '$title','$descr')";
	    	$result = mysql_query($sql);
	    	?>
	    	<script>
	    		alert("successfully uploaded");
	    		window.location.href="index.php?settings&blog=successfully";
	    	</script>
	    	<?php
	    }
	    else {
	    	?>
	    		<script>
	    			alert("error while uploading");
	    			window.location.href="index.php?settings&blog=fail";
	    		</script>
	    	<?php
	    }
	}
?>