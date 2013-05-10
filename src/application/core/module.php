<?php

	namespace Tgniter;
	
	class Module
	{
		protected $base;
		protected $load;
		protected $model;

		function __construct() {
			$this->base = new Base();
			$this->load = new Load();
			$this->model = new Model();
		}
	}