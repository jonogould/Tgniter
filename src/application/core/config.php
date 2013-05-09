<?php
	
	namespace Tgniter\Core;
	
	/*
	*	You can change these config variables	
	*/

	$config['error_reporting'] = error_reporting(\DEV_MODE ? E_ALL : 0);
	$config['default_controller'] = 'home';