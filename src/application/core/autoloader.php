<?php
	
	//	Register the autoload class with SPL
	spl_autoload_register('autoload');

	//	Class autoloading
	function autoload($class)
		{
		$found = false;
		$class_dirs = array(
			'application/core/',
			'application/controllers/',
			'application/models/',
			'application/views/',
			'application/'
		);

		//	Remove namespace from class
		$backslash = strrpos($class, '\\');
		if ($backslash > -1) $class = substr($class, $backslash+1);

		foreach ($class_dirs as $dir)
			{
			$path = $dir . strtolower($class) . '.php';

			if (file_exists($path))
				{
				if (DEV_MODE)
					include_once ($path);
				else
					@include_once ($path);

				$found = true;
				return true;
				}
			}

		//	If no file was found then return an exception
		if (!$found)
			{
			throw new \Exception("Unable to find $class.");
			return false;
			}
		}
