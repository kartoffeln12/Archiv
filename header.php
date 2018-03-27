<nav class="nav">
    <li><a href="/Projet/archive/index_archive.php">ARCHIVE</a></li>
    <li><a href="/Projet/formulaire_creaPage/index_creaPage.php">CREA_PAGE</a></li>
    <li><a href="/Projet/futur_event/index_futur_event.php">UPLOAD</a></li>
</nav>
<?php 
//condition : si connecté affiche le pseudo et le bouton déconnection dans la nav.
if (isset($_SESSION['Auth']['login']) && !empty($_SESSION['Auth']['login'])) {
	echo $_SESSION['Auth']['pseudo'];
    
    //condition : vérifie le niveau d' "autorisation" pour diriger vers Admin ou Mon Compte.
	if (isset($_SESSION['Auth']['autorisation']) && $_SESSION['Auth']['autorisation'] == 1) {
	echo " <a href='/Projet/admin/index_admin.php'>(Admin)</a>";
	}elseif (isset($_SESSION['Auth']['autorisation']) && $_SESSION['Auth']['autorisation'] == 0) {
	echo " <a href='/Projet/admin/mon_compte.php?id=".$_SESSION['Auth']['id']." '>(Mon Compte)</a>";
	}else{

	}
    echo " <a href='/Projet/connexion/logout.php'><input type='button' value='déconnection' class='deconnection'></a>";

//condition : si non connecté affiche le bouton connexion
}else{
    echo " <a href='/Projet/connexion/index_connexion.php'><input type='button' value='Connection/Inscription' class='connect'/></a>";
}


?>
