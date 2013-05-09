<?php
	//	Environment
	date_default_timezone_set('Africa/Johannesburg');
	session_start();

	//	Constants
	define('DEV_MODE', 1);

	//	Let the magic begin
	require 'application/tgniter.php';



	/*
	$id = (isset($_GET['id'])) ? $_GET['id'] : 'body';
	$id = str_replace('-', '_', $id);

	include "views/partials/header.tpl";
	include "views/partials/sidebar.tpl";

	if (file_exists("views/" . $id . ".tpl"))
		include "views/" . $id . ".tpl";
	else
		include "views/body.tpl";
	
	include "views/partials/footer.tpl";
	*/