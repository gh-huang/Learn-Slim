<?php
//routes
$app->get('/', function() {
	//Sample log message
	$this->logger->info("Learn-Slim '/' route");
	echo "this is index.php";
});