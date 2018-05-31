<?php

class Events {

    private $bdd;

    function __construct($bdd) 
    {
        $this->bdd = $bdd;
    }

    /**
     * Recherche dans la base des events passés.
     *
     * @param Array $request Un tableau de données.
     *
     * @return la reponse à la recherche ou au filtres.
     */
    function recherche($request) 
    {
        $recherche = isset($request['recherche']) ? $request['recherche'] : NULL;
        $filtre = isset($request['filtre']) ? $request['filtre'] : NULL;

        if (!empty($recherche)) {
            $q = "SELECT id, affiche, titre, lieu, horaire, jour, description FROM crea_page 
                WHERE MATCH(titre, lieu, description) 
                     AGAINST ('".$recherche."')";
        } elseif ($filtre == 'parLieux' ) {
            $q = "SELECT * FROM crea_page
                WHERE jour <= CURDATE() 
                ORDER BY lieu ASC";
        } elseif ($filtre == 'parDate') {
            $q = "SELECT id, affiche, titre, lieu, horaire, DAY(jour) AS jour, MONTH(jour) AS mois, YEAR(jour) AS annee, description  FROM crea_page 
                WHERE jour <= CURDATE() 
                ORDER BY annee DESC, mois DESC";
        } else {
            $q = "SELECT id, affiche, titre FROM crea_page 
                WHERE jour <= CURDATE()
                ORDER BY jour DESC";   
        }

        $reponse = $this->bdd->query($q);

        return $reponse;
    }

    /**
     * Lit dans la base les events futur.
     *
     * @param .
     *
     * @return la reponse.
     */
    function rechercheFuturEvents($request) 
    {  
        $reponse = $this->bdd->query("SELECT * FROM crea_page WHERE jour >= CURDATE()");

        return $reponse;
    }

    /**
     * Affiche les photos uploadé en fonction de l'event.
     * Crée une double jointure avec l'event et l'user.
     *
     * @param .
     *
     * @return la reponse.
     */
    function photosEvents($request) 
    {
        $reponse = $this->bdd->query('SELECT upload_filename, user.login
            FROM upload 
                INNER JOIN crea_page ON upload.crea_page_id=crea_page.id 
                INNER JOIN user ON upload.user_id=user.id
            WHERE 
                `crea_page_id` = ' . (int) $request['id']);

        return $reponse;
    }

    /**
     * Affiche les events en fonction de l'user.
     * Crée une jointure entre crea_page et user
     *
     * @param .
     *
     * @return la reponse.
     */ 
    function userEvents($request) 
    {   
        $reponse = $this->bdd->query('SELECT crea_page.id, affiche, titre, user_id, user.login
            FROM crea_page 
                INNER JOIN user ON crea_page.user_id=user.id
            WHERE   
                `user_id` = ' . (int) $request['id']);

        return $reponse; 
    }

    /**
     * Affiche le nombre de photos uploadé en fonction de l'event.
     *
     * @param .
     *
     * @return la donnee.
     */
    function totalPhotoByEvent($id) 
    {
        $reponse = $this->bdd->query('SELECT count(id) as total FROM `upload` WHERE crea_page_id = '.$id.'');
        $donnee = $reponse->fetch();

        return $donnee['total'];
    } 

    /**
     * Affiche les fichier uploadé en fonction de l'user.
     * Crée une jointure entre upload et user
     *
     * @param .
     *
     * @return la reponse.
     */ 
    function userPhotos($request) 
    {   
        $reponse = $this->bdd->query('SELECT crea_page_id, user_id, upload_filename,  user.login
            FROM upload 
                INNER JOIN user ON upload.user_id=user.id
            WHERE   
                `user_id` = ' . (int) $request['id']);

        return $reponse; 
    }

    /**
     * Affiche les données de l'event.
     *
     * @param .
     *
     * @return $donnee.
     */
    function showEvent($request) 
    {
        $reponse = $this->bdd->query('SELECT * FROM `crea_page` WHERE `id` = ' . (int) $request['id']);
        $donnee = $reponse->fetch();

        return $donnee;
    }

    /**
     * Creait un nouvel évenement en base.
     *
     * @param Array $request Un tableau de données.
     *
     * @return Int L'id de la ressource créée.
     */
    function createEvent($request) 
    {
        $affiche = isset($request['affiche']) ? $request['affiche'] : NULL;
        $titre = isset($request['titre']) ? $request['titre'] : NULL;
        $lieu = isset($request['lieu']) ? $request['lieu'] : NULL;
        $horaire = isset($request['horaire']) ? $request['horaire'] : NULL;
        $jour = isset($request['jour']) ? $request['jour'] : NULL;
        $description = isset($request['description']) ? substr($request['description'], 0, 255) : NULL;
        $user_id = $_SESSION['Auth']['id'];        

        $sql = $this->bdd->prepare("INSERT INTO crea_page(affiche, titre, lieu, horaire, jour, description, user_id, date_create) VALUES (?,?,?,?,?,?,?,NOW())");
        $sql->execute(array($affiche, $titre, $lieu, $horaire, $jour, $description, $user_id));
        $id = $this->bdd->lastInsertId();

        return $id;
    }   

    /**
     * affiche les events dont les lieux ne sont pas (encore) saisis dans la bdd.
     *
     * @param Array $request Un tableau de données.
     *
     * @return $reponse.
     */
    function outBdd($request) 
    {
        $reponse = $this->bdd->query('SELECT * FROM `crea_page` WHERE lieu NOT IN (SELECT nom_lieu FROM lieux)');
        $donnee = $reponse->fetch();

        return $reponse;


    }


}
