<?php namespace Wegnermedia\Commander\Facades;

use Illuminate\Support\Facades\Facade;

class Commander extends Facade {

	protected static function getFacadeAccessor() {
		// Return Name of Binding in IoC Container
		return "Wegnermedia\Commander\Commander";
	}

}