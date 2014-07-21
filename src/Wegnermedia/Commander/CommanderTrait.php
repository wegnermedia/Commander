<?php namespace Wegnermedia\Commander;

use App;

/**
* Commander Service
*/
trait CommanderTrait
{
	/**
	 * Execute a given Command
	 *
	 * @return mixed
	 **/
	public function execute($command)
	{
		// Check if the given Command is an Object
		if ( ! is_object($command) ) throw new BadCommandException($command);

		// Get the qulified handler Classname to handle the Command
		$handler = get_class($command) . 'Handler';

		// Check if the Handler exists
		if ( ! class_exists($handler) ) throw new HandlerNotFoundException($handler);

		// Resolve the Handler ... and we're done
		return App::make($handler)->handle($command);
	}
}