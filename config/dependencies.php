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

$container['UserController'] = function ($c) {
	return new app\Http\Controllers\UserController($c['renderer'], $c['medoo']);
};












