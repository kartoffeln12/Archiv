<nav class="nav">
    <li><a href="../archive/index_archive.php">ARCHIVE</a></li>
    <li><a href="../formulaire_creaPage/index_creaPage.php">CREA_PAGE</a></li>
    <li><a href="../futur_event/index_futur_event.php">UPLOAD</a></li>
</nav>
<?php 
if (isset($_SESSION['Auth']['login']) && !empty($_SESSION['Auth']['login'])) {

    echo $_SESSION['Auth']['login'];
    echo " <a href='../connexion/logout.php'><input type='button' value='déconnection'></a>";
}else{
    echo " <a href='../connexion/index_connexion.php'><input type='button' value='Connection/Inscription' class='connect' /></a>";
}
?>
