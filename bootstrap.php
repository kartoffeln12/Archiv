<?php

session_start();

if (isset($_ENV['MYSQL_HOST']) && $_ENV['MYSQL_HOST'] == 'db_Projet') {
define('DSN', 'mysql:host=db_Projet;dbname=projet');
define('USER', 'quentin');
define('MDP', '#grab12');

} else {
define('DSN', 'mysql:host=localhost;dbname=projet');
define('USER', 'root');
define('MDP', '');
}

try {
	$bdd = new PDO(DSN, USER, MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Erreur : ".$e->getMessage();
}

require 'classes/events.php';
$Events = new Events();

?>
