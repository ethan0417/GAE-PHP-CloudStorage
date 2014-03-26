<?php
	require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
	use google\appengine\api\cloud_storage\CloudStorageTools;

	$object_url = 'gs://cp-300-ethan-taipei101.appspot.com/'.time().rand(0,1000).'.txt';
	$options = stream_context_create(['gs'=>['acl'=>'public-read','Content-Type' => 'text/plain']]);

	// public-read, public-read-write, authenticated-read, bucket-owner-read, bucket-owner-full-control

	$my_file = fopen($object_url, 'w', false, $options);
	for($i=0;$i<900;$i++) {
	  fwrite($my_file, 'Number '.$i.' - '.rand(0,1000).'\n');
	}
	fclose($my_file);

	$object_public_url = CloudStorageTools::getPublicUrl($object_url, false);

	header('Location:' .$object_public_url);
