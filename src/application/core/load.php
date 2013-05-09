<?php
	
	namespace Tgniter;
	
	class Load
	{
		/*
		*	Loads a view file
		*	=================
		*	$file 	= the file name (e.g. 'home')
		*	$data 	= data array
		*	$class 	= the name of the class file, looks inside that folder..
		*/

		function view($file, $data = null, $class = '') {
			if (is_array($data))
				extract($data);

			$path = 'application/views/' . $class . (!empty($class) ? '/' : '') . $file . '.php';
			
			if (file_exists($path))
				include $path;
			else
				include 'application/views/404.php';
		}
	}