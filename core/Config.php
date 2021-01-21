<?php

session_start();
ob_start();

define('URL', 'http://localhost/phpoo/');
define('URLADM', 'http://localhost/phpoo/adm');

define('CONTROLLER', 'Home');
define('METODO', 'index');

//CREDENCIAIS DE ACESSO AO BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'siteoo');