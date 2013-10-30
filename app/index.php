<?php
// Load Framework
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// Start app
$app = new Slim\Slim();

// App Config
$app->config(array(
	'templates.path' => './views'
));

// Database
require 'models' . DIRECTORY_SEPARATOR . 'Model.php';

$config = array(
	'host' 		=> 'localhost',
	'dbname' 	=> 'slim',
	'user' 		=> 'root',
	'password' 	=> '',
);

$model = new Model($config);
$app->db = $model->connect();

// Call routes
require 'routes.php';