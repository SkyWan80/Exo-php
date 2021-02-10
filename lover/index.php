<?php header('Content-type:text/html; utf-8'); ?>
<?php
	include('utils/regex.php');
	include('controller/index_controller.php');
	include('template/header.php');
	if($valid=="true"){
		include('vue/lovers.php');
	} else {
		include('vue/signin.php');
	}
	include('template/footer.php');
?>