<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['login'] = 'users/login/index';
$route['register'] = 'users/register/index';
$route['logout'] = 'users/logout';
$route['items/add'] = 'items/add';
$route['items/(:any)'] = 'items/details/$1';
$route['items'] = 'items/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
