<?php 

$nav_en_cours = 'crea_page';

	if (isset($_SESSION['Auth']['login']) && !empty($_SESSION['Auth']['login'])) {
?>
        <div id="resultat_creaPage">
        <div id="create">
            <form id="form_creaPage" name="creaPage" action="formulaire_creaPage/envoiPage.php" method="post" enctype="multipart/form-data">
                <label for="affiche"> Url de l'Affiche : </label><br />
                <input name="affiche" id="affiche" type="url" class="saisie_url" placeholder="http://monAffiche.img" required />
                <br />
                <hr>

                <label for="titre"> Nom de l'Event : </label><br />
                <input name="titre" id="titre" type="text" class="saisie_titre" required />
                <br />
                <hr>

                <label for="lieu"> Lieu de l'Event : </label><br />
                <input name="lieu" type="text" id="saisie_lieu" required />
                <br />
                <hr> Renseignements : <br />
                <label for="jour"><input name="jour" id="jour" type="date" class="saisie_jour" required /></label>
                <label for="horaire"><input name="horaire" id="horaire" type="time" class="saisie_horaire" value="20:00" required></label>
                <br />
                <hr>

                <label for="description"> Description de l'Event : </label><br />
                <textarea name="description" id="description" class="saisie_description"></textarea>
                <hr>

                <input type="button" class="visu" id="visuDescription" value="Visualiser" />
                <input type="button" class="visu" id="Annuler" value="Annuler" /><br />
                <input type="submit" id="Ok" />
            </form>
        </div>

        <div id="view">
            <div id="zoneAffiche" class="zone">Affiche</div>
            <div id="zoneTitre" class="zone">Titre</div>
            <div id="zoneRenseignement" class="zone">Renseignement</div>
            <div id="zoneLieu" class="zone">Lieu</div>
            <div id="zoneDescription" class="zone">Description</div>
        </div>
    </div>
    <?php }
	else {
	$message = "vous devez être connecté pour créer votre événement.";
	echo "<script type='text/javascript'>alert('$message');
		window.location.replace('../index.php');
		</script>";
	}
	?>