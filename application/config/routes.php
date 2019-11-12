<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['login'] = 'admin/login/index';
$route['register'] = 'admin/register/index';
$route['items'] = 'items/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
