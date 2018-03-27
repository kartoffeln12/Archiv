<?php
require '../bootstrap.php'
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/responsive_futur.css">
        <link rel="stylesheet" href="css/style_futur.css">
        <title>futur event</title>
    </head>

    <body>
        <header>
            <?php
include('../header.php');
?>
        </header>
        <section>
            <div id="resultat">
                <?php
    $futurEvents = $Events->rechercheFuturEvents($_GET);
	while ($futurEvent = $futurEvents->fetch())
    {
        echo '<div class="affiche"><a href="../page_event/index_event.php?id='. $futurEvent['id'] . '"><img src=" ' . $futurEvent['affiche'] . ' " title="Affiche ' . $futurEvent['titre'] .'" alt="Affiche ' . $futurEvent['titre'] .'" height="240" width="180"></a></div>';
    }
	?>
            </div>
        </section>
        <footer></footer>
    </body>

    </html>
