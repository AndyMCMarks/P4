<?php
require '../Modele/config.php';
$_SESSION["billet_lecture"]=$_GET["billet"];


header('Location: ../index.php');

?>