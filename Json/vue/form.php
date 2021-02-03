<?php header('Content-type:text/html; utf-8');?>
<div class="container-fluid">
	<h1 class="text-center">Un formulaire :</h1>

<form action="" method="post" enctype="multipart/form-data">
 <div class="form-group">
	<input class="bg-white form-control" type ="file" name="fileup">
 </div>
 <p id="hiddentext" class="text-danger"><?php echo htmlspecialchars($errors['fileup']) ?></p>
 <div  id="submitInput" class="row">
	<input type="submit" class="col-12 btn btn-success" name="submit" value="valider !">
</div>
</form>
</div>