<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apoio extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');		
	}

	public function index(){
	
		$this->load->view('apoio');
	}
	
}