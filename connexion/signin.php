<?php

require '../bootstrap.php';

$login = $_POST['login'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
$pseudo = $_POST['pseudo'];
$_POST['autorisation'] = "0";
$autorisation = $_POST['autorisation'];
$sql = $bdd->prepare("INSERT INTO user (login, password, pseudo, autorisation) VALUES (?, ?, ?, ?)");
$sql->execute(array($login, $password, $pseudo, $autorisation));

// Attention, doublon avec login.php
$_SESSION['Auth']['id'] = $bdd->lastInsertId();
$_SESSION['Auth']['login'] = $login;
$_SESSION['Auth']['pseudo'] = $pseudo;
$_SESSION['Auth']['autorisation'] = $autorisation;

header("Location: ../index.php");

?>
