<?php

$bdd = getBdd();
		$checkadmin = $bdd->query('select password from p4_users where nom="'.$nom.'"');
        $checkadmin=$checkadmin->fetch(); 