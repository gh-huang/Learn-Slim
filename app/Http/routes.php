<?php
//routes
$app->get('/', function ($request, $response) {
	//Sample log message
	$this->logger->info("Learn-Slim '/' route");
	return $this->renderer->render($response, 'test.html');
});