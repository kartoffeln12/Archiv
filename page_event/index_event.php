<?php 
require '../bootstrap.php';
// Récupération des données du form creaPage
$donnee = showEvent($_GET);
/*$reponse = $bdd->query('SELECT * FROM `crea_page` WHERE `id` = ' . (int) $_GET['id']);
$donnee = $reponse->fetch();
$reponse->closeCursor();*/
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive_upload.css">
    <title>page event</title>
</head>

<body>
    <header>
        <?php
include('../header.php');
?>
    </header>
    <section>
        <div id="bloc_event">
            <!--Affichage des données pour la page_event-->
            <div id="zoneAffiche" class="zone">
                <?php 
        echo '<img src=" ' . $donnee['affiche'] . ' " alt="Affiche" height="320" width="240">' ;
        ?>
            </div>
            <div id="zoneTitre" class="zone">
                <?php 
        echo  $donnee['titre'] ;
        ?>
            </div>
            <div id="zoneRenseignement" class="zone">
                <?php 
        echo  $donnee['jour'] . ' à ' . $donnee['horaire'] ;
        ?>
            </div>
            <div id="zoneLieu" class="zone">
                <?php 
        echo  $donnee['lieu'] ;
        ?>
            </div>
            <div id="zoneDescription" class="zone">
                <?php 
        echo  $donnee['description'] ;
        ?>
            </div>
        </div>
    </section>
    <aside>
        <!--Condition de conection pour atteindre le form upload-->
        <?php 
  if (isset($_SESSION['Auth']['login']) && !empty($_SESSION['Auth']['login'])) {
  ?>
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <!--Récupération de id pour la jointure-->
            <input type="hidden" name="crea_page_id" value="<?php echo $donnee['id']; ?>">
            <!--Champs du form upload-->
            <label for="upload">Fichier (photo | max. 20 Mo) <br />
            <input type="hidden" name="MAX_FILE_SIZE" value="20971520" />
            <input type="file" name="upload[]" id="upload" multiple/>:</label><br /><br />
            <label for="upload_nom">Titre de la photo :<br />
            <input type="text" name="upload_nom" placeholder="(max. 50 caractères)" id="upload_nom" required /><br /><br /></label>
            <label for="upload_description">Description de votre photo  :<br />
            <textarea name="upload_description" id="upload_description" placeholder="(max. 255 caractères)"></textarea></label><br />
            <input type="submit" name="submit" value="Envoyer" />
        </form>
        <?php
  }else{
    echo " <a href='../connexion/index_connexion.php'><input type='button' value='Upload'></a>";
  }
  ?>
    </aside>
    <footer></footer>
</body>

</html>
