<?php
namespace app\Http\Controllers;

use app\Http\BaseController;

/**
* UserController
*/
class UserController extends BaseController
{

	// public function __construct()
	// {
	// 	parent::__construct();
	// }
	
	public function store($request, $responce)
	{
		// $this->logger->info('test');
		$this->renderer->render($responce, 'register.html');
	}

	public function create($request, $responce)
	{
		$data = $request->getParsedBody();
		var_dump($data);
	} 
}