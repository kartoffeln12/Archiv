<?php

$nav_en_cours = 'admin';
?>
<br />
        <?php
if (isset($_SESSION['Auth']['login']) && ($_SESSION['Auth']['autorisation'])==1) {
?>

            
            <div id="resultat_admin">
                Evénement hors bdd "lieux" :
                <div>
            <?php

    $donnees = $Events->outBdd($_GET);
    while ($donnee = $donnees->fetch())
    {

        //Affiche l'Event dont le lieu ne figure pas dans la bdd.
    echo '<br />' . $donnee['lieu'] .'<br /><a href="index.php?page=byEvent&id='. $donnee['id'] . '"><img src=" ' . $donnee['affiche'] . ' " title="Event créé par ' . $donnee['user_id'] .'" alt="Event créé par  ' . $donnee['user_id'] .' " height="180" width="135"></a>';
    
    }

}else{
    echo '<H1><strong>Vous ne possédez pas les autorisations requises pour cette page !?!</strong></H1>';
}
            ?>
                </div>
            </div>