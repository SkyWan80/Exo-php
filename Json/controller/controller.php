<?php
	$TypeArrays = array('jpg','png','jpeg','gif','JPG');
	$valid = false;
	$errors = array(
		'fileup' => null,
	);

	//onclick do submit
	if (isset($_POST['submit'])){
		$valid = true;

		$file_name = $_FILES["fileup"]['name'];
		$file_size = $_FILES['fileup']['size'];
		$target_dir = 'assets/img/';
		$target_file = $target_dir . basename($_FILES['fileup']['name']);
		$IMGtype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

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
			$errors ['fileup'] = "le fichier existe déjà dans la base";
			$valid=false;
		}

			//le resize d'image ne fonctionne pas a cause d'un pb de compilation pour imagecreatefromjpeg() /gd.dll;

		if ($valid == true){

			$filename   = uniqid() . "-" . time(); //génère un id unique - timestamp
			$extension_file  = pathinfo($_FILES["fileup"]["name"], PATHINFO_EXTENSION); // prend le format
			$basename   = $filename . "." . $extension_file; //combine les deux

			if (move_uploaded_file($_FILES["fileup"]["tmp_name"], $target_dir . $basename)) { //déplace le fichier



				$dataimage = $target_dir . $basename;//créer un string de la localisation de la nouvelle image

				$data = array(
					'filename' => $file_name,
					'filesize' => $file_size,
					'fileimage' => $dataimage
					);

				$jsonfile = file_get_contents('assets/myjs/data.json'); //chope le json
				$jsonfile_data = json_decode($jsonfile); //l'ouvre
				$array_data[] = $data; //le met dans un array
				array_push($jsonfile_data, $array_data);//ajoute par dessus l'ancien array
				$datajson = json_encode($jsonfile_data, JSON_PRETTY_PRINT);//encode l'array pour le json
				file_put_contents('assets/myjs/data.json', $datajson); //le met dans le json
				$echojson = file_get_contents('assets/myjs/data.json');// chope le json pour l'echo

				$errors ['fileup'] = "le fichier ". $basename . " à était uploadé.";

				echo "<img src='$dataimage'>";
			} else {

				$errors ['fileup'] = "Erreur durant l'upload veuillez réessayer";
			}
		}
	}
?>