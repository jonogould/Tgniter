<?php
	
	namespace Tgniter;

	class Router
		{
		/*
		*	route[0] = controller class
		*	route[1] = method in above class
		*/

		private $route;
		private $args;


		/*
		*	Getters & Setters
		*/

		public function get_route() {
			return $ruote;
		}

		public function set_route($route) {
			$this->route = $route;
		}

		public function get_args() {
			return $args;
		}

		public function set_args($args) {
			$this->args = $args;
		}


		/*
		*	Default constructor
		*/

		function __construct($config)
			{
			$this->route = (!empty($_GET['id'])) ? explode('/', ucwords($_GET['id'])) : array($config['default_controller']);
			$this->args = (!empty($_GET['args'])) ? $_GET['args'] : '';

			//	Remove the first part
			array_shift($this->route);

			//	Make the default function index
			if (count($this->route) === 1)
				array_push($this->route, 'index');

			//	Check for args
			if (empty($this->args) && count($this->route) == 3)
				$this->args = $this->route[2];

			//	Try to find the route and load the class, otherwise fall back to default core/controller.php
			try
				{
				$TG = new $this->route[0];
				}
			catch(\Exception $e)
				{
				$TG = new Controller;
				}


			//	Now call the requested function, fall back to index
			if (method_exists($TG, $this->route[1]))	//	If the method with-in the specified class exists
				call_user_func(array($TG, $this->route[1]), $this->args);
			else if (method_exists($TG, 'index'))	//	If the index method in specified class exists
				call_user_func(array($TG, 'index'));
			else	//	Fall back to index in defualt controller
				call_user_func(array(new Controller, 'index'));
			}

		}