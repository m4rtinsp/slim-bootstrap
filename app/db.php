<?php
$cf = new Illuminate\Database\Connectors\Connection\Factory;

// Database information
$app->db = $cf->make(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'port'      => 3306,
    'database'  => 'slim',
    'username'  => 'root',
    'password'  => '',
    'prefix'    => '',
    'charset'   => "utf8",
    'collation' => "utf8unicodeci",
));