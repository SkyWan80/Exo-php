<?php header('Content-type:text/html; utf-8');?>
<div class="container-fluid">
	<div class="row">
		<p class="col-6">Votre Nom est :</p>
		<p class="col-6"> Votre Prénom est :</p>
		<p class="col-6"><?php echo $data_firstname; ?></p>
		<p class="col-6"><?php echo $data_lastname; ?></p>
		<p class="col-6">Votre date de naissance est le:</p>
		<p class="col-6"> Votre pays de naissance est:</p>
		<p class="col-6"><?php echo $data_bddate; ?></p>
		<p class="col-6"><?php echo $data_countrybd; ?></p>
		<p class="col-6">Votre nationalité est :</p>
		<p class="col-6"> Votre email est :</p>
		<p class="col-6"><?php echo $data_nationality; ?></p>
		<p class="col-6"><?php echo $data_email; ?></p>
		<p class="col-6">Votre numéro de téléphone est le :</p>
		<p class="col-6"> Votre dernier diplôme :</p>
		<p class="col-6"><?php echo $data_phonenb; ?></p>
		<p class="col-6"><?php echo $data_diploma; ?></p>
		<p class="col-6">Votre numéro Pole Emploi est le :</p>
		<p class="col-6"> Votre nombres de badges est de :</p>
		<p class="col-6"><?php echo $data_PE; ?></p>
		<p class="col-6"><?php echo $data_badges; ?></p>
		<p class="col-6">Votre url codecademy :</p>
		<p class="col-6">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
		<p class="col-6"><?php echo $data_codecademy; ?></p>
		<p class="col-6"><?php echo $data_Ques_1; ?></p>
		<p class="col-6">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
		<p class="col-6">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
		<p class="col-6"><?php echo $data_Ques_2; ?></p>
		<p class="col-6"><?php echo $data_Ques_3; ?></p>
	</div>
</div>