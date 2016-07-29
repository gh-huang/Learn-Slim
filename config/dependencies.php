<?php
//DIC configuration

$container = $app->getContainer();

//monolog
$container['logger'] = function ($c) {
	$settings = $c->get('settings')['logger'];
	$logger = new Monolog\Logger($settings['name']);
	$logger->pushProcessor(new Monolog\Processor\UidProcessor());
	$logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
	return $logger;
};

//view renderer
$container['renderer'] = function ($c) {
	$settings = $c->get('settings')['renderer'];
	return new Slim\Views\PhpRenderer($settings['template_path']);
};

//database orm
$container['medoo'] = function ($c) {
	$settings = $c->get('settings')['medoo'];
	return new medoo($settings);
};

// $container['BaseController'] = function ($c) {
// 	$controller = new app\Http\BaseController();
// 	// $controller->setLogger($c['logger']);
// 	$controller->setRenderer($c['renderer']);
// 	return $controller;
// };

$container['PageController'] = function ($c) {
	$page = new app\Http\Controllers\PageController($c);
	// $page->setRenderer($c['renderer']);
	// var_dump($c);
	return $page;
};

// $container['UserController'] = function ($c) {
// 	$user = new app\Http\Controllers\UserController();
// 	// $user->setRenderer($c['renderer']);
// 	return $user;
// };