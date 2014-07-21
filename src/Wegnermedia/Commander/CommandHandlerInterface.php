<?php namespace Wegnermedia\Commander;

/**
* Command Handler Interface
*/
interface CommandHandlerInterface
{
	public function handle($command);
}