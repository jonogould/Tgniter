<?php
	
	namespace Tgniter;

	require 'core/config.php';
	require 'core/autoloader.php';

	/*
	*	You can change these config $values
	*/

	Config::set(array(
			'base_url' 				=> '/suppliers_new/',
			'error_reporting' 		=> error_reporting(\DEV_MODE ? E_ALL : 0),
			'default_controller' 	=> 'home'
		));

	
	/*
	*	Initialise the router
	*/

	$router = new Router($config);