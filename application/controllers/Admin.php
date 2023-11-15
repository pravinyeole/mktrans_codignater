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
			$userpass = $this->input->post('password');
			
			if((isset($username) && $username !== null) && (isset($userpass) && $userpass !== null)){
				
				$data = $this->db->query("SELECT * from users where email = '".$username."' and password= md5('".$userpass."')")->result();
				
                if(count($data) == 1){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['id']); 
                    redirect('admin/dashboard'); 
                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.';
					redirect('index.php/admin');
                } 
			}else{
				redirect('admin');
			}
		}
		function dashboard(){
			$this->load->view('admin/dashboard');
		}

		function Create_qoute(){
			$data = $this->db->query("SELECT id,name,material_weight from vehicle_type")->result();
			$this->load->view('admin/quotation_form',compact('data'));
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
			redirect('index.php/Admin/Create_qoute');
		}

		function quotation_list(){
			// $data = $this->db->query("select quotation_form.*, vehicle_type.name as vehicle_type, qd.from as root1,qd.to as root2,qd.loading,qd.unloading,qd.amount from quotation_form 
			// left join quotation_details as qd on qd.quotation_form_id = quotation_form.id 
			// left join vehicle_type on vehicle_type.id = qd.vehical_type")->result();
			$data = $this->db->query("select * from quotation_form Order By date Desc")->result();

			$this->load->view('admin/quotation_list',compact('data'));
		}
		function view_quotation(){
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
		}
		function Create_invoice(){
			$data = $this->db->query("SELECT id,name,material_weight from vehicle_type")->result();
			$this->load->view('admin/invoice_form',compact('data'));
		}

		function submit_invoice_form()
		{
			$data['date'] = $this->input->post('date');
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
			redirect('index.php/Admin/Create_invoice');
		}

		function invoice_list(){
			$data = $this->db->query("select * from invoice_form Order By date Desc")->result();

			$this->load->view('admin/invoice_list',compact('data'));
		}

		function invoice_pdf(){

			$this->load->view('admin/invoice');
		}

		function view_invoice(){
			$page_id =$this->uri->segment(3);
			$data = $this->db->query("select *,vehicle_type.* from invoice_form Left join vehicle_type on vehicle_type.id = invoice_form.vehical_type where invoice_form.id = $page_id")->result();
			

			ob_start();
			$this->pdf->load_view('admin/invoice',compact('data'));
			$this->pdf->render();
			ob_end_clean();
			$this->pdf->stream($data[0]->company_name.".pdf");
			
			$this->load->view('admin/invoice',compact('data'));
		}

	}
