<?php

$router->get('', 'PagesController@index');
$router->get('menu', 'PagesController@menu');
$router->get('contact', 'PagesController@contact');
$router->get('about', 'PagesController@about');
$router->get('credits', 'PagesController@credits');

$router->get('reviews', 'ReviewController@index');
$router->post('reviews', 'ReviewController@create');

$router->get('reservations', 'ReservationController@index');
$router->get('reservations/create', 'ReservationController@create');
$router->post('reservations/create', 'ReservationController@store');
$router->get('reservations/check', 'ReservationController@check');
$router->post('reservations/check', 'ReservationController@view');
$router->post('reservations/cancel', 'ReservationController@destroy');