<?php
require_once 'config.php';

// Renvoie la liste des billets du blog
function getBillets() {
    $bdd = getBdd();
    $billets = $bdd->query('select id as id, date_modif as date,'
            . ' titre as titre, texte as contenu from p4_billets'
            . ' order by id desc');
    return $billets;
}