<?php
//routes
// $app->get('/', function ($request, $response) {
// 	//Sample log message
// 	$this->logger->info("Learn-Slim '/' route");
// 	return $this->renderer->render($response, 'test.html');
// });

$app->get('/', 'PageController:index');

//register
$app->get('/signup', 'UserController:store');
$app->post('/signup', 'UserController:create');