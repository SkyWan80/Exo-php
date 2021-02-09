<?php
if(isset($_COOKIE['lastname'],$_COOKIE['firstname'],$_COOKIE['age'],$_COOKIE['interval'],$_COOKIE['gender'],$_COOKIE['zipcode'],$_COOKIE['email'],$_COOKIE['img'],$_COOKIE['desc'],$_COOKIE['find'])){
	$valid = true; //check si les cookies sont déjà présent et affiche directement la page lovers
} else {
	$valid = false;
	$errors = array(
		'firstname' => null,
		'lastname' => null,
		'age' => null,
		'gender' => null,
		'email' => null,
		'zipcode' => null,
		'fileup' => null,
		'desc' => null,
		'find' => null
	);

	$data_firstname = null;
	$data_lastname = null;
	$data_age = null;
	$data_gender = null;
	$data_email = null;
	$data_zipcode = null;
	$data_image = null;
	$data_desc = null;
	$data_find = null;

	$TypeArrays = array('jpg','png','jpeg','gif','JPG');

	$contact = array(
		'firstname' => null,
		'lastname' => null,
		'age' => null,
		'gender' => null,
		'email' => null,
		'zipcode' => null,
		'fileup' => null,
		'desc' => null,
		'find' => null
	);


	$today= getdate(); //choppe le jours d'aujourd'hui
	$year_today = $today['year']; //prend ces années


	if (isset($_POST['submit'])){

		$valid = true;
		$year_date = date('Y', strtotime($_POST['age']));// choppé l'année de la date donné
		$intyear = intval($year_date); //conversion du string en int de l'année donné

		$interval = $year_today - $intyear; //calcule l'interval


		//filtre les inputs
		$contact = filter_input_array(INPUT_POST, array(

		'firstname' => FILTER_SANITIZE_STRING,
		'lastname' => FILTER_SANITIZE_STRING,
		'age' => FILTER_SANITIZE_STRING,
		'gender' => FILTER_SANITIZE_STRING,
		'email' => FILTER_SANITIZE_STRING,
		'address' => FILTER_SANITIZE_STRING,
		'email' => FILTER_SANITIZE_STRING,
		'zipcode' => FILTER_SANITIZE_STRING,
		'fileup' => FILTER_SANITIZE_STRING,
		'desc' => FILTER_SANITIZE_STRING,
		'find' => FILTER_SANITIZE_STRING,
		), true);



		$file_name = $_FILES["fileup"]['name'];
		$file_size = $_FILES['fileup']['size'];
		$target_dir = 'assets/img/';
		$target_file = $target_dir . basename($_FILES['fileup']['name']);
		$IMGtype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


		//verification de chaque input et envoi une erreur si pb
		if (empty($_POST['firstname'])){
			$valid=false;
			$errors ['firstname'] = "Champ obligatoire";
		}
		if (empty($_POST['lastname'])){
			$valid=false;
			$errors ['lastname'] = "Champ obligatoire";
		}
		if (empty($_POST['age'])){
			$valid=false;
			$errors ['age'] = "Champ obligatoire";
		} elseif ($interval < 18) {
			$valid=false;
			$errors ['age'] = "Tu n'as pas l'&acirc;ge pour &ecirc;tre ici DEGAGE !";
		}
		if (empty($_POST['gender'])){
			$valid=false;
			$errors ['gender'] = "Champ obligatoire";
		}
		if (empty($_POST['zipcode'])){
			$valid=false;
			$errors ['zipcode'] = "Champ obligatoire";
		} elseif (!preg_match($pat_zip, $_POST['zipcode'])) {
			$valid=false;
			$errors ['zipcode'] = "veuillez rentrer un code postal valide";
		}
		if (empty($_POST['email'])){
			$valid=false;
			$errors ['email'] = "Champ obligatoire";
		} elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
			$valid=false;
			$errors ['email'] = "Veuillez rentrer une email valide";
		}
		if (empty($_POST['desc'])){
			$valid=false;
			$errors ['desc'] = "Champ obligatoire";
		}
		if (empty($_POST['find'])){
			$valid=false;
			$errors ['find'] = "Champ obligatoire";
		}


		if ($_FILES['fileup']['name'] == ""){
			$valid=false;
			$errors ['fileup'] = "champ obligatoire";
		} elseif (isset($_FILES['fileup'])){
			$file_ext = pathinfo($target_file);
			$file_ext = $file_ext['extension'];
			if (in_array($file_ext,$TypeArrays) === false) {
				$errors ['fileup'] = "mauvais format";
				$valid=false;
			}
		 } 
		 

		 if (file_exists($target_file && $valid == true)) {
			$errors ['fileup'] = "le fichier existe d&eacute;j&agrave; dans la base";
			$valid=false;
		}

		if($valid == true){ //check si il est true

			$data_firstname = $_POST['firstname'];
			$data_lastname = $_POST['lastname'];
			$data_age = date($_POST['age']);
			$data_gender = $_POST['gender'];
			$data_email = $_POST['email'];
			$data_zipcode = $_POST['zipcode'];
			$data_desc = $_POST['desc'];
			$data_find = $_POST['find'];



			$filename   = uniqid() . "-" . time(); //génère un id unique - timestamp
			$extension_file  = pathinfo($_FILES["fileup"]["name"], PATHINFO_EXTENSION); // prend le format
			$basename   = $filename . "." . $extension_file; //combine les deux

			if (move_uploaded_file($_FILES["fileup"]["tmp_name"], $target_dir . $basename)) { //déplace le fichier

				$data_image = $target_dir . $basename;
			} else {

				$errors ['fileup'] = "Erreur durant l'upload veuillez réessayer";
			}
		}
	}
}?>