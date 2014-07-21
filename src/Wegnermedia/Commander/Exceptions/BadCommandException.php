<?php namespace Wegnermedia\Commander\Exceptions;

/**
* Bad Command Exception
*/
class BadCommandException extends \Exception
{

	public $command;

	function __construct($command)
	{
		$this->command = $command;

		parent::__construct("Given Command [{$command}] is not a valid Object.");
	}

	/**
	 * Get the given Command Name
	 *
	 * @return string
	 **/
	public function getCommand()
	{
		return $this->command;
	}
}