# Laravel Command Bus Service

This Package gives you an easy way to throw Commands in a Command Bus.

## Installation

Per usual, install Commander through Composer.

```js
"require": {
    "wegnermedia/commander": "dev-master"
}
```

Next, update `app/config/app.php` to include a reference to this package's service provider in the providers array.

```php
'providers' => [
    'Wegnermedia\Commander\CommanderServiceProvider'
]
```

Next, add the facade `app/config/app.php`.

```php
'aliases' => [
    'Commander' => 'Wegnermedia\Commander\Facade'
]
```

And now build something awesome.

## Usage via Trait

```php
<?php

use Wegnermedia\Commander\CommanderTrait;

class CartController extends ShopController {

	use CommanderTrait;

	/**
	 * Add Item to Cart.
	 *
	 * @return Response
	 */
	public function addItem()
	{
		$inputs = Input::all();

		// Validation goes here ...

		$command = new AddItemToCartCommand($inputs);

		$result = $this->execute($command);

		// ... create the Response
	}
}
```

## Usage via Facade

```php
<?php

class CartController extends ShopController {

	/**
	 * Add Item to Cart.
	 *
	 * @return Response
	 */
	public function addItem()
	{
		$inputs = Input::all();

		// Validation goes here ...

		$command = new AddItemToCartCommand($inputs);

		$result = Commander::execute($command);

		// ... create the Response
	}
}
```


Done!