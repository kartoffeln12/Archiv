<?php

session_start();

define('DSN', 'mysql:host=localhost;dbname=projet');
define('USER', 'root');
define('MDP', '');

try {
	$bdd = new PDO(DSN, USER, MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Erreur : ".$e->getMessage();
}

require 'classes/events.php';
?>
