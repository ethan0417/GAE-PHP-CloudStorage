<?php
	$fp = fopen('gs://cp-300-ethan-taipei101.appspot.com/streamedFile.txt', 'w');
	fwrite($fp, 'Hello streamed File.');
	fclose($fp);
	echo 'Streamed File Sample.';