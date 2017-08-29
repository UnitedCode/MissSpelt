<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\Request;
use App\Core\Router;

$routes = Router::load('app/routes.php')->direct(Request::uri(), Request::method());