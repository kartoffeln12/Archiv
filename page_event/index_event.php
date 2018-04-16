<?php 
// Récupération des données du form creaPage
$donnee = $Events->showEvent($_GET);

$nav_en_cours = 'index_event';
?>

<div id="resultat_page_event">

        <div id="bloc_event">
            <!--Affichage des données pour la page_event-->
            <div id="zoneAfficheDef" class="zone">
                <?php 
        echo '<img src=" ' . $donnee['affiche'] . ' " alt="Affiche" height="320" width="240">' ;
        ?>
            </div>
            <div id="zoneTitreDef" class="zone">
                <?php 
        echo  $donnee['titre'] ;
        ?>
            </div>
            <div id="zoneRenseignementDef" class="zone">
                <?php 
        echo  $donnee['jour'] . '<br /> à ' . $donnee['horaire'] ;
        ?>
            </div>
            <div id="zoneLieuDef" class="zone">
                <?php 
        echo  $donnee['lieu'] ;
        ?>
            </div>
            <div id="zoneDescriptionDef" class="zone">
                <?php 
        echo  $donnee['description'] ;
        ?>
            </div>
        </div>

    <aside>
        <!--Condition de conection pour atteindre le form upload-->
        <?php 
  if (isset($_SESSION['Auth']['login']) && !empty($_SESSION['Auth']['login'])) {
  ?>
        <form id="form_page_event" method="post" action="page_event/upload.php" enctype="multipart/form-data">
            <!--Récupération de id pour la jointure-->
            <input type="hidden" name="crea_page_id" value="<?php echo $donnee['id']; ?>">
            <!--Champs du form upload-->
            <label for="upload">Fichier (photo | max. 20 Mo) : <br />
            <input type="hidden" name="MAX_FILE_SIZE" value="20971520" />
            <input type="file" name="upload[]" id="upload" multiple/></label><br /><br />
            <label for="upload_nom">Titre de la photo :<br />
            <input type="text" name="upload_nom" placeholder="(max. 50 caractères)" id="upload_nom" required /><br /><br /></label>
            <label for="upload_description">Description de votre photo  :<br />
            <textarea name="upload_description" id="upload_description" placeholder="(max. 255 caractères)"></textarea></label><br />
            <input type="submit" name="submit" value="Envoyer" />
        </form>
        <?php
  }else{
    echo " <a href='../connexion/index_connexion.php'><input type='button' value='Upload'></a>";
    $message = "vous devez être connecté pour pouvoir uploadé des photos de cet événement.";
    echo "<script type='text/javascript'>alert('$message');
        </script>";
  }
  ?>
    </aside>

    </div>