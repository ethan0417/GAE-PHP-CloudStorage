<?php
	header('Content-Type: text/plain; charset=UTF-8');
	
	var_dump($_FILES);
	$gs_name = $_FILES['uploaded_files']['tmp_name'];
	
	move_uploaded_file($gs_name, 'gs://cp-300-ethan-taipei101.appspot.com/new_file.txt');
?>
