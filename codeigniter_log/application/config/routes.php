<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts/(:any)'] = 'posts/view/$1';
$route['posts']='posts/index';
$route['default_controller'] = 'user';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
