<?php
session_start();
function getBdd() {
    $bdd = new PDO('mysql:host=sql2;dbname=andymarks;charset=utf8', 'andymarks',
            'kp{0D[d8J', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
	echo" <br> Config : OK";