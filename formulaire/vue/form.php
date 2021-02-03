<?php header('Content-type:text/html; utf-8');?>
<div class="container-fluid">
	<h1 class="text-center">Un formulaire :</h1>

<form action="" method="post" enctype="multipart/form-data">
 <div class="form-group">
	<div id="basicinfo" class="row">

		<p class="col-12 col-md-6">Nom :</p>
		<p class="col-12 col-md-6">Prénom :</p>

		<input class="col-12 col-md-6 form-control bg-dark text-white" type="text" name="firstname" value="<?php echo htmlspecialchars($contact['firstname']) ?>">
		<input class="col-12 col-md-6 form-control bg-dark text-white" type="text" name="lastname" value="<?php echo htmlspecialchars($contact['lastname']) ?>">

		<p class='col-6 text-danger'><?php echo htmlspecialchars($errors['firstname']) ?></p>
		<p class='col-6 text-danger'><?php echo htmlspecialchars($errors['lastname']) ?></p>


		<p class="col-12 col-md-6">date de naissance :</p>
		<p class="col-12 col-md-6">Pays de naissance :</p>

		<input class="col-12 col-md-6 form-control bg-dark text-white" type="date" name="datebd" value="<?php echo htmlspecialchars($contact['datebd']) ?>">
		<input class="col-12 col-md-6 form-control bg-dark text-white" type="text" name="countrybd" value="<?php echo htmlspecialchars($contact['countrybd']) ?>">

		<p class='col-6 text-danger'><?php echo htmlspecialchars($errors['datebd']) ?></p>
		<p class='col-6 text-danger'><?php echo htmlspecialchars($errors['countrybd']) ?></p>

		<p class="col-12 col-md-6">nationalité :</p>
		<p class="col-12 col-md-6">votre adresse :</p>

		<input class="col-12 col-md-6 form-control bg-dark text-white" type="text" name="nationality" value="<?php echo htmlspecialchars($contact['nationality']) ?>">
		<input class="col-12 col-md-6 form-control bg-dark text-white" type="text" name="address" value="<?php echo htmlspecialchars($contact['address']) ?>">

		<p class='col-6 text-danger'><?php echo htmlspecialchars($errors['nationality']) ?></p>
		<p class='col-6 text-danger'><?php echo htmlspecialchars($errors['address']) ?></p>

		<p class="col-12 col-md-6">adresse email :</p>
		<p class="col-12 col-md-6">numéro de téléphone : (exemple 03-25-15-36-95)</p>

		<input class="col-12 col-md-6 form-control bg-dark text-white" type="email" name="email" value="<?php echo htmlspecialchars($contact['email']) ?>">
		<input class="col-12 col-md-6 form-control bg-dark text-white" type="tel" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" name="phonenb" value="<?php echo htmlspecialchars($contact['phonenb']) ?>">

		<p class='col-6 text-danger'><?php echo htmlspecialchars($errors['email']) ?></p>
		<p class='col-6 text-danger'><?php echo htmlspecialchars($errors['phonenb']) ?></p>

		<p class="col-12">Votre niveau de scolarité :</p>
		<select class="col-6 form-control bg-dark text-white" name="diploma">
			<option value=<?php echo htmlspecialchars($contact['diploma'])?>><?php echo htmlspecialchars($contact['diploma'])?></option>
			<option value="sans">sans</option>
			<option value="bac">BAC</option>
			<option value="bac+2">BAC+2</option>
			<option value="bac+3">BAC+3</option>
			<option value="sup">supérieur</option>
		</select>
		<p class='col-12 text-danger'><?php echo htmlspecialchars($errors['diploma']) ?></p>
	</div>
	<hr>
	<!--*************-->
	<div id="secondaryinfo" class="row">
		<p>votre numéro de Pôle Emploi : (exemple : 1234567C)</p>
		<input class="col-12 form-control bg-dark text-white" type="text" name="PEnb" value="<?php echo htmlspecialchars($contact['PEnb']) ?>">
		<p class='col-12 text-danger'><?php echo htmlspecialchars($errors['PEnb']) ?></p>
		<p>votre nombres de badges :</p>
		<input class="col-12 form-control bg-dark text-white" id="badgenb" type="number" name="badgenb" max="999" min="0" value="<?php echo htmlspecialchars($contact['badgenb']) ?>">
		<p class='col-12 text-danger'><?php echo htmlspecialchars($errors['badgenb']) ?></p>
		<p>url de votre codecademy :</p>
		<input class="col-12 form-control bg-dark text-white" type="url" name="urlcode" value="<?php echo htmlspecialchars($contact['urlcode']) ?>">
		<p class='col-12 text-danger'><?php echo htmlspecialchars($errors['urlcode']) ?></p>
	</div>
	<!--*************-->
	<hr>
	<div id="questions" class="row">
		<p class="col-12">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
		<textarea class="col-12 form-control bg-dark text-white" name="question_1" cols="50" rows="5"><?php echo htmlspecialchars($contact['question_1']) ?></textarea>
		<p class='col-12 text-danger'><?php echo htmlspecialchars($errors['question_1']) ?></p>
		<p class="col-12">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</p>
		<textarea class="col-12 form-control bg-dark text-white" name="question_2" cols="50" rows="5"><?php echo htmlspecialchars($contact['question_2']) ?></textarea>
		<p class='col-12 text-danger'><?php echo htmlspecialchars($errors['question_2']) ?></p>
		<p class="col-12">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
		<textarea class="col-12 form-control bg-dark text-white" name="question_3" cols="50" rows="5"><?php echo htmlspecialchars($contact['question_3']) ?></textarea>
		<p class='col-12 text-danger'><?php echo htmlspecialchars($errors['question_3']) ?></p>
	</div>
	<div  id="submitInput" class="row">
		<input type="submit" class="col-12 btn btn-success" name="submit" value="valider !">
	</div>
 </div>
</form>

</div>