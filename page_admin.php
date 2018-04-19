<?php
require 'Modele/config.php';


if(isset($_SESSION['admin']) and $_SESSION['admin']!='')
{
	require 'Vue/template_admin.php';
	require 'Vue/admin_navbar.php';
	include 'Controleur/categorie_admin.php';
}
else
{
	require 'Vue/template_admin.php';
	require 'Vue/login_admin.php';

}
?>

	</body>
	</html>