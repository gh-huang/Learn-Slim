<?php
namespace app\Http;

use Slim\Views\PhpRenderer;

/**
* BaseController
*/
abstract class BaseController
{	
	protected $renderer;
	protected $medoo;

	function __construct(PhpRenderer $renderer, \medoo $medoo)
	{
		$this->renderer = $renderer;
		$this->medoo = $medoo;
	}
}