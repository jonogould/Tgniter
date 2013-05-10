<?php
	
	namespace Tgniter;
	
	class Controller
	{
		protected $base;
		protected $load;
		protected $model;
		

		/*
		*	Default constructor
		*/

		function __construct() {
			$this->base = new Base();
			$this->load = new Load();
			$this->model = new Model();
		}

		
		/*
		*	Default index method
		*	====================
		*	Note: Good place to call the 404 page from ;)
		*/

		function index() {
			$this->load->view('404', array('request' => $_GET['id']));
		}

		
		/*
		*	Returns a json encoded string of the passed argument
		*/

		public function to_json($args) {
			return json_encode($args);
		}
	}