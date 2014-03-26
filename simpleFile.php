<?php
	//file_put_contents('gs://cp-300-ethan-taipei101.appspot.com/hello.txt', 'Hello Simple File.');

	
	$options = ['gs' => ['Content-Type' => 'text/plain']];
	$ctx = stream_context_create($options);
	file_put_contents('gs://cp-300-ethan-taipei101.appspot.com/hello.txt', 'Hello Simple2 File.', 0, $ctx);

	echo 'Simple File test.';