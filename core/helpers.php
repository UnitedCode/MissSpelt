<?php


/**
 * @param $name
 * @param array $data
 * @return mixed
 * Returns a view form the 'app/views/ directory based on the name parameter
 */
function view($name, $data = [])
{
    extract($data);

    return require "app/views/{$name}.view.php";
}


/**
 * @param $path
 * Redirects the user to a different url
 */
function redirect($path)
{
    header("Location: /{$path}");
}