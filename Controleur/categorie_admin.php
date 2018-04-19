<?php


if ($_GET['action'] == "ecrire")
{
	require 'Vue/ecrire_billet.php';
}

if ($_GET['action'] == "editer")
{
	
	$billets = getBillets();
	require 'Vue/vue_liste_billets_edit.php';
	require 'Vue/edit_billet.php';
	
}

if ($_GET['action'] == "commentaire")
{
		require 'Modele/commentaire_validation.php';
		
		
		try {
			$comms = admincommentaires();
			require 'Vue/commentaire_administration.php';
			}
			
		catch (Exception $e) {
			$msgErreur = $e->getMessage();
			echo "Erreur getcom";
			require 'Vue/vue_erreur.php';
		}
		
		
		
		try {
		
        // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
			$idc = intval($idComm);
        
            $comm = getadmincom($idc);
		}
		catch (Exception $e) {
			$msgErreur = $e->getMessage();
			echo "Erreur getadmincom";
			require 'Vue/vue_erreur.php';
		}
		
		
}