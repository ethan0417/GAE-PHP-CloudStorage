<!DOCTYPE html>
<html>
	<head>
		<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
	</head>
	<body>
		<?php
			require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
			use google\appengine\api\cloud_storage\CloudStorageTools;

			$options = [ 'gs_bucket_name' => 'cp-300-ethan-taipei101.appspot.com' ];
			$upload_url = CloudStorageTools::createUploadUrl('/userHandler.php', $options);
		?>
		<form action="<?php echo $upload_url?>" enctype="multipart/form-data" method="post" accept-charset="ISO-8859-1">
		    Files to upload: <br>
		   <input type="file" name="uploaded_files" size="40">
		   <input type="submit" value="Send">
		</form>
	</body>
</html>

