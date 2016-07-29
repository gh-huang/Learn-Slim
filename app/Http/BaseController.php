<?php
namespace app\Http;

use Slim\Views\PhpRenderer;
use Interop\Container\ContainerInterface;

/**
* BaseController
*/
class BaseController
{	
	protected $ci;

	public function __construct(ContainerInterface $ci)
	{
		$this->ci = $ci;
	}

}