<?php

define('DB_NAME', 'sistema');

define('DB_USER', 'root');

define('DB_PASSWORD', '');

define('DB_HOST', 'localhost');

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
if ( !defined('BASEURL') )
	define('BASEURL', '/sistemaapi/');
	
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'database.php');
