<?php
	$valid = false;
	$errors = array(
		'firstname' => null,
		'lastname' => null,
		'datebd' => null,
		'countrybd' => null,
		'nationality' => null,
		'address' => null,
		'email' => null,
		'phonenb' => null,
		'diploma' => null,
		'PEnb' => null,
		'badgenb' => null,
		'urlcode' => null,
		'question_1' => null,
		'question_2' => null,
		'question_3' => null
	);

	$data_firstname = null;
	$data_lastname =null;
	$data_bddate =null;
	$data_countrybd = null;
	$data_nationality = null;
	$data_address = null;
	$data_email = null;
	$data_phonenb = null;
	$data_diploma = null;
	$data_PE = null;
	$data_badges= null;
	$data_codecademy = null;
	$data_Ques_1 = null;
	$data_Ques_2 = null;
	$data_Ques_3 =null;

	$contact = array(
		'firstname' => null,
		'lastname' => null,
		'datebd' => null,
		'countrybd' => null,
		'nationality' => null,
		'address' => null,
		'email' => null,
		'phonenb' => null,
		'diploma' => null,
		'PEnb' => null,
		'badgenb' => null,
		'urlcode' => null,
		'question_1' => null,
		'question_2' => null,
		'question_3' => null
	);
	//onclick do submit
	if (isset($_POST['submit'])){
		
		//filtre les inputs
		$contact = filter_input_array(INPUT_POST, array(

		'firstname' => FILTER_SANITIZE_STRING,
		'lastname' => FILTER_SANITIZE_STRING,
		'datebd' => FILTER_SANITIZE_STRING,
		'countrybd' => FILTER_SANITIZE_STRING,
		'nationality' => FILTER_SANITIZE_STRING,
		'address' => FILTER_SANITIZE_STRING,
		'email' => FILTER_SANITIZE_STRING,
		'phonenb' => FILTER_SANITIZE_STRING,
		'diploma' => FILTER_SANITIZE_STRING,
		'PEnb' => FILTER_SANITIZE_STRING,
		'badgenb' => FILTER_SANITIZE_STRING,
		'urlcode' => FILTER_SANITIZE_STRING,
		'question_1' => FILTER_SANITIZE_STRING,
		'question_2' => FILTER_SANITIZE_STRING,
		'question_3' => FILTER_SANITIZE_STRING,

		), true);

		//verification de chaque input et envoi une erreur si pb
		if (empty($_POST['firstname'])){
			$valid=false;
			$errors ['firstname'] = "Champ obligatoire";
		}
		if (empty($_POST['lastname'])){
			$valid=false;
			$errors ['lastname'] = "Champ obligatoire";
		}
		if (empty($_POST['datebd'])){
			$valid=false;
			$errors ['datebd'] = "Champ obligatoire";
		} elseif (!preg_match($pat_datebd, $_POST['datebd'])) {
			$valid=false;
			$errors ['datebd'] = "veuillez rentrer une date valide";
		}
		if (empty($_POST['countrybd'])){
			$valid=false;
			$errors ['countrybd'] = "Champ obligatoire";
		}
		if (empty($_POST['nationality'])){
			$valid=false;
			$errors ['nationality'] = "Champ obligatoire";
		}
		if (empty($_POST['address'])){
			$valid=false;
			$errors ['address'] = "Champ obligatoire";
		}
		if (empty($_POST['email'])){
			$valid=false;
			$errors ['email'] = "Champ obligatoire";
		} elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
			$valid=false;
			$errors ['email'] = "Veuillez rentrer une email valide";
		}
		if (empty($_POST['phonenb'])){
			$valid=false;
			$errors ['phonenb'] = "Champ obligatoire";
		} elseif (!preg_match($pat_tel, $_POST['phonenb'])) {
			$valid=false;
			$errors ['phonenb'] = "veuillez rentrer un numéro de téléphone valide comme dans l'exemple";
		}
		if (empty($_POST['diploma'])){
			$valid=false;
			$errors ['diploma'] = "Champ obligatoire";
		}
		// // //
		if (empty($_POST['PEnb'])){
			$valid=false;
			$errors ['PEnb'] = "Champ obligatoire";
		} elseif (!preg_match($pat_PE, $_POST['PEnb'])) {
			$valid=false;
			$errors ['PEnb'] = "veuillez rentrer un numéro de Pole Emploi valide";
		}
		if (empty($_POST['badgenb'])){
			$valid=false;
			$errors ['badgenb'] = "Champ obligatoire";
		}
		if (empty($_POST['urlcode'])){
			$valid=false;
			$errors ['urlcode'] = "Champ obligatoire";
		}
		// // //
		if (empty($_POST['question_1'])){
			$valid=false;
			$errors ['question_1'] = "Champ obligatoire";
		}
		if (empty($_POST['question_2'])){
			$valid=false;
			$errors ['question_2'] = "Champ obligatoire";
		}
		if (empty($_POST['question_3'])){
			$valid=false;
			$errors ['question_3'] = "Champ obligatoire";
		} else {
			$valid=true;
		}

		if($valid == true){ //check si il est true
		$data_firstname = $_POST['firstname'];
		$data_lastname = $_POST['lastname'];
		$data_bddate = $_POST['datebd'];
		$data_countrybd = $_POST['countrybd'];
		$data_nationality = $_POST['nationality'];
		$data_address = $_POST['address'];
		$data_email = $_POST['email'];
		$data_phonenb = $_POST['phonenb'];
		$data_diploma = $_POST['diploma'];
		$data_PE = $_POST['PEnb'];
		$data_badges = $_POST['badgenb'];
		$data_codecademy = $_POST['urlcode'];
		$data_Ques_1 = $_POST['question_1'];
		$data_Ques_2 = $_POST['question_2'];
		$data_Ques_3 = $_POST['question_3'];
		}
	}?>