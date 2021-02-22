<?php
@session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require 'config.php';

# run the following command in linux -> composer dump-autoload
 require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';


// Load the Bootstrap!
$bootstrap = new Bootstrap();


// Optional Path Settings
$bootstrap->setControllerPath(CONTROLLERS_PATH);
$bootstrap->setModelPath(MODELS_PATH);
//$bootstrap->setDefaultFile();
//$bootstrap->setErrorFile();


$bootstrap->init();

