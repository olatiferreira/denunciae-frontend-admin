<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');		
	}

	public function index(){		
		$data = array();
		
		//Consumindo API
		$url = 'http://localhost:3001/user';

		$options = array(
			'http'=>array(
				'method'=>'GET',
				// 'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'
			)
		);

		$context = stream_context_create($options);		
		$file_content = file_get_contents($url, false, $context);		
		$json = json_decode($file_content);
		$data['users'] = $json;

		// $data['statusCode'] = $http_response_header[0];		
		

		$this->load->view('userSearch', $data);
		
	}	

	public function register(){
				
		$this->load->view('userRegister');
		
	}

	public function search(){
				
		$this->load->view('userSearch');
		
	}

	public function delete($id){		
		$data = array();
		
		//Consumindo API
		$url = 'http://localhost:3001/user/'.$id;

		$options = array(
			'http'=>array(
				'method'=>'DELETE',
				// 'header'=>'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhZG1pbiI6dHJ1ZX0.8IlVDHKrN_2jlk90pElgBkJAUbCI9gyuxYuodPGkm3s'
			)
		);

		// var_dump($url);die;

		$context = stream_context_create($options);
		$file_content = file_get_contents($url, false, $context);
		$json = json_decode($file_content);
		// var_dump($json);die;
		// $data['users'] = $json->records;

		// $data['statusCode'] = $http_response_header[0];		

		$this->load->view('userSearch', $data);
		
	}
	
}