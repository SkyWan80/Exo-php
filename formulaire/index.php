<?php
	include('utils/regex.php');
	include('controller/controller.php');
	include('template/header.php');

	if($valid == true){
	include('vue/data.php');
	} else {
	include('vue/form.php');
	}

	include('template/footer.php');
?>