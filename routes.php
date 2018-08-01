<?php

$router->get('', 'PagesController@home');
$router->get('concert', 'PagesController@concert');
$router->get('concert/tickets', 'PagesController@ticket');


$router->get('admin/login', "Authenticate@login");
$router->get('admin/signup', "Authenticate@signup");
$router->post('admin/createuser', "Authenticate@createuser");
$router->post('admin/validate', "Authenticate@validate");
$router->get('admin/logout', "Authenticate@logout", true);

$router->get('api/events', "PagesController@apiEvents"); //create a new API controller

$router->get('admin/events', "AdminController@index", true);
$router->get('admin/events/venue', "AdminController@createVenue", true);
$router->get('admin/events/event', "AdminController@createEvent",true);
$router->get('admin/events/ticket', "AdminController@createTicket",true);


// STORE NEW DATA
$router->post('admin/events/venue', "AdminController@storeVenue", true);
$router->post('admin/events/event', "AdminController@storeEvent", true);
$router->post('admin/events/tickets', "AdminController@storeTicket", true);



$router->get('admin/events/show', "AdminController@show", true);
$router->get('admin/events/edit', "AdminController@edit", true);
$router->post('admin/events/update', "AdminController@update", true);
$router->post('admin/events/destroy', "AdminController@destroy", true);
$router->get('admin/profile', "AdminController@getUser",true);


