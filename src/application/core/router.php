<?php
	
	namespace Tgniter;

	class Router
		{
		/*
		*	route[0] = controller class
		*	route[1] = method in above class
		*/

		private $base;
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

		function __construct()
			{
			$this->base = new Base();

			if (!isset($_GET['id'])) {
				$this->route = array(Config::get('default_controller'), 'index');
			}
			else {
				$this->route = (!empty($_GET['id'])) ? explode('/', trim($_GET['id'], '/')) : array(Config::get('default_controller'));
				$this->args = (!empty($_GET['args'])) ? $_GET['args'] : '';

				//	Remove the first part
				if(count($this->route) > 1)
					array_shift($this->route);

				//	Make the default function index
				if (count($this->route) === 1)
					array_push($this->route, 'index');

				//	Replace - with _
				if (count($this->route) >= 2)
					$this->route[1] = str_replace('-', '_', $this->route[1]);

				//	Check for args
				if (empty($this->args) && count($this->route) == 3)
					$this->args = $this->route[2];
			}

			//	Set some configuration variables
			Config::set(array('route' => $this->route));
			Config::set(array('args' => $this->args));

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
			else	//	If the index method in specified class exists
				call_user_func(array($TG, 'index'));
			}

		}