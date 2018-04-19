<?php
require_once 'config.php';
	echo" <br> Gestion_billet : OK";
	if (isset($_GET["billet_lecture"]))
	{$idBillet=$_GET["billet_lecture"];
	$_SESSION["billet_lecture"]= $_GET["billet_lecture"];
	}
	else
	{ $idBillet=1;
	$_SESSION["billet_lecture"]= 1;
	}
	
// Renvoie la liste des billets du blog
function getBillets() {
    $bdd = getBdd();
    $billets = $bdd->query('select id as id, date_modif as date,'
            . ' titre as titre, texte as contenu from p4_billets'
            . ' order by id desc');
    return $billets;
	echo" <br> getBillet script : OK";
}

// Renvoie les informations sur un billet
function getBillet($idBillet) {
    $bdd = getBdd();
    $billet = $bdd->prepare('select id as id, date_modif as date,'
            . ' titre as titre, texte as contenu from p4_billets'
            . ' where id='.$idBillet.'');
			
    $billet->execute(array($idBillet));
	 return $billet->fetch(); 
   
}
   // Renvoie la liste des commentaires associés à un billet
function getCommentaires($idBillet) {
    $bdd = getBdd();
    $commentaires = $bdd->prepare('select id as id, date_commentaire as date,'
            . ' auteur as auteur, texte as contenu from p4_commentaires'
            . ' where validation ="oui" and billet_id='.$idBillet.'');
    $commentaires->execute(array($idBillet));
    return $commentaires;
}
	echo" <br> Gestion_billet2 : OK";

