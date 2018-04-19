<?php
require 'Modele/config.php';
require 'Modele/gestion_billets.php';


try {
    $billets = getBillets();
	require 'Vue/vue_liste_billets.php';
	echo" <br> getBillet : OK";
}
catch (Exception $e) {
	echo" <br> getBillet : NON";
    $msgErreur = $e->getMessage();
    require 'Vue/vue_erreur.php';
}

try {
		
        // intval renvoie la valeur numérique du paramètre ou 0 en cas d'échec
        $id = intval($idBillet);
        
            $billet = getBillet($id);
            $commentaires = getCommentaires($id);
            require 'Vue/vue_billet.php';
			require 'Vue/template.php';
        
        }
		catch (Exception $e) {
    $msgErreur = $e->getMessage();
	echo "Erreur getBillet";
    require 'Vue/vue_erreur.php';
}
echo" <br> Index : OK";
echo" <br> SESSION :";
echo $_GET["billet_lecture"];
