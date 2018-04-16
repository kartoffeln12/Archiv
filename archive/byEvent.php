<?php
$nav_en_cours = 'byEvent';
?>

       
            <div id="resultat_byEvent" class="resultat">
                <div class="photo photo-margin" id="photo_flex">
                    <?php
                
    $photos = $Events->photosEvents($_GET);

    while ($photo = $photos->fetch())
    {
        echo '<a href="#"><img src="../page_event/uploads/' . $photo['upload_filename'] . ' " title ="photo archivée par ' . $photo['login'] . '" alt="photo archivée"></a>';
    }

	?>
                </div>
            </div>
        
       