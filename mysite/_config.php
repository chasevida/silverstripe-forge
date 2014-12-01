<?php

global $project;
$project = 'mysite';

global $database;
$database = 'silverstripeforge';

global $databaseConfig;
$databaseConfig = array(
    "type"      => 'MySQLDatabase',
    "server"    => getenv('DB_SERVER'),
    "username"  => getenv('DB_USERNAME'),
    "password"  => getenv('DB_PASSWORD'),
    "database"  => 'silverstripeforge',
    "path"      => '',
);

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');

//Director::setBaseURL('/');


//Set a temp default login
if (getenv('DB_PASSWORD')) {

    Security::setDefaultAdmin(getenv('ADMIN_USERNAME'), getenv('ADMIN_PASSWORD'));
}
