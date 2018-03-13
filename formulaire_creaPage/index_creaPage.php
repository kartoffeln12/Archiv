<?php 
require '../bootstrap.php'; 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive_creaPage.css">
    <title>création event</title>
</head>

<body>
    <header>
        <?php
include('../header.php');
?>
    </header>
    <?php 
	if (isset($_SESSION['Auth']['login']) && !empty($_SESSION['Auth']['login'])) {
?>
    <aside>
        <div id="create">
            <form name="creaPage" action="envoiPage.php" method="post" enctype="multipart/form-data">
                <label for="affiche"> Url de l'Affiche : </label><br />
                <input name="affiche" id="affiche" type="url" class="saisie_url" required />
                <br />
                <hr>

                <label for="titre"> Nom de l'Event : </label><br />
                <input name="titre" id="titre" type="text" class="saisie_titre" required />
                <br />
                <hr>

                <label for="lieu"> Lieu de l'Event : </label><br />
                <input name="lieu" type="text" class="saisie_lieu" required />
                <br />
                <hr> Renseignements : <br />
                <label for="jour"></label><input name="jour" id="jour" type="date" class="saisie_jour" required /></label>
                <label for="horaire"><input name="horaire" id="horaire" type="time" class="saisie_horaire"></label>
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
    </aside>
    <section>
        <div id="view">
            <div id="zoneAffiche" class="zone">Affiche</div>
            <div id="zoneTitre" class="zone">Titre</div>
            <div id="zoneRenseignement" class="zone">Renseignement</div>
            <div id="zoneLieu" class="zone">Lieu</div>
            <div id="zoneDescription" class="zone">Description</div>
        </div>
    </section>
    <?php }
	else {
	$message = "vous devez être connecté";
	echo "<script type='text/javascript'>alert('$message');
		window.location.replace('../index.php');
		</script>";
	}
	?>
    <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
