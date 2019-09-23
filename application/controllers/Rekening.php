<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Rekening extends CI_Controller {

		public function __construct() {

			parent::__construct();
			if(!$this->session->userdata('email')) {

				redirect('auth');
			}
		}

		public function index() {

			$data['judul'] = "Rekening";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['rekening'] = $this->db->get('tb_rekening')->result_array();

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('rekening', 'rekening', 'required');
			$this->form_validation->set_rules('bank', 'Bank', 'required');
			$this->form_validation->set_rules('icon', 'Icon', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('rekening/index', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$nama = htmlspecialchars($this->input->post('nama', true));
				$rekening = htmlspecialchars($this->input->post('rekening', true));
				$bank = htmlspecialchars($this->input->post('bank', true));
				$icon = htmlspecialchars($this->input->post('icon', true));

				$data = [
					'nama' => $nama,
					'no_rekening' => $rekening,
					'bank' => $bank,
					'icon_bank' => $icon
				];

				$this->db->insert('tb_rekening', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  New Rekening added!
					</div>');
				redirect('rekening');
			}
		}

		public function delete($id) {

			$this->db->delete('tb_rekening', ['id' => $id]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Delete success!
				</div>');
			redirect('rekening');
		}

		public function edit($id) {

			$data['judul'] = "Edit Rekening";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['rekening'] = $this->db->get_where('tb_rekening', ['id' => $id])->row_array();

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('rekening', 'rekening', 'required');
			$this->form_validation->set_rules('bank', 'Bank', 'required');
			$this->form_validation->set_rules('icon', 'Icon', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('rekening/edit_rekening', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$nama = htmlspecialchars($this->input->post('nama', true));
				$rekening = htmlspecialchars($this->input->post('rekening', true));
				$bank = htmlspecialchars($this->input->post('bank', true));
				$icon = htmlspecialchars($this->input->post('icon', true));

				$data = [
					'nama' => $nama,
					'no_rekening' => $rekening,
					'bank' => $bank,
					'icon_bank' => $icon
				];

				$this->db->where('id', $id);
				$this->db->update('tb_rekening', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Update success!
					</div>');
				redirect('rekening');
			}
		}
	}

 ?>