<?php
	
	class Home extends TGniter\Controller
	{
		function __construct() {
			parent::__construct();
		}

		function index() {
			$this->load->view('home');
		}

		function cool($stuff) {
			echo $this->to_json(array('hi'=>'there', 'cool'=>$stuff));
		}
	}