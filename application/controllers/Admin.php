<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {

		public function __construct() {

			parent::__construct();
			if(!$this->session->userdata('email')) {

				redirect('auth');
			}
		}

		public function index() {

			$data['judul'] = "Dashboard";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();


			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('templates/admin_topbar', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('templates/admin_footer');

		}
	}

 ?>