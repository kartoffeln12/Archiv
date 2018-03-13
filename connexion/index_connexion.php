<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>connexion</title>
</head>

<body>
    <?php 
	if (isset($_SESSION['Auth']['login']) && !empty($_SESSION['Auth']['login'])) {
		echo "Bonjour ".$_SESSION['Auth']['login'];
		echo " <a href='logout.php'><input type='button' value='déconnection'></a>";
	} else {
	?> Inscription
    <form action="signin.php" method="POST">
        <input type="text" placeholder="Adresse email" name="login" required>
        <input type="password" placeholder="Mot de passe" name="password" required>
        <input type="submit" value="S'inscrire">
    </form>
    Connexion
    <form action="login.php" method="POST">
        <input type="text" placeholder="Adresse email" name="login">
        <input type="password" placeholder="Mot de passe" name="password">
        <input type="submit" value="Se connecter">
    </form>
    <?php 
	}
	?>
</body>

</html>
