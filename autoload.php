<?php
session_start();
error_reporting(E_ALL); 
ini_set('display_errors', 1);

 define('baseUrl',  'http://' . $_SERVER['HTTP_HOST']);

spl_autoload_register(function($class) {
    require_once './classes/' . $class . '.php';
});
