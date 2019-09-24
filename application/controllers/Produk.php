<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Produk extends CI_Controller {

		public function __construct() {

			parent::__construct();
			if(!$this->session->userdata('email')) {

				redirect('auth');
			}
		}

		public function index() {

			$data['judul'] = "Produk";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['produk'] = $this->db->get('tb_produk')->result_array();
			$data['bulan'] = $this->db->get('tb_bulan')->result_array();

			$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
			$this->form_validation->set_rules('day', 'Tanggal terbit', 'required|trim');
			$this->form_validation->set_rules('month', 'Tanggal terbit', 'required|trim');
			$this->form_validation->set_rules('year', 'Tanggal terbit', 'required|trim');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
			$this->form_validation->set_rules('harga', 'Harga', 'required|trim');
			$this->form_validation->set_rules('penulis', 'Penulis', 'required|trim');
			$this->form_validation->set_rules('diskon', 'Diskon', 'required|trim');


			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('produk/index', $data);
				$this->load->view('templates/admin_footer');
			}
			else {
				$nama = htmlspecialchars($this->input->post('nama', true));
				$deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
				$harga = htmlspecialchars($this->input->post('harga', true));
				$penulis = htmlspecialchars($this->input->post('penulis', true));
				$day = htmlspecialchars($this->input->post('day', true));
				$month = htmlspecialchars($this->input->post('month', true));
				$year = htmlspecialchars($this->input->post('year', true));
				$diskon = htmlspecialchars($this->input->post('diskon', true));

				$upload_image = $_FILES['gambar']['name'];

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/produk/';
					$config['allowed_types'] = 'png|jpg|jpeg|svg|gif';
					$config['max_size'] = 2048;

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$file_image = $this->upload->data('file_name');
					}
					else {

						echo $this->upload->display_errors();
					}
				}
				else {

					$file_image = 'default.jpg';
				}

				$data = [
					'nama' => $nama,
					'tanggal_terbit' => $year.'-'.$month.'-'.$day,
					'deskripsi' => $deskripsi,
					'harga' => $harga,
					'gambar' => $file_image,
					'penulis' => $penulis,
					'diskon' => $diskon
				];

				$this->db->insert('tb_produk', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
						  New produk added!
					</div>');
				redirect('produk');
			}
		}

		public function delete($id) {

			$data['user'] = $this->db->get_where('tb_produk', ['id' => $id])->row_array();

			$old_image = $data['user']['gambar'];

			if($old_image != 'default.jpg') {
				
				unlink(FCPATH.'assets/img/upload/produk/'.$old_image);
			}
			$this->db->delete('tb_produk', ['id' => $id]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				  Delete success!
				</div>');
			redirect('produk');
		}

		public function edit($id) {

			$data['judul'] = "Edit Produk";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['produk'] = $this->db->get_where('tb_produk', ['id' => $id])->row_array();
			$data['bulan'] = $this->db->get('tb_bulan')->result_array();

			$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
			$this->form_validation->set_rules('day', 'Tanggal terbit', 'required|trim');
			$this->form_validation->set_rules('month', 'Tanggal terbit', 'required|trim');
			$this->form_validation->set_rules('year', 'Tanggal terbit', 'required|trim');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
			$this->form_validation->set_rules('harga', 'Harga', 'required|trim');
			$this->form_validation->set_rules('penulis', 'Penulis', 'required|trim');
			$this->form_validation->set_rules('diskon', 'Diskon', 'required|trim');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('produk/edit_produk', $data);
				$this->load->view('templates/admin_footer');
		}
		else {

			$nama = htmlspecialchars($this->input->post('nama', true));
			$day = htmlspecialchars($this->input->post('day', true));
			$month = htmlspecialchars($this->input->post('month', true));
			$year = htmlspecialchars($this->input->post('year', true));
			$deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
			$penulis = htmlspecialchars($this->input->post('penulis', true));
			$diskon = htmlspecialchars($this->input->post('diskon', true));

			$upload_image = $_FILES['gambar']['name'];

			if($upload_image) {

				$config['upload_path'] = './assets/img/upload/produk/';
				$config['allowed_types'] = 'gif|png|jpg|jpeg|svg|';
				$config['max_size'] = '2048';

				$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$old_image = $data['produk']['gambar'];

						if($old_image != 'default.jpg') {

							unlink(FCPATH.'assets/img/upload/produk/'.$old_image);
						}

						$file_image = $this->upload->data('file_name');
						$this->db->set('gambar', $file_image);
					}
					else {

						echo $this->upload->display_errors();
					}
				}

				$this->db->set('nama', $nama);
				$this->db->set('tanggal_terbit', $year.'-'.$month.'-'.$day);
				$this->db->set('deskripsi', $deskripsi);
				$this->db->set('penulis', $penulis);
				$this->db->set('diskon', $diskon);
				$this->db->where('id', $id);
				$this->db->update('tb_produk');
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Update success!
					</div>');
				redirect('produk');
			}
		}
	}

 ?>