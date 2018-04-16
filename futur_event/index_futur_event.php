<?php

$nav_en_cours = 'upload';
?>

            <div id="resultat_futur">
            Evénements à venir :  <br />
            <div id="futurEvent">
                <?php
    $futurEvents = $Events->rechercheFuturEvents($_GET);
	while ($futurEvent = $futurEvents->fetch())
    {
        echo '<div class="affiche"><a href="index.php?page=index_event&id='. $futurEvent['id'] . '"><img src=" ' . $futurEvent['affiche'] . ' " title="Affiche ' . $futurEvent['titre'] .'" alt="Affiche ' . $futurEvent['titre'] .'" height="240" width="180"></a></div>';
    }
	?>
            </div><br />

            Evénements archivés :  <br />
            <div id="archive">
                <?php
    $events = $Events->recherche($_POST);
    while ($event = $events->fetch())
    {    echo '<div class="affiche"><a href="index.php?page=index_event&id='. $event['id'] . '"><img src=" ' . $event['affiche'] . ' " title="Affiche ' . $event['titre'] .'" alt="Affiche ' . $event['titre'] .'" height="240" width="180"></a></div>'; 
    }
    ?>
            </div>
        </div>