<?php
$nav_en_cours = 'mon_compte';
?>

            <div class="userEvents">
                Vos Events : 
                <?php
$events = $Events->userEvents($_GET);
while ($event = $events->fetch())
{   //Affiche l'Event de l'user, le titre et le nombre de photos uploadées
   echo '<div class="userEvent"><a href="index.php?page=byEvent&id='. $event['id'] . '"><img src=" ' . $event['affiche'] . ' " title="Affiche ' . $event['titre'] .'" alt="Affiche ' . $event['titre'] .' " height="180" width="135"></a><br /> ' . $event['titre'] .' ('. $Events->totalPhotoByEvent($event['id']). ' Photos)</div><br />';
    
}
    ?>
            </div>

            <div class="userPhotos">
                Vos Photos : 
                <?php
            
$photos = $Events->userPhotos($_GET);
while ($photo = $photos->fetch())
{   //Affiche toutes les photos uploadées par l'user.
   echo '<div class="userPhoto"><a href="index.php?page=byEvent&id='. $photo['crea_page_id'] . '"><img src="../page_event/uploads/' . $photo['upload_filename'] . ' " title ="photo archivée par ' . $photo['login'] . '" alt="photo archivée"></a></div>';
}

    ?>
            </div>

