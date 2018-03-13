<?php

require '../bootstrap.php';

$login = $_POST['login'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
$sql = $bdd->prepare("INSERT INTO user (login, password) VALUES (?, ?)");
$sql->execute(array($login, $password));

// Attention, doublon avec login.php
$_SESSION['Auth']['id'] = $bdd->lastInsertId();
$_SESSION['Auth']['login'] = $login;

header("Location: ../index.php");

?>
