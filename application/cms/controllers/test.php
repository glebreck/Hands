<?php
class Test extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->load->view('view_test');
	}
}
