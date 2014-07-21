<?php namespace Wegnermedia\Commander\Exceptions;

/**
* Handler not found Exception
*/
class HandlerNotFoundException extends \Exception
{
	public $handler;

	function __construct($handler)
	{
		$this->handler = $handler;

		parent::__construct("Command Handler [{$handler}] not found.");
	}
}