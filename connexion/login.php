<?php

require '../bootstrap.php';

$login = $_POST['login'];

$sql = $bdd->prepare("SELECT * FROM user WHERE login = ?");
$sql->execute(array($login));
$membre = $sql->fetchAll(PDO::FETCH_ASSOC);
$membrePass = $membre[0]['password'];

// Attention, doublon avec signin.php
if (password_verify($_POST['password'], $membrePass)) {
	$_SESSION['Auth']['id'] = $membre[0]['id'];
	$_SESSION['Auth']['login'] = $login;
	$_SESSION['Auth']['pseudo'] = $membre[0]['pseudo'];
	$_SESSION['Auth']['autorisation'] = $membre[0]['autorisation'];
	header("Location: ../index.php");
} else {
	session_destroy();
	header('Location: ../index.php');
}

?>
