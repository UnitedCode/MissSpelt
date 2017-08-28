<?php

use App\Core\App;
// Add our helper methods to the app
require 'core/helpers.php';

// Add app configuration to the apps registry
App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));


