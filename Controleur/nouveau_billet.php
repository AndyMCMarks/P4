<?php
require '../Modele/config.php';

if(isset($_POST['titre_billet'],$_POST['contenu_billet']) and $_POST['titre_billet']!='')
	{

		$_POST['titre_billet'] = htmlspecialchars($_POST['titre_billet']);
		//$_POST['contenu_billet'] = htmlspecialchars($_POST['contenu_billet']);
		

		
		
		
		
		
		$titre_billet=$_POST['titre_billet'];
		$contenu_billet=$_POST['contenu_billet'];
		
		$ipcontenu_billet=$_SERVER['REMOTE_ADDR'];
		
		$time = time();
		$datemessage= date('m/d/Y H:i:s', $time);
		
		
		$bdd = getBdd();
		$nouvobill = $bdd->prepare('insert into p4_billets(titre, texte, date_crea) values ("'.$titre_billet.'", ?, "'.$datemessage.'")');
        $nouvobill->execute(array($contenu_billet));   
		header('Location:../index.php');

	}
else
{
	echo "<br>ERREUR D'ISSET";
	echo "<br> titre_billet :";
	echo $_POST['titre_billet'];
	echo "<br> contenu_billet: ";
	echo $_POST['contenu_billet'];
	echo "<br> Billet :";
	echo $_GET['billet_lecture'];
	
}
