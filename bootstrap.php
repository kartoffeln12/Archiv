<?php

session_start();

$_ENV = parse_ini_file('.env');

if ($_ENV['DEBUG']) {
	error_reporting(E_ALL);
}

require 'classes/Database.php';
$bdd = new Database($_ENV['MYSQL_HOST'], $_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD']);
$bdd = $bdd->getPdo();

require 'classes/events.php';
$Events = new Events($bdd);

?>
