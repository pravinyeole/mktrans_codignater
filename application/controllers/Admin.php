<?php
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Admin extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->library('session');
        	$this->load->helper('url');
			$this->load->library('encryption');
			$this->load->library(array('session', 'form_validation', 'email'));
		}

		function index(){
			$this->load->view('admin/login');
		}
		function logincheck(){
			$username = $this->input->post('username');
			$userpass = $this->input->post('password');
			if((isset($username) && $username !== null) && (isset($userpass) && $userpass !== null)){
				
				$data = $this->db->query("SELECT * from users where email = '".$username."' and password= md5('".$userpass."')")->result();
				
                if(count($data) == 1){ 
                    $newdata = array(
		               'logged_in' => TRUE
		           	);
					$this->session->set_userdata($newdata); 

                    $this->load->view('admin/dashboard'); 
                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.';
					redirect('admin');
                } 
			}else{
				redirect('admin');
			}
		}
		function dashboard(){
			if($this->session->has_userdata('logged_in')){
				$this->load->view('admin/dashboard');
			}else{
				redirect('admin');
			}
		}

		function Create_qoute(){
			if($this->session->has_userdata('logged_in')){
				$data = $this->db->query("SELECT id,name,material_weight from vehicle_type")->result();
				$this->load->view('admin/quotation_form',compact('data'));
			}else{
				redirect('admin');
			}
		}

		function vehical_type(){
			if($this->session->userdata("logged_in")){
				$data = $this->db->query("SELECT id,name,material_weight from vehicle_type")->result();
				$this->load->view('admin/view_vehicle_type',compact('data'));
			}else{
				redirect('admin');
			}
		}

		function submit_vehical_type(){
			if($this->session->has_userdata('logged_in')){
				$data['name'] = $this->input->post('name');
				$data['material_weight'] = $this->input->post('material_weight');
	            $this->db->insert('vehicle_type',$data);
	            $this->session->set_flashdata('msg', 'Data Save Successfully');
				redirect('Admin/vehical_type');
			}else{
				redirect('admin');
			}
		}

		function vehical_type_delete(){
			if($this->session->has_userdata('logged_in')){
				$page_id =$this->uri->segment(3);
				$this -> db -> where('id', $page_id);
				$this -> db -> delete('vehicle_type');
				redirect('Admin/vehical_type');
			}else{
				redirect('admin');
			}
		}

		function submit_quotation_form()
		{
			$data['date'] = $this->input->post('date');
			$data['company_name'] = $this->input->post('companyname');
			$data['mobile'] = $this->input->post('mobilenumber');
			$data['address'] = $this->input->post('address');
            $ids = $this->db->insert('quotation_form',$data);

			$from = $this->input->post('route1');
			$to = $this->input->post('route2');
			$vehical_type = $this->input->post('vehical_type');
			$loading = $this->input->post('loading');
			$unloading = $this->input->post('unloading');
			$amount = $this->input->post('amount');
			$id = $this->db->insert_id();
			for($i = 0; $i < count($from); $i++)
			{
				if(!empty($from[$i]))
				{
					$data1['quotation_form_id'] = $id;
					$data1['from'] = $from[$i];
					$data1['to'] = $to[$i];
					$data1['vehical_type'] = $vehical_type[$i];
					$data1['loading'] = $loading[$i];
					$data1['unloading'] = $unloading[$i];
					$data1['amount'] = $amount[$i];
	
					$this->db->insert('quotation_details',$data1);
				}
				else
				{
					break;
				}
			}

            $this->session->set_flashdata('msg', 'Data Save Successfully');
			redirect('Admin/Create_qoute');
		}

		function quotation_list(){
			if($this->session->has_userdata('logged_in')){
				$data = $this->db->query("select * from quotation_form Order By date Desc")->result();

				$this->load->view('admin/quotation_list',compact('data'));
			}else{
				redirect('admin');
			}
		}
		function view_quotation(){
			if($this->session->has_userdata('logged_in')){
				$page_id =$this->uri->segment(3);
				$data = $this->db->query("select * from quotation_form where quotation_form.id = $page_id")->result();
				$data1 = $this->db->query("select vehicle_type.name as vehicle_type,vehicle_type.material_weight, qd.from as root1,qd.to as root2,qd.loading,qd.unloading,qd.amount from quotation_form 
				left join quotation_details as qd on qd.quotation_form_id = quotation_form.id 
				left join vehicle_type on vehicle_type.id = qd.vehical_type where quotation_form.id = $page_id")->result();
				
				$this->pdf->load_view('admin/quotation',compact('data','data1'));
				$this->pdf->render();
				ob_end_clean();
				$this->pdf->stream($data[0]->company_name.".pdf");
				
				$this->load->view('admin/quotation',compact('data','data1'));
			}else{
				redirect('admin');
			}
		}
		function Create_invoice(){
			if($this->session->has_userdata('logged_in')){
				$data = $this->db->query("SELECT id,name,material_weight from vehicle_type")->result();
				$this->load->view('admin/invoice_form',compact('data'));
			}else{
				redirect('admin');
			}
		}

		function submit_invoice_form()
		{
			$data['date'] = $this->input->post('date');
			$data['mk_invoice_no'] = $this->input->post('invoice_no_mk');
			$data['company_name'] = ucfirst(strtolower($this->input->post('companyname')));
			$data['mobile'] = $this->input->post('mobilenumber');
			$data['address'] = $this->input->post('address');
			$data['route1'] = ucfirst(strtolower($this->input->post('route1')));
			$data['route2'] = ucfirst(strtolower($this->input->post('route2')));
			$data['consignor'] = ucfirst(strtolower($this->input->post('consignor')));
			$data['consignee'] = ucfirst(strtolower($this->input->post('consignee')));
			$data['invoice_no'] = $this->input->post('invoice_no');
			$data['bilty_no'] = $this->input->post('bilty_no');
			$data['vehicle_no'] = $this->input->post('vehicle_no');
			$data['vehical_type'] = $this->input->post('vehical_type');
			$data['material_type'] = ucfirst(strtolower($this->input->post('material_type')));
			$data['amount'] = $this->input->post('amount');
			$data['gstno'] = $this->input->post('gstno');
			$data['lr_charge'] = $this->input->post('lr_charge');
            $ids = $this->db->insert('invoice_form',$data);

            $this->session->set_flashdata('msg', 'Data Save Successfully');
			redirect('Admin/Create_invoice');
		}

		function invoice_list(){
			if($this->session->has_userdata('logged_in')){
				$data = $this->db->query("select * from invoice_form where is_delete ='1' Order By date Desc")->result();
				$status = 'active';
				$this->load->view('admin/invoice_list',compact('data','status'));
			}else{
				redirect('admin');
			}

		}
		function invoice_list_inactive(){
			if($this->session->has_userdata('logged_in')){
				$data = $this->db->query("select * from invoice_form where is_delete ='0' Order By date Desc")->result();
				$status = 'inactive';
				$this->load->view('admin/invoice_list',compact('data','status'));
			}else{
				redirect('admin');
			}

		}
		

		function invoice_pdf(){
			if($this->session->has_userdata('logged_in')){
				$this->load->view('admin/invoice');
			}else{
				redirect('admin');
			}
			
		}

		function delete_invoice(){
			if($this->session->has_userdata('logged_in')){
				$page_id =$this->uri->segment(3);
				$data = $this->db->query("Update invoice_form SET is_delete='0' Where id=$page_id");

				redirect('Admin/invoice_list');
			}else{
				redirect('admin');
			}

		}

		function view_invoice(){
			if($this->session->has_userdata('logged_in')){
				$page_id =$this->uri->segment(3);
				$data = $this->db->query("select *,vehicle_type.* from invoice_form Left join vehicle_type on vehicle_type.id = invoice_form.vehical_type where invoice_form.id = $page_id")->result();
				

				ob_start();
				$this->pdf->load_view('admin/invoice',compact('data'));
				$this->pdf->render();
				ob_end_clean();
				$this->pdf->stream($data[0]->company_name.".pdf");
				
				$this->load->view('admin/invoice',compact('data'));
			}else{
				redirect('admin');
			}
			
		}

		function Create_lr(){
			if($this->session->has_userdata('logged_in')){
				$data = $this->db->query("SELECT id,name,material_weight from vehicle_type")->result();
				$this->load->view('admin/lr',compact('data'));
			}else{
				redirect('admin');
			}

		}

		function submit_lr_form()
		{
			$data['invoice_no'] = $this->input->post('invoice_no');
			$data['invoice_date'] = $this->input->post('invoice_date');
			$data['invoice_bill_no'] = $this->input->post('bill_no');
			$data['lorry_receipt_no'] = $this->input->post('lorry_no');
			$data['lorry_receipt_date'] = $this->input->post('lorry_date');
			$data['vehicle_no'] = strtoupper($this->input->post('vehicle_no'));
			$data['consignor_name'] = ucfirst(strtolower($this->input->post('Consignorname')));
			$data['consignor_address'] = ucfirst(strtolower($this->input->post('Consignor_address')));
			$data['consignor_no'] = $this->input->post('Consignor_mobilenumber');
			$data['consignor_gst'] = strtoupper($this->input->post('Consignor_gst'));
			$data['consignee_name'] = ucfirst(strtolower($this->input->post('Consigneename')));
			$data['consignee_address'] = ucfirst(strtolower($this->input->post('consignee_address')));
			$data['consignee_no'] = $this->input->post('Consigneemobilenumber');
			$data['consignee_gst'] = strtoupper($this->input->post('Consignee_gst'));
			$data['loading_charge'] = $this->input->post('load_charge');
			$data['other_charge'] = $this->input->post('other_charge');
			$data['bilty_charge'] = $this->input->post('bilti_charge');
			$data['freight_amount'] = $this->input->post('freight_amount');
			$data['advance_amount'] = $this->input->post('advance_amount');
			$data['balance_amount'] = $this->input->post('balance_amount');
			$data['route1'] = ucfirst(strtolower($this->input->post('route1')));
			$data['route2'] = ucfirst(strtolower($this->input->post('route2')));
			$data['jurisdiction_place'] = ucfirst(strtolower($this->input->post('jurisdiction_place')));

			$data['insurance_name'] = ucfirst(strtolower($this->input->post('insurance_name')));
			$data['insurance_number'] = $this->input->post('insurance_no');
			$data['insurance_amount'] = $this->input->post('insurance_amount');
			$data['insurance_date'] = $this->input->post('insurance_date');

            $ids = $this->db->insert('lr_form',$data);

			$material_type = ucfirst(strtolower($this->input->post('material_type')));
			$hsn = $this->input->post('hsn');
			$weight = $this->input->post('weight');
			$rate = $this->input->post('rate');
			$id = $this->db->insert_id();
			for($i = 0; $i < count($material_type); $i++)
			{
				if(!empty($material_type[$i]))
				{
					$data1['lr_id'] = $id;
					$data1['material_type'] = $material_type[$i];
					$data1['hsn'] = $hsn[$i];
					$data1['weight'] = $weight[$i];
					$data1['rate'] = $rate[$i];
	
					$this->db->insert('lr_details',$data1);
				}
				else
				{
					break;
				}
			}

            $this->session->set_flashdata('msg', 'Data Save Successfully');
			redirect('Admin/Create_lr');
		}

		function lr_list(){
			if($this->session->has_userdata('logged_in')){
				$data = $this->db->query("select * from lr_form Order By invoice_date Desc")->result();

				$this->load->view('admin/lr_list',compact('data'));
			}else{
				redirect('admin');
			}

		}

		function view_lr(){
			if($this->session->has_userdata('logged_in')){
				$page_id =$this->uri->segment(3);
				$data = $this->db->query("select *,lr_details.* from lr_form Left join lr_details on lr_details.lr_id = lr_form.id where lr_form.id = $page_id")->result();
				
				ob_start();
				$this->pdf->load_view('admin/lr_pdf',compact('data'));
				$this->pdf->render();
				ob_end_clean();
				$this->pdf->stream($data[0]->consignor_name.".pdf");
				
				$this->load->view('admin/lr_pdf',compact('data'));
			}else{
				redirect('admin');
			}

		}

		function logout()
		{
			$user_data = $this->session->all_userdata();
				foreach ($user_data as $key => $value) {
					if ($key != 'userId' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
						$this->session->unset_userdata($key);
					}
				}
			$this->session->sess_destroy();
			redirect('admin');
		}

		function Create_Stock(){
			if($this->session->has_userdata('logged_in')){
				$data = $this->db->query("SELECT id,name,material_weight from vehicle_type")->result();
				$this->load->view('admin/stock',compact('data'));
			}else{
				redirect('admin');
			}

		}

		function quotation_list_website(){
			if($this->session->has_userdata('logged_in')){
				$data = $this->db->query("select * from qoute Order By id Desc")->result();
				return $this->load->view('admin/quotation_list_website',compact('data'));
			}else{
				redirect('admin');
			}

		}
	}
