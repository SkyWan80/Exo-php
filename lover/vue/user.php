<?php include('../template/header.php');?>
<?php include('../controller/user_controller.php');?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"  id="navbar-Title"><?php echo 'Bonjour ' . $_COOKIE['lastname'] . ' !' ?></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../">Nos celibataires <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link">Mes informations</a>
      </li>
    </ul>
  </div>
</nav>
<div id="user" class="text-center">
	<p>Pr&eacute;nom : <?php echo $_COOKIE['lastname']; ?></p>
	<p>Nom : <?php echo $_COOKIE['firstname']; ?></p>
	<p>date de naissance : <?php echo $_COOKIE['age']; ?></p>
	<p>age : <?php echo $_COOKIE['interval']; ?></p>
	<p>genre : <?php echo $_COOKIE['gender']; ?></p>
	<p>code postal : <?php echo $_COOKIE['zipcode']; ?></p>
	<p>email : <?php echo $_COOKIE['email']; ?></p>
	<img src="../<?php echo $_COOKIE['img']; ?>" alt="user image" style="height:500px; width:500px;">
	<p>votre description : <?php echo $_COOKIE['desc']; ?></p>
	<p>vous recherchez : <?php echo $_COOKIE['find']; ?></p>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="submit" class="btn btn-success" name="submit" value="supprimer profil">
		<input type="button" class="btn btn-success" name="buttonTake" onclick="showVideo()" value="Tu veux augementer ta chance ?">
	</form>
	<div id="hiddenDiv">
	<p>Git gud.</p>
	<iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/Mg02NzsXrJk?start=5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>
<?php 	include('../template/footer2.php'); ?>