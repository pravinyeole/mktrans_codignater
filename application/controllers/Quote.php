<?php
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Quote extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->library('encryption');
			$this->load->library(array('session', 'form_validation', 'email'));
		}

		function quote_insert(){
			$data['company_name'] = $this->input->post('company_name');
			$data['name'] = $this->input->post('name');
            $data['email']=$this->input->post('email');
            $data['mobile_number']=$this->input->post('mobile_number');
            $data['to_location'] = $this->input->post('to_location');
			$data['from_location'] = $this->input->post('from_location');
            $data['desc']=$this->input->post('desc');
        
            $this->db->insert('qoute',$data);
            $this->session->set_flashdata('msg', 'Thank you for sending in your quotation. We’ll be in touch');
			redirect('index.php/frontend/contact');
		}
		
	}