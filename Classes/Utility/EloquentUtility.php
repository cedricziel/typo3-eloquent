<?php

namespace CedricZiel\Eloquent\Utility;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class EloquentUtility
 *
 * Simple utilities to ease the handling of the eloquent ORM
 *
 * @package CedricZiel\Eloquent\Utility
 */
class EloquentUtility {

	/**
	 * Boots the eloquent ORM
	 * @param array $connection
	 */
	public static function bootEloquent($connection = NULL) {

		$capsule = new Capsule();

		$capsule->addConnection(self::getDefaultConnection());

		$capsule->setAsGlobal();
		$capsule->bootEloquent();
	}

	/**
	 * @return array
	 */
	protected static function getDefaultConnection() {

		return [
			'driver' => 'mysql',
			'host' => $GLOBALS['TYPO3_CONF_VARS']['DB']['password'],
			'database' => $GLOBALS['TYPO3_CONF_VARS']['DB']['database'],
			'username' => $GLOBALS['TYPO3_CONF_VARS']['DB']['username'],
			'password' => $GLOBALS['TYPO3_CONF_VARS']['DB']['password'],
			'charset' => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix' => '',
		];
	}
}
