<?php

require '../bootstrap.php';
if(isset($_FILES['upload'])){
    $upload = $_FILES['upload'];
 }

 $content_dir = 'upload/'; // dossier où sera déplacé le fichier
        $nbFichiersEnvoyes = count($_FILES['upload']['name']);
        for($i=0 ; $i<=$nbFichiersEnvoyes-1 ; $i++)
        {

        	/*
        	$_FILES['upload']['name'];      //Le nom original du fichier
        	$_FILES['upload']['size'];      //La taille du fichier en octets
        	$_FILES['upload']['tmp_name'];  //L'adresse vers le fichier uploadé dans le répertoire temporaire
        	$_FILES['upload']['error'];     //Le code d'erreur
        	*/

        	//message si erreur
        	if ($upload['error'][$i] > 0) $erreur = "Erreur lors du transfert";
        	//vérification de la taille en octets
        	$maxsize = ($upload['size'][$i] <= 20000000);
        	if ($upload['size'] > $maxsize) $erreur = "Le fichier est trop gros";
        	//array des extension valide
        	$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        	//renvoie l'extension avec le point, ignore le premier caractère de chaine, met l'extension en minuscules.
        	$extension_upload = strtolower(  substr(  strrchr($upload['name'][$i], '.')  ,1)  );
        	if ( in_array($extension_upload,$extensions_valides) ) {
        	}

        	//Créer un dossier  @see is_dir($path)
        	//mkdir('uploads/', 0777, false); 
        	//Créer un identifiant complexe
        	$nom = md5(uniqid(rand(), true));
        	//déplace le fichier
        	$deplacement = "uploads/" . $nom . ".{$extension_upload}";
        	$resultat = move_uploaded_file($upload['tmp_name'][$i], $deplacement);
        	$crea_page_id = $_POST['crea_page_id'];
        		
        	if ($resultat) {
        		//entre le nom saisie, la description et le nouveau nom du fichier dans la bdd
        		$filename = $nom . ".{$extension_upload}";
        		$nom_saisie = isset($_POST['upload_nom']) ? substr($_POST['upload_nom'], 0, 50) : NULL;
        		$description_saisie = isset($_POST['upload_description']) ? substr($_POST['upload_description'], 0, 255) : NULL;
        		$user_id = $_SESSION['Auth']['id'];

        		$sql = $bdd->prepare("INSERT INTO upload(crea_page_id, user_id, upload_nom, upload_description, upload_filename) VALUES (?,?,?,?,?)");
        		$sql->execute(array($crea_page_id, $user_id, $nom_saisie, $description_saisie, $filename));

        	} else {
        		
        		exit('Pas de fichier ?');
        	}
}

header('Location: index_event.php?id='. $crea_page_id);

?>
