<?php
/**
 * Created by PhpStorm.
 * User: levi
 * Date: 8/28/17
 * Time: 1:34 PM
 */

namespace App\Core;


/**
 * Class Request
 * @package App\Core
 * Provides a handful of methods for retrieving information about the current request
 */
class Request
{

    /**
     * @return string
     * Returns the uri for the current request
     */
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }


    /**
     * @return mixed
     * Returns the current request type (i.e. GET, POST)
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}