<?php

$router->get('', 'PagesController@index');
$router->get('menu', 'PagesController@index');
$router->get('contact', 'PagesController@index');
$router->get('about', 'PagesController@index');

$router->get('reviews', 'PagesController@index');
$router->post('reviews', 'PagesController@index');

$router->get('reservations', 'PagesController@index');
$router->get('reservations/create', 'PagesController@index');
$router->post('reservations/create', 'PagesController@index');
$router->get('reservation/check', 'PagesController@index');
$router->post('reservations/check', 'PagesController@index');