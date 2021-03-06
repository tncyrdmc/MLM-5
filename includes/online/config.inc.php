<?php
//NOTE DONT CHANGE ANY THING
ini_set("allow_call_time_pass_reference", "true");

//error_reporting( E_ALL ^ E_DEPRECATED );
ini_set('display_errors', 1);

Error_Reporting(~E_NOTICE);

//Defines the Webserver and Path parameters
define('HTTP_SERVER',               'http://' . $_SERVER['SERVER_NAME'] . '/');

define('DIR_IMAGES',     			'images/');

//BASEDIR variable used to include and require files.
//define('BASEDIR',                   getcwd() . DIRECTORY_SEPARATOR);
//define('BASEDIR',                   '/xampp/htdocs/MLM/'. DIRECTORY_SEPARATOR);
define('BASEDIR',                   '/home/newbranding/public_html/MLM/'. DIRECTORY_SEPARATOR);
define('CUR',                   'INR ');

#========= Website Root & HTTP Paths ============#

define("ROOT_PATH", "/home/newbranding/public_html/MLM/");
define("HTTP_PATH", "http://www.newbranding.in/MLM/");
#========= Website Root & HTTP Paths ============#

define('DIR_PLUGINS',               BASEDIR . 'libs' . DIRECTORY_SEPARATOR);
define('DIR_CLASSES',               BASEDIR . 'includes'.DIRECTORY_SEPARATOR.'classes' . DIRECTORY_SEPARATOR);
define('DIR_QRY',                   BASEDIR . 'qry' . DIRECTORY_SEPARATOR);

define('DIR_DB_CLASS',              DIR_PLUGINS  . 'adodb'  . DIRECTORY_SEPARATOR);
define('DIR_VIEWS_CLASS',         	DIR_PLUGINS  . 'views' . DIRECTORY_SEPARATOR);

define('DIR_VIEWS_TEMPLATES',      BASEDIR . 'views'  . DIRECTORY_SEPARATOR . 'templates');

define('DIR_VIEWS_TEMPLATES_C',    BASEDIR . 'views'  . DIRECTORY_SEPARATOR . 'templates_c');
define('DIR_VIEWS_CACHE',          BASEDIR . 'views'  . DIRECTORY_SEPARATOR . 'cache');


#========= Database Connection ========#

define("DATABASE_TYPE", "MySQLi");
define("DATABASE_SERVER","localhost");
define("DATABASE_USER","newbrand_mlm");
define("DATABASE_PASS","mlm_123456");
define("DATABASE_NAME","newbrand_mlmnew");
#========= Database Connection ========#


define('profile_upload_path',          ROOT_PATH . 'images/profile/');
define('profile_display_path',         HTTP_PATH . 'images/profile/');




include_once BASEDIR ."includes". DIRECTORY_SEPARATOR ."arrays.php";
//Loads the query file
require_once(DIR_QRY . 'sql-query.php');
?>