<?php

namespace Hub;

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
 *
 * Singleton trait.
 */
trait Singleton
{
	/**
	 * @var self
	 */
	private static $instance;

	/**
	 * Get class instance statically.
	 */
	public static function __getInstance()
	{
		if (self::$instance === null) {
			self::$instance = new self(...func_get_args());
		}
		return self::$instance;
	}

	/**
	 * Prevent clone instance.
	 */
	private function __clone()
	{
	}
}