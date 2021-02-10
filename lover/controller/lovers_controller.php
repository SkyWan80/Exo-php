<?php

if(!isset($_COOKIE['lastname'],$_COOKIE['firstname'],$_COOKIE['age'],$_COOKIE['interval'],$_COOKIE['gender'],$_COOKIE['zipcode'],$_COOKIE['email'],$_COOKIE['img'],$_COOKIE['desc'],$_COOKIE['find'])){

session_start();
setcookie('lastname' ,$data_lastname, time()+24*3600);
setcookie('firstname',$data_firstname, time()+24*3600);
setcookie('age',$data_age, time()+24*3600); // a ne pas cofondre avec interval celui-ci contient que la date de naissance
setcookie('interval',$interval, time()+24*3600); // retourne le nombre d'années de l'utilisateur
setcookie('gender',$data_gender, time()+24*3600);
setcookie('zipcode',$data_zipcode, time()+24*3600);
setcookie('email',$data_email, time()+24*3600);
setcookie('img' ,$data_image, time()+24*3600);
setcookie('desc' ,$data_desc, time()+24*3600);
setcookie('find',$data_find, time()+24*3600);
header("refresh:0");

}

/*----------------------------*/
//		LISTE DES PROFILES	  //
/*---------------------------*/

$users = array( //pour pouvoir tout stocker dans users et pour pouvoir facilement les énumérés
				array(
					'user_lastname' => 'Mason',
					'user_firstname' => 'Poppy',
					'user_age' => '1993-03-15',
					'user_interval' => 28,
					'user_gender' => 'femme',
					'user_zipcode' => 8018,
					'user_email' => 'dmbkiwi@gmail.com',
					'user_img' => 'assets/img/601a5f8fb6324-1612341135.jpeg',
					'user_desc' => 'viens me voir twitch.tv/gimmemoney pour me donner ton SMIC <3',
					'user_find' => 'homme'
				),
				array(
					'user_lastname' => 'Ali',
					'user_firstname' => 'Cathy',
					'user_age' => '1986-08-20',
					'user_interval' => 35,
					'user_gender' => 'femme',
					'user_zipcode' => 8165,
					'user_email' => 'cantu@me.com',
					'user_img' => 'assets/img/60181aba19b47-1612192442.jpg',
					'user_desc' => 'j\'ai une belle moustache.',
					'user_find' => 'femme'
				),
				array(
					'user_lastname' => 'Bauer',
					'user_firstname' => 'Danelle',
					'user_age' => '1972-11-03',
					'user_interval' => 49,
					'user_gender' => 'femme',
					'user_zipcode' => 51243,
					'user_email' => 'yfreund@icloud.com',
					'user_img' => 'assets/img/601a5f9d9f703-1612341149.jpeg',
					'user_desc' => 'Je sais pas quoi mettre LOL',
					'user_find' => 'homme'
				),
				array(
					'user_lastname' => 'Cooper',
					'user_firstname' => 'Sharon',
					'user_age' => '1996-03-04',
					'user_interval' => 25,
					'user_gender' => 'femme',
					'user_zipcode' => 23077,
					'user_email' => 'evans@yahoo.ca',
					'user_img' => 'assets/img/60193530275e0-1612264752.jpg',
					'user_desc' => '...',
					'user_find' => 'homme'
				),
				array(
					'user_lastname' => 'Heath',
					'user_firstname' => 'Lola',
					'user_age' => '1992-01-12',
					'user_interval' => 29,
					'user_gender' => 'femme',
					'user_zipcode' => 23078,
					'user_email' => 'jkegl@mac.com',
					'user_img' => 'assets/img/601949dc0f299-1612270044.jpg',
					'user_desc' => 'Quacc.',
					'user_find' => 'homme'
				),
				array(
					'user_lastname' => 'Cobb',
					'user_firstname' => 'Aleks',
					'user_age' => '1983-07-09',
					'user_interval' => 38,
					'user_gender' => 'homme',
					'user_zipcode' => 10145,
					'user_email' => 'gemmell@mac.com',
					'user_img' => 'assets/img/601a5ef3521f0-1612340979.jpg',
					'user_desc' => 'Wanna hear a tech tip ?',
					'user_find' => 'femme'
				),
				array(
					'user_lastname' => 'Lead',
					'user_firstname' => 'Albert',
					'user_age' => '1969-08-01',
					'user_interval' => 52,
					'user_gender' => 'homme',
					'user_zipcode' => 2400,
					'user_email' => 'sonnen@comcast.net',
					'user_img' => 'assets/img/601a5ea23cf94-1612340898.jpg',
					'user_desc' => 'un artiste incompris.',
					'user_find' => 'femme'
				),
				array(
					'user_lastname' => 'Ross',
					'user_firstname' => 'Bob',
					'user_age' => '1982-04-30',
					'user_interval' => 39,
					'user_gender' => 'homme',
					'user_zipcode' => 69420,
					'user_email' => 'wsnyder@verizon.net',
					'user_img' => 'assets/img/60191accee606-1612257996.jpg',
					'user_desc' => 'J\'ai p&eacute;t&eacute; et c\'est p&eacute;t&eacute;.',
					'user_find' => 'homme'
				),
				array(
					'user_lastname' => 'John',
					'user_firstname' => 'Human',
					'user_age' => '1998-02-25',
					'user_interval' => 22,
					'user_gender' => 'homme',
					'user_zipcode' => 51348,
					'user_email' => 'suresh@sbcglobal.net',
					'user_img' => 'assets/img/601a5ec67c866-1612340934.jpg',
					'user_desc' => 'He\'s human.',
					'user_find' => 'femme'
				),
				array(
					'user_lastname' => 'Vicker',
					'user_firstname' => 'Mike',
					'user_age' => '1992-09-05',
					'user_interval' => 29,
					'user_gender' => 'homme',
					'user_zipcode' => 62658,
					'user_email' => 'druschel@me.com',
					'user_img' => 'assets/img/601a5eb79857d-1612340919.jpg',
					'user_desc' => 'Trop jou&eacute; sur la PS5. M&ecirc;me si il n\'y a pas de jeux.',
					'user_find' => 'femme'
				),
			);
/*----------------------------*/

?>
<!--PARTIE HTML-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand"  id="navbar-Title"><?php echo 'Bonjour ' . $_COOKIE['lastname'] . ' !' ?></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarNavContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link">Nos celibataires <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vue/user.php">Mes informations</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
  <div class="row">
<!--***********-->

<?php
	foreach($users as $i => $item) {
		if($users[$i]['user_gender'] == $_COOKIE['find'] && $users[$i]['user_find'] == $_COOKIE['gender']){ //check si le genre des users est le même que celui de l'inscrit
			?><div class="card bg-dark col-lg-4 col-12">
				<img class="card-img-top" src="<?php echo $users[$i]['user_img']; ?>" alt="Card image cap">
				<div class="card-body text-center">
					<p class="card-text">Nom : <?php echo $users[$i]['user_firstname']; ?></p>
					<p class="card-text">Pr&eacute;nom : <?php echo $users[$i]['user_lastname'];  ?></p>
					<p class="card-text">Age : <?php echo $users[$i]['user_interval']; ?></p>
					<p class="card-text">Code postal : <?php echo $users[$i]['user_zipcode']; ?></p>
					<p class="card-text"> Description : <?php echo $users[$i]['user_desc']; ?></p>
					<button class="btn btn-danger" id="buttonLike" onclick="changeColor(this);">Like <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg></button>
				 </div>
			</div>
<?php
		}
	}
?>
<!--PARTIE HTML-->
</div>
</div>
<!--***********-->