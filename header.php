<nav class="nav">
    
	<!-- $nav_en_cours permet de pointer les pages en cours de navigation (modifie css) -->
    <?php 
    $nav_en_cours = '';
    ?>
   
    <a <?php if ($nav_en_cours == 'archive') {echo ' class="en_cours"';} ?> href="index.php?page=archive">ARCHIVES</a>
   
    <a <?php if ($nav_en_cours == 'crea_page') {echo ' class="en_cours"';} ?> href="index.php?page=crea">Votre EVENT</a>
   
    <a <?php if ($nav_en_cours == 'upload') {echo ' class="en_cours"';} ?> href="index.php?page=upload">UPLOAD</a>
    
</nav>

<?php //condition : si connecté affiche le pseudo et le bouton déconnection dans la nav.
if (isset($_SESSION['Auth']['login']) && !empty($_SESSION['Auth']['login'])) {
	echo htmlentities($_SESSION['Auth']['pseudo']);
    
    //condition : vérifie le niveau d' "autorisation" pour diriger vers Admin ou Mon Compte.
	if (isset($_SESSION['Auth']['autorisation']) && $_SESSION['Auth']['autorisation'] == 1) {
	echo "<a href='index.php?page=admin'>(Admin)</a>";
	}elseif (isset($_SESSION['Auth']['autorisation']) && $_SESSION['Auth']['autorisation'] == 0) {
	echo "<a href='index.php?page=mon_compte&id=".$_SESSION['Auth']['id']." '>(Mon Compte)</a>";
	}else{

	}
    echo "<a href='connexion/logout.php'><input type='button' value='déconnection' class='deconnection'></a>";

//condition : si non connecté affiche le bouton connexion
}else{
    echo "<input type='button' value='Connection/Inscription' class='connect'/>";
}

?>