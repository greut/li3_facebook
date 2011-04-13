<?php

namespace li3_facebook;
use \Facebook;

class FacebookApps extends \lithium\core\Adaptable
{
	/**
	 * A Collection of the configurations you add through FacebookApps::config().
	 *
	 * @var Collection
	 */
	protected static $_configurations = array();

	public static function get($name) {
		$config = static::config($name);
		return new Facebook($config);
	}
}