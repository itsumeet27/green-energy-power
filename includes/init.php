<?php

	$db = mysqli_connect('localhost', 'root', '', 'green_energy');

	if(mysqli_connect_errno()){
		echo "Database connection failed with following errors: ".mysqli_connect_error();
		die();
	}

	require_once $_SERVER['DOCUMENT_ROOT'].'/green-energy-power/config.php';
	
	function sanitize($dirty){
	  return htmlentities($dirty,ENT_QUOTES,"UTF-8");
	}	

?>