<?php
	require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
	use google\appengine\api\cloud_storage\CloudStorageTools;

	$object_image_file = 'gs://cp-300-ethan-taipei101.appspot.com/1353308263414.jpg';
	$object_image_url = CloudStorageTools::getImageServingUrl($object_image_file);

	header('Location:' .$object_image_url);