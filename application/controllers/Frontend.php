<?php
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Frontend extends CI_Controller {
		
		function __construct() {
			parent::__construct();
		}

		function index(){
			$this->load->view('welcome');
		}

        function about(){
			$this->load->view('about');
		}

        function services(){
			$this->load->view('services');
		}

        function contact(){
			$this->load->view('contact');
		}


		
		function generate_to_pdf(){
			$this->pdf->load_view('example_to_pdf');
			$this->pdf->render();
			ob_end_clean();
			$this->pdf->stream("name-file.pdf");
		}
	}
