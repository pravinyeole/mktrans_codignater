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
			
			// if((isset($username) && $username !== null) && (isset($userpass) && $userpass !== null)){

			// }else{

			// }
			$this->load->view('admin/dashboard');
		}
		function dashboard(){
			$this->load->view('admin/dashboard');
		}

		function Create_qoute(){

			$this->load->view('admin/quotation_form');
		}

		function vehical_type(){
			$data = $this->db->query("SELECT id,name,material_weight from vehicle_type")->result();
			$this->load->view('admin/view_vehicle_type',compact('data'));
		}

		function submit_vehical_type(){
			$data['name'] = $this->input->post('name');
			$data['material_weight'] = $this->input->post('material_weight');
            $this->db->insert('vehicle_type',$data);
            $this->session->set_flashdata('msg', 'Data Save Successfully');
			redirect('index.php/Admin/vehical_type');
		}

		function vehical_type_delete(){
			$page_id =$this->uri->segment(3);
			$this -> db -> where('id', $page_id);
			$this -> db -> delete('vehicle_type');
			redirect('index.php/Admin/vehical_type');
		}
		
	}
