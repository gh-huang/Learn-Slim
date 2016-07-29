<?php
namespace app\Http\Controllers;

use app\Http\BaseController;

/**
* PageController
*/
class PageController extends BaseController
{
	public function index($request, $responce)
	{
		// $this->logger->info("Learn-Slim '/' route");
		$this->ci->get('renderer')->render($responce, 'test.html');
	}
}