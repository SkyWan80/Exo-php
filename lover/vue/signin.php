<div class="container-fluid">
	<h1 class="text-center">Envie de rencontrer des d&eacute;seper&eacute;s ?</h1>

<form action="" method="post" enctype="multipart/form-data">
 <div class="form-group row">
 <div class="col-6 row">
	<p class="col-6">Pr&eacute;nom</p>
	<input class="form-control col-6" type="text" name="lastname" value="<?php echo $contact['lastname'] ?>">
	<p class='col-6 text-danger'><?php echo $errors['lastname'] ?></p>
</div>
 <div class="col-6 row">
	<p class="col-6">Nom</p>
	<input class="form-control col-6" type="text" name="firstname" value="<?php echo $contact['firstname'] ?>">
	<p class='col-6 text-danger'><?php echo $errors['firstname'] ?></p>
</div>
<div class="col-6 row">
	<p class="col-6">Date de naissance</p>
	<input class="form-control col-6" type="date" name="age" value="<?php echo $contact['age'] ?>">
	<p class='col-6 text-danger'><?php echo $errors['age'] ?></p>
</div>
 <div class="col-6 row">
	<p class="col-6">Votre genre</p>
	<select class="col-6" name="gender">
		<option value=<?php echo $contact['gender']?>><?php echo $contact['gender']?></option>
		<option value="homme">homme</option>
		<option value="femme">femme</option>
	</select>
	<p class='col-6 text-danger'><?php echo $errors['gender'] ?></p>
</div>
 <div class="col-6 row">
	<p class="col-6">Email</p>
	<input class="form-control col-6" type="email" name="email" value="<?php echo $contact['email'] ?>">
	<p class='col-6 text-danger'><?php echo $errors['email'] ?></p>
</div>
 <div class="col-6 row">
	<p class="col-6">Code postal</p>
	<input class="form-control col-6" type="text" name="zipcode" value="<?php echo $contact['zipcode']?>">
	<p class='col-6 text-danger'><?php echo $errors['zipcode'] ?></p>
</div>
 <div class="col-6 row">
	<p class="col-12">Votre photo de profil</p>
	<input class="form-control col-12" type ="file" name="fileup">
	<p class='col-12 text-danger'><?php echo $errors['fileup'] ?></p>
</div>
	<p class="col-12">D&eacute;crivez vous</p>
	<textarea class="col-12 form-control" name="desc" cols="50" rows="5"><?php echo $contact['desc'] ?></textarea>
	<p class='col-12 text-danger'><?php echo $errors['desc'] ?></p>
 <div class="col-12 row">
	<p class="col-6">Vous recherchez ?</p>
	<select class="col-6" name="find">
		<option value=<?php echo $contact['find']?>><?php echo $contact['find']?></option>
		<option value="homme">homme</option>
		<option value="femme">femme</option>
	</select>
	<p class='col-6 text-danger'><?php echo $errors['find'] ?></p>
</div>
 <div  id="submitInput" class="row">
	<input type="submit" class="col-12 btn btn-success" name="submit" value="valider !">
</div>
</form>
</div>