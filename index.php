<?php 
require 'bootstrap.php'; 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive_index.css">
    <title>acceuil</title>
</head>

<body>
    <?php
if (isset($_SESSION['Auth']['login']) && !empty($_SESSION['Auth']['login'])) {
?>
        <header>
        <?php
include('header.php');
?>
        </header>
        <section></section>
        <footer></footer>

        <?php
} else {	
?>
        <header>
            <nav class="nav">
                <li><a href="/Projet/archive/index_archive.php">ARCHIVE</a></li>
                <li><a href="/Projet/formulaire_creaPage/index_creaPage.php">CREA_PAGE</a></li>
                <li><a href="/Projet/futur_event/index_futur_event.php">UPLOAD</a></li>
            </nav>        
            <input type='button' value='Connection/Inscription' class='connect'/>
        </header>
        <section>
            <div class="connexion_inscription">

                <div class="connexion">
                    Connexion
                    <form action="connexion/login.php" method="POST">
                        <input type="email" placeholder="Adresse email" name="login"><br />
                        <input type="password" placeholder="Mot de passe" name="password"><br />
                        <button type="submit" value="Se connecter">Se connecter</button>
                    </form>
                </div>

                <div class="inscription">
                    Inscription
                    <form action="connexion/signin.php" method="POST">
                        <input type="text" placeholder="Pseudo" name="pseudo" required><br />
                        <input type="email" placeholder="Adresse email" name="login" required><br />
                        <input type="password" placeholder="Mot de passe" name="password" required><br />
                        <button type="submit" value="S'inscrire">S'incrire</button>
                    </form>
                </div>

            </div>
        </section>
            <?php 
}	
?>
            <footer></footer>

            <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
            <script src="js/jQuery.js"></script>
</body>

</html>
