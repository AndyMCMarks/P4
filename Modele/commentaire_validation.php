<?php
require_once 'config.php';

// Renvoie la liste des commentaires du blog
function admincommentaires() {
	$valid ="non";
    $bdd = getBdd();
    $comms = $bdd->query('select id as id, date_commentaire as date,'
            . ' auteur as auteur, texte as contenu, IP_posteur as IP_posteur from p4_commentaires where validation="non"'
			
			. ' order by id desc');
    return $comms;
}

function getadmincom($idComm) {
    $bdd = getBdd();
    $comm = $bdd->prepare('select id as id, date_commentaire as date,'
            . ' auteur as auteur, texte as contenu, IP_posteur as IP_posteur from p4_commentaires'
            . ' where id='.$idComm.'');
			
    $comm->execute(array($idComm));
	 return $comm->fetch(); 
   
}