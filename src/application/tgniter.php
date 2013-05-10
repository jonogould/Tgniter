<?php
	
	namespace Tgniter;

	session_start();

	require 'core/config.php';
	require 'core/autoloader.php';

	/*
	*	You can change these config $values
	*/

	error_reporting(\DEV_MODE ? E_ALL : 0);

	Config::set(array(
			'base_url' 				=> '',
			'error_reporting' 		=> error_reporting(\DEV_MODE ? E_ALL : 0),
			'default_controller' 	=> 'home'
		));

	
	/*
	*	Initialise the router
	*/

	$router = new Router();