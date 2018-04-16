<?php
require '../bootstrap.php';

$nav_en_cours = 'admin';
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/responsive_index.css">
        <link rel="stylesheet" href="css/style_adm.css">
        <title>Admin</title>
    </head>

    <body>
        <header>
            <?php
include('../header.php');
?>
        </header>

        <section><br />
        <?php
if (isset($_SESSION['Auth']['login']) && ($_SESSION['Auth']['autorisation'])==1) {
?>

            Evénement hors bdd "lieux" :
            <div>
            <?php

$donnees = $Events->outBdd($_GET);
while ($donnee = $donnees->fetch())
{
    //Affiche l'Event dont le lieu ne figure pas dans la bdd.
   echo '<br />' . $donnee['lieu'] .'<br /><a href="../archive/byEvent.php?id='. $donnee['id'] . '"><img src=" ' . $donnee['affiche'] . ' " title="Event créé par ' . $donnee['user_id'] .'" alt="Event créé par  ' . $donnee['user_id'] .' " height="180" width="135"></a>';
    
}
}else{
    echo '<H1><strong>Vous ne possédez pas les autorisations requises pour cette page !?!</strong></H1>';
}
            ?>
            </div>

        </section>

        <footer></footer>

    </body>

    </html>
