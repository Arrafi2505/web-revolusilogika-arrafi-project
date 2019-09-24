<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Client extends CI_Controller {

		public function index() {

			$data['judul'] = "Revolusi Logika";
			$data['produk'] = $this->db->get('tb_produk')->result_array();
			$data['pengajian'] = $this->db->get('tb_pengajian')->result_array();
			$data['tesimonial'] = $this->db->get('tb_tesimonial')->result_array();
			$data['carousel'] = $this->db->get_where('tb_carrousel', ['visible' => 1])->result_array();
			$data['about'] = $this->db->get('tb_about')->result_array();

		    $this->load->view('templates/client_header', $data);
			$this->load->view('client/index', $data);
			$this->load->view('templates/client_about', $data);
			$this->load->view('templates/client_produk', $data);
			$this->load->view('templates/client_adventure', $data);
			$this->load->view('templates/client_pengajian', $data);
			$this->load->view('templates/client_testimonial', $data);
			$this->load->view('templates/client_footer', $data);

		}

		public function about() {

			$data['judul'] = "Revolusi Logika";
			$data['tesimonial'] = $this->db->get('tb_tesimonial')->result_array();
			$data['about'] = $this->db->get('tb_about')->result_array();

		    $this->load->view('templates/client_header', $data);
			$this->load->view('templates/client_about', $data);
			$this->load->view('templates/client_testimonial', $data);
			$this->load->view('templates/client_footer');
		}

		public function produk() {

			$data['judul'] = "Produk";
			$data['produk'] = $this->db->get('tb_produk')->result_array();
			$data['tesimonial'] = $this->db->get('tb_tesimonial')->result_array();
			$data['about'] = $this->db->get('tb_about')->result_array();

		    $this->load->view('templates/client_header', $data);
			// $this->load->view('client/produk', $data);
			$this->load->view('templates/client_produk', $data);
			$this->load->view('templates/client_testimonial', $data);
			$this->load->view('templates/client_footer', $data);
		}

		public function pengajian() {

			$data['judul'] = "Pengajian";
			$data['pengajian'] = $this->db->get('tb_pengajian')->result_array();
			$data['tesimonial'] = $this->db->get('tb_tesimonial')->result_array();
			$data['about'] = $this->db->get('tb_about')->result_array();

		    $this->load->view('templates/client_header', $data);
			// $this->load->view('client/pengajian', $data);
			$this->load->view('templates/client_pengajian', $data);
			$this->load->view('templates/client_testimonial', $data);
			$this->load->view('templates/client_footer', $data);
		}

		public function detail_pengajian($id) {

			$data['judul'] = "Pengajian";
			$data['pengajian'] = $this->db->get_where('tb_pengajian', ['id' => $id])->row_array();
			$data['pengajians'] = $this->db->get('tb_pengajian')->result_array();
			$data['tesimonial'] = $this->db->get('tb_tesimonial')->result_array();
			$data['about'] = $this->db->get('tb_about')->result_array();

		    $this->load->view('templates/client_header', $data);
			$this->load->view('client/detail_pengajian', $data);
			$this->load->view('templates/client_footer', $data);
		}

		public function contac() {

			$data['judul'] = "Contac";
			$data['pengajians'] = $this->db->get('tb_pengajian')->result_array();
			$data['tesimonial'] = $this->db->get('tb_tesimonial')->result_array();
			$data['about'] = $this->db->get('tb_about')->result_array();
			
		    $this->load->view('templates/client_header', $data);
			$this->load->view('client/contac', $data);
			$this->load->view('templates/client_footer', $data);
		}

		public function formLogin() {

			$data['judul'] = "Login Member";
			$data['about'] = $this->db->get('tb_about')->result_array();

			$this->load->view('templates/client_header', $data);
			$this->load->view('client/login', $data);
			$this->load->view('templates/client_footer', $data);
		}

		public function registration() {

			$data['judul'] = "Daftar Akun";
			$data['about'] = $this->db->get('tb_about')->result_array();

			$this->load->view('templates/client_header', $data);
			$this->load->view('client/registration', $data);
			$this->load->view('templates/client_footer', $data);
		}

		// public function buyProduk($id) {

		// 	$data['produk'] = $this->db->get_where('tb_produk', ['id' => $id])->row_array();
		// 	$data['judul'] = $data['produk']['nama'].' - Membeli '.$data['produk']['nama'].' Harga Terjangkau';

		// 	$this->form_validation->set_rules('nama', 'Nama', 'required');
		// 	$this->form_validation->set_rules('rekening', 'Rekening', 'required');

		// 	if($this->form_validation->run() == FALSE) {

		// 		$this->load->view('templates/client_header', $data);
		// 		$this->load->view('client/beli_produk', $data);
		// 		$this->load->view('templates/client_footer');
		// 	}
		// 	else {

		// 		$nama = htmlspecialchars($this->input->post('nama', true));
		// 		$rekening = htmlspecialchars($this->input->post('rekening', true));				
		// 	}

		// }
	}

 ?>