<?php

class Database {

	private $_host = '';
	private $_dbname = '';
	private $_user = '';
	private $_pwd = '';

	function __construct($host, $dbname, $user, $pwd) 
	{
		$this->_host = $host;
		$this->_dbname = $dbname;
		$this->_user = $user;
		$this->_pwd = $pwd;
	}

	function getPdo() 
	{
		$s = 'mysql:host=%s;dbname=%s';
		$s = sprintf($s, $this->_host, $this->_dbname);

		try {
			$pdo = new PDO($s, $this->_user, $this->_pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
			if ($_ENV['DEBUG']) {
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
		} catch (PDOException  $e) {
			echo "Erreur : ".$e->getMessage();
		}

		return $pdo;
	}
}

?>