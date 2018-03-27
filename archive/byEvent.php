<?php
require '../bootstrap.php';
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/responsive_archive.css">
        <link rel="stylesheet" href="css/style_byEvent.css">
        <title>archive by event</title>
    </head>

    <body>
        <header>
            <?php
include('../header.php');
?>
        </header>
        <section>
            <div id="resultat" class="resultat">
                <div class="photo photo-margin">
                    <?php
                
    $photos = $Events->photosEvents($_GET);
    while ($photo = $photos->fetch())
    {
        echo '<a href="#"><img src="../page_event/uploads/' . $photo['upload_filename'] . ' " title ="photo archivée par ' . $photo['login'] . '" alt="photo archivée"></a>';
    }

	?>
                </div>
            </div>
        </section>
        <footer></footer>
    </body>

    </html>
