<?php
require '../bootstrap.php';
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/responsive_index.css">
        <link rel="stylesheet" href="../css/style.css">
        <title>Mon Compte</title>
    </head>

    <body>
        <header>
            <?php
include('../header.php');
?>
        </header>

        <section>
            <div class="userEvents">
                <?php
$events = $Events->userEvents($_GET);
while ($event = $events->fetch())
{
    //Affiche l'Event de l'user, le titre et le nombre de photos uploadées
   echo '<div class="userEvent"><a href="../archive/byEvent.php?id='. $event['id'] . '"><img src=" ' . $event['affiche'] . ' " title="Affiche ' . $event['titre'] .'" alt="Affiche ' . $event['titre'] .' " height="180" width="135"></a><br /> ' . $event['titre'] .' ('. $Events->totalPhotoByEvent($event['id']). ' Photos)</div><br />';
    
}
    ?>
            </div>

            <div class="userPhotos">
                <?php
            
$photos = $Events->userPhotos($_GET);
while ($photo = $photos->fetch())
{   //Affiche toutes les photos uploadées par l'user.
   echo '<div class="userPhoto"><a href="../archive/byEvent.php?id='. $photo['crea_page_id'] . '"><img src="../page_event/uploads/' . $photo['upload_filename'] . ' " title ="photo archivée par ' . $photo['login'] . '" alt="photo archivée"></a></div>';
}

    ?>
            </div>
        </section>

        <footer></footer>

    </body>

    </html>
