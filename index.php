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

        <section>
            
<?php
$page = isset($_GET['page']) ? $_GET['page'] : NULL;
switch ($page) {
    case $page == 'archive':
        include('archive/index_archive.php');
        break;
    case $page == 'crea':
        include('formulaire_creaPage/index_creaPage.php');
        break;
    case $page == 'upload':
        include('futur_event/index_futur_event.php');
        break;
    case $page == 'byEvent':
        include('archive/byEvent.php');
        break;
    case $page == 'index_event':
        include('page_event/index_event.php');
        break;
        case $page == 'mon_compte':
        include('admin/mon_compte.php');
        break;
        case $page == 'admin':
        include('admin/index_admin.php');
        break;
    default: echo '';

}
        
?>

        </section>



<!-- __________________________________________________________________________________________________
     ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
     VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV -->
        <?php
} else {	
?>
        <header>
            <?php 
            include('header.php');
            ?>

        </header>

        <section>

            <div class="connexion_inscription">

                 <div class="inscription">
                    <h2>Inscription</h2>
                    <form action="connexion/signin.php" method="POST">
                        <input type="text" placeholder="Pseudo" name="pseudo" required><br />
                        <input type="email" placeholder="Adresse email" name="login" required><br />
                        <input type="password" placeholder="Mot de passe" name="password" required><br />
                        <button type="submit" value="S'inscrire">S'incrire</button>
                    </form>
                </div>

                <div class="connexion">
                    <h2>Connexion</h2>
                    <form action="connexion/login.php" method="POST">
                        <input type="email" placeholder="Adresse email" name="login"><br />
                        <input type="password" placeholder="Mot de passe" name="password"><br />
                        <button type="submit" value="Se connecter">Se connecter</button>
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

<script type="text/javascript" src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>
