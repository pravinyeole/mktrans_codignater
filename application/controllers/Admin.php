<?php
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Admin extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->library('encryption');
			$this->load->library(array('session', 'form_validation', 'email'));
		}

		function index(){
			$this->load->view('admin/login');
		}
		function logincheck(){
			$username = $this->input->post('username');
			$userpass = $this->input->post('userpass');
			
			if((isset($username) && $username !== null) && (isset($userpass) && $userpass !== null)){

			}else{

			}
		}
		function dashboard(){
			$this->load->view('admin/dashboard');
		}
		
	}
