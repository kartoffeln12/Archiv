<?php
 require '../bootstrap.php';
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/responsive_archive.css">
        <link rel="stylesheet" href="css/style_archive.css">
        <title>archive</title>
    </head>

    <body>
        <header>
            <?php
 include('../header.php');
?>
        </header>
        <section>
            <div id="filtre">
                <form method="post" action="../archive/index_archive.php">

                    Trier :
                    <label for="trier">
                    <label for="parLieux"> 
                    <input type="radio" name="filtre" value="parLieux" id="parLieux">par lieu </label>
                    <label for="parDate">
                    <input type="radio" name="filtre" value="parDate" id="parDate">par date </label>
                    <input type="submit" id="trier" value="TRIER"></label>
                </form>

                <div id="separateur_filtre"></div>

                <form method="post" action="../archive/index_archive.php">

                    <label for="recherche">
                    <input type="search" id="recherche" name="recherche" placeholder="recherche par mots clés.."></label>
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
        echo '<div class="affiche"><a href="byEvent.php?id='. $event['id'] . '"><img src=" ' . $event['affiche'] . ' " title="Affiche ' . $event['titre'] .'" alt="Affiche ' . $event['titre'] .'" height="240" width="180"></a></div>'; 
    }
	?>
            </div>
        </section>
        <footer></footer>

        <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

    </body>

    </html>
