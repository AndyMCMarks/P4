<?php
	require '../Modele/config.php';
	
	
		$idComm=$_GET["comm"];
		
		$bdd = getBdd();
		$validcom = $bdd->prepare('update p4_commentaires set validation="out" where id='.$idComm.'');
        $validcom->execute();

		header('Location:../page_admin.php?action=commentaire');		