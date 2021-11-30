<?php
	require_once "../configure.php";

	if(isset($_GET['insert'])){
		$category = mysql_real_escape_string($_POST['category']);
		$title = mysql_real_escape_string($_POST['title']);
		$price = mysql_real_escape_string($_POST['price']);
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
	    	$sql = "insert into menu (category, file, type, size, title, price, descr)
	    				values ('$category', '$final_file','$file_type', '$new_size', '$title', '$price', '$descr')";
	    	$query = mysql_query($sql);
	    	?>
	    	<script>
	    		alert("successfully uploaded");
	    		window.location.href='index.php?successfully';
	    	</script>
	    	<?php
	    }
	    else {
	    	?>
	    	<script>
	    		alert("error while uploading");
	    		window.location.href='index.php?fail';
	    	</script>
	    	<?php
	    }
	}
?>