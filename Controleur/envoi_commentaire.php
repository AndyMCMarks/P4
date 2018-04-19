<?php
require '../Modele/config.php';

if(isset($_POST['pseudo'],$_POST['commentaire']) and $_POST['pseudo']!='')
	{

		$_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
		$_POST['commentaire'] = htmlspecialchars($_POST['commentaire']);
		

		
		
		
		
		
		$pseudo=$_POST['pseudo'];
		$commentaire=$_POST['commentaire'];
		
		$ipcommentaire=$_SERVER['REMOTE_ADDR'];
		
		$time = time();
		$datemessage= date("Y-m-d H:i:s", $time);
		
		
		$bdd = getBdd();
		$nouvocom = $bdd->prepare('insert into p4_commentaires(billet_id, auteur, texte, date_commentaire, IP_posteur) values ("'.$_SESSION["billet_lecture"].'", "'.$pseudo.'", "'.$commentaire.'", "'.$datemessage.'", "'.$ipcommentaire.'")');
        $nouvocom->execute();   
		header('Location:../index.php');

	}
else
{
	echo "<br>ERREUR D'ISSET";
	echo "<br> PSeudo :";
	echo $_POST['pseudo'];
	echo "<br> Commentaire: ";
	echo $_POST['commentaire'];
	echo "<br> Billet :";
	echo $_GET['billet_lecture'];
	
}
