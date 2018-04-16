<?php 
require '../bootstrap.php';

if (isset($_GET['term']))
{
	$term = $_GET['term'];

    $requete = $bdd->prepare('SELECT * FROM lieux WHERE nom_lieu LIKE :term');
	$requete->execute(array('term' => '%'.$term.'%'));

	$array = array();

while($donnee = $requete->fetch())
{
    array_push($array, $donnee['nom_lieu']);
}

echo json_encode($array);

}

?>