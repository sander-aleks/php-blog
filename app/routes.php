<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('tasks', 'TasksController@index');
$router->get('blogs', 'BlogController@blog');

$router->post('task', 'TasksController@store');
$router->post('delete','TasksController@delete');
$router->post('modify','TasksController@update');
