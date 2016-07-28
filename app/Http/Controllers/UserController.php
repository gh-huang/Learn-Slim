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
		$this->renderer->render($responce, 'register.html');
	}

	public function create($request, $responce)
	{
		$this->medoo->insert('user',[
			'username' => '342423',
			'password' => 'password',
			'email' => '11@qq.com'
		]);
	} 
}