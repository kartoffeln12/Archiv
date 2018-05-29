<?php

$nav_en_cours = 'archive';
?>

            <div id="filtre">
                <form id="sort-by" method="post" action="index.php?page=archive">

                    Trier :
                    <label for="trier">
                    <label for="parLieux"> 
                    <input type="radio" name="filtre" value="parLieux" id="parLieux">par lieu </label>
                    <label for="parDate">
                    <input type="radio" name="filtre" value="parDate" id="parDate">par date </label>
                    <input type="submit" id="trier" value="TRIER"></label>
                </form>

                <div id="separateur_filtre"></div>

                <form method="post" action="index.php?page=archive">

                    <label for="search">
                    <input type="search" id="search" name="recherche" placeholder="recherche par mots clés.."></label>
                </form>
            </div>
            <div id="resultat" class="resultat">
                <?php
              
    $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : NULL;
    $filtre = isset($_POST['filtre']) ? $_POST['filtre'] : NULL;

    $events = $Events->recherche($_POST);
    $old = "";
    
    while ($event = $events->fetch())
    {   
        if ($filtre == 'parLieux' ) {
            if ($old != $event['lieu']) {
                echo '<hr><h2>' . $event['lieu'] . '</h2>';
            } 
            $old = $event['lieu'];
        } elseif ($filtre == 'parDate' ) {
            if ($old != $event['mois']) {
                echo '<hr><h2>' . $event['mois'] . ' / ' . $event['annee'] . '</h2>';
            }
            $old = $event['mois'];
        }
        echo '<div class="affiche"><a href="index.php?page=byEvent&id='. $event['id'] . '"><img src=" ' . $event['affiche'] . ' " title="Affiche ' . $event['titre'] .'" alt="Affiche ' . $event['titre'] .'" height="240" width="180"></a></div>'; 
          
    }
	?>
            </div>
