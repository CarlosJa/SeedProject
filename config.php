<?php
 ini_set('error_reporting', 1);  // Don't show any fuckn errors.
 error_reporting(E_ALL & ~E_NOTICE);

define('URL', 'https://www.seedproject.com/');
define('SITE_BASE', '/'); 
define('ASSETS', '/assets/'); 
define('LIBS', 'core/');
define('COMPANY', 'SeedProject - by CarlosArias.com');

/*
 *  Email Settings
 */

define('EMAILUSER', 'ADDEMAILUSER');
define('EMAILPASSWORD', 'ADDEMAILPASSWORD');
define('EMAILHOST', 'ADDEMAILHOST');



/*
* Admin Configuration
*/
define('ADMIN_URL', 	URL . '/dashboard');
define('ADMIN_BASE', 	'/dashboard');   //Router Base
define('ADMIN_ASSETS', '/dashboard/assets/'); 


define('CONTROLLERS_PATH', 'public/controllers/');
define('MODELS_PATH', 'public/models/');
define('VIEWS_PATH', 'public/');

/*
* Database Configurations
*/
define('DB_TYPE', 'mysql');
define('DB_HOST', 'DBHOST');
define('DB_NAME', 'DBNAME');
define('DB_USER', 'DBUSER');
define('DB_PASS', 'DBPASSWORD');

// The sitewide hashkey, do not change this because its used for passwords!
define('HASH_GENERAL_KEY', 'YOURGENERALHASHKEY-CHANGETHIS');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'YOURGENERALHASHKEY-CHANGETHIS');
define('HASH_API_KEY', 'YOURGENERALHASHKEY-CHANGETHIS');
define('TIMESTAMP', date('Y-m-d H:i:s'));