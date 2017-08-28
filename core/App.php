<?php

namespace App\Core;


/**
 * Class App
 * @package App\Core
 * This class contains a registry that can contain configurations options
 * such as databases connections etc
 */
class App
{
	protected static $registry = [];


    /**
     * @param $key
     * @param $value
     * Binds a value to the registry.
     */
    public static function bind($key, $value)
	{
		static::$registry[$key] = $value;
	}


    /**
     * @param $key
     * Retrieves a value from the registry based on the key
     */
    public static function get($key)
	{
		if(!array_key_exists($key, static::$registry)) {
			throw new Exception("No {$key} exists in registry");
		}
	}
}