<?php

$route = explode('/', $_SERVER['REQUEST_URI']);
$route = (isset($route[1])) ? $route[1] : 'principal';

$root = "http://" . $_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);

define('URL', $root);
