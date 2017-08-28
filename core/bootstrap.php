<?php

use App\Core\App;

// Add app configuration to the apps registry
App::bind('config', require 'config.php');

// Add our helper methods to the app
require 'core/helpers.php';