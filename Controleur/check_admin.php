<?php
require '../Modele/config.php';

if(isset($_POST['nom'],$_POST['pwd']) and $_POST['nom']!='')
	{

		$_POST['nom'] = htmlspecialchars($_POST['nom']);
		$_POST['pwd'] = htmlspecialchars($_POST['pwd']);
		
		$password= md5($_POST['pwd']);
		$nom = $_POST['nom'];
		
		require '../Modele/password.php';
		
		if ($password == $checkadmin['password'])
		{
			echo"<br> Pseudo:";
			echo $nom;
			echo"<br> MDP Hashé:";
			echo $password;
			echo"<br> Connection OK";
			$_SESSION["admin"]= $nom;
			//header('Location:../page_admin.php'); 
		}

		else
		{
			echo"<br> Pseudo:";
			echo $nom;
			echo"<br> MDP Hashé:";
			echo $password;
			echo"<br> MDP BDD Hashé:";
			echo $checkadmin['password'];
			echo"<br> MDP NON Hashé:";
			echo $_POST['pwd'];
			echo"<br> Connection NON";
			$_SESSION["admin"]= $nom;
			echo $_SESSION["admin"];
			//header('Location:../page_admin.php');
			
			
		} 
	}
	
	else
	{
		echo "PAS DE POST";
		echo"<br> Pseudo:";
		echo $_POST['nom'];
		echo"<br> MDP Hashé:";
		echo $_POST['pwd'];
	}
	
	
	
