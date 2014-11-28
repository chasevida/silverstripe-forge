<?php

global $project;
$project = 'mysite';

global $database;
$database = getenv('DB_NAME');

global $databaseConfig;
$databaseConfig = array(
    "type"      => 'MySQLDatabase',
    "server"    => getenv('DB_SERVER'),
    "username"  => getenv('DB_USERNAME'),
    "password"  => getenv('DB_PASSWORD'),
    "database"  => getenv('DB_NAME'),
    "path"      => '',
);

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');

//Set default login
Security::setDefaultAdmin(getenv('ADMIN_USERNAME'), getenv('ADMIN_PASSWORD'));