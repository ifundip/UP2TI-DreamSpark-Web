<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'control_pendaftaran';
$route['ajax']                  = 'control_ajax';
$route['ajax/(:any)']           = 'control_ajax/$1';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
