<?php
	//define('INDEX_CONTROLLER', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/ici_le_chemin_supplémentaire');
	$pat_tel ='/0[0-9]-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}/i'; //08-15-15-15-15
	$pat_PE ='/[0-9]{7}[A-Z]/i'; //1234567D
	$pat_age ='/[1-2][0-9]{3}-[0-1][0-9]-[0-9]{2}/i'; //1999-07-03
	$pat_zip ='/[0-9]{5}/i'; //12345
	$pat_age2 ='/[0-9]{2}/i'
?>