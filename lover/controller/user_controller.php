<?php
include('../utils/regex.php');

function logOut() {

	$path = "/lover"; //modif le path

	setcookie('lastname' ,'', time()-24*3600,$path);
	unset($_COOKIE['lastname']);
	setcookie('firstname','', time()-24*3600,$path);
	unset($_COOKIE['firstname']);
	setcookie('age','', time()-24*3600,$path); // a ne pas cofondre avec interval celui-ci contient que la date de naissance
	unset($_COOKIE['age']);
	setcookie('interval','', time()-24*3600,$path); // retourne le nombre d'années de l'utilisateur
	unset($_COOKIE['interval']);
	setcookie('gender','', time()-24*3600,$path);
	unset($_COOKIE['gender']);
	setcookie('zipcode','', time()-24*3600,$path);
	unset($_COOKIE['zipcode']);
	setcookie('email','', time()-24*3600,$path);
	unset($_COOKIE['email']);
	unlink("../" . $_COOKIE['img']); //supprime le fichier photo
	setcookie('img' ,'', time()-24*3600,$path);
	unset($_COOKIE['img']);
	setcookie('desc' ,'', time()-24*3600,$path);
	unset($_COOKIE['desc']);
	setcookie('find','', time()-24*3600,$path);
	unset($_COOKIE['find']);
}

if (isset($_POST['submit'])){

	logOut();
	header('Location: ../');
}
?>