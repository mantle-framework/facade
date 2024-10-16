<?php
/**
 * Queue class file.
 *
 * @package Mantle
 */

namespace Mantle\Facade;

use Mantle\Facade\Facade;
use Mantle\Queue\Queue_Fake;

/**
 * Queue Facade
 *
 * @method static void dispatch(mixed $job)
 * @method static void dispatch_after_response(mixed $job)
 * @method static void dispatch_now(mixed $job)
 *
 * @see \Mantle\Queue\Dispatcher
 */
class Queue extends Facade {
	/**
	 * Replace the bound instance with a fake.
	 *
	 * @return Queue_Fake
	 */
	public static function fake() {
		$fake = new Queue_Fake( static::$app );

		static::swap( $fake );

		return $fake;
	}

	/**
	 * Get the registered name of the component.
	 */
	protected static function get_facade_accessor(): string {
		return 'queue';
	}
}
