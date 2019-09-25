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
			if($this->session->userdata('email')) {

				$data['user'] = $this->db->get_where('tb_member', ['email' => $this->session->userdata('email')])->row_array();
			}
			else {

				$data['user'] = "pap";
			}

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

			if($this->session->userdata('email_member')) {

				redirect('client');
			}

			$data['judul'] = "Login Member";
			$data['about'] = $this->db->get('tb_about')->result_array();

			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
					'required' => 'Form ini tidak boleh kosong!',
			]);
			$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', [
					'required' => 'Form ini tidak boleh kosong!',
					'min_length' => 'Password too short!'	
			]);

			if($this->form_validation->run() == FALSE) {
			
				$this->load->view('templates/client_header', $data);
				$this->load->view('client/login', $data);
				$this->load->view('templates/client_footer', $data);
			}
			else {

				$this->_login();
			}
		}

		private function _login() {

			$email = $this->input->post('email', true);
			$password = $this->input->post('password', true);
			$user = $this->db->get_where('tb_member', ['email' => $email])->row_array();

			if($user !=null) {

				if($user['is_active'] == 1) {

					if(password_verify($password, $user['password'])) {

						$this->session->set_userdata(['email_member' => $email]);
						redirect('client');
					}
					else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
						  Wrong password!
						</div>');
						redirect('client/formLogin');
					}
				}
				else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					  Your account is not activated!
					</div>');
				redirect('client/formLogin');
				}
			}
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					  Your account is not registered!
					</div>');
				redirect('client/formLogin');
			}
		}

		public function registration() {

			if($this->session->userdata('email_member')) {

				redirect('client');
			}

			$data['judul'] = "Daftar Akun";
			$data['about'] = $this->db->get('tb_about')->result_array();

			$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [
				'required' => 'Form ini tidak boleh kosong!'
			]);
			$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim', [
				'required' => 'Form ini tidak boleh kosong!'
			]);
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_member.email]', [
					'required' => 'Form ini tidak boleh kosong!',
					'is_unique' => 'This email has already registered!'
			]);
			$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]', [
					'required' => 'Form ini tidak boleh kosong!',
					'min_length' => 'Password too short!'	
			]);

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/client_header', $data);
				$this->load->view('client/registration', $data);
				$this->load->view('templates/client_footer', $data);
			}
			else {

				$nama = htmlspecialchars($this->input->post('nama', true));
				$email = htmlspecialchars($this->input->post('email', true));
				$password = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
				$no_hp = $this->input->post('no_hp', true);

				$data = [
					'nama' => $nama,
					'email' => $email,
					'password' => $password,
					'gambar' => 'default.jpg',
					'no_hp' => $no_hp,
					'is_active' => 1,
					'date_created' => time()
				];

				$this->db->insert('tb_member', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Your account has been registered. Please login!
					</div>');
				redirect('client/formLogin');
			}
		}

		public function profile() {

			$data['judul'] = "Profile";
			$data['about'] = $this->db->get('tb_about')->result_array();
			$data['user'] = $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array();

			$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
					'required' => 'Form ini tidak boleh kosong!',
			]);
			$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim', [
					'required' => 'Form ini tidak boleh kosong!',
			]);

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/client_header', $data);
				$this->load->view('client/profile', $data);
				$this->load->view('templates/client_footer', $data);
			}
			else {

				$email = $this->input->post('email', true);
				$nama = htmlspecialchars($this->input->post('nama', true));
				$no_hp = $this->input->post('no_hp', true);

				$upload_image = $_FILES['gambar']['name'];

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/member/';
					$config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
					$config['max_size'] = '2048';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$old_image = $data['user']['gambar'];
						if($old_image != 'default.jpg') {

							unlink(FCPATH.'assets/img/upload/member/'.$upload_image);
						}
						$file_image = $this->upload->data('file_name');
						$this->db->set('gambar', $file_image);
					}
				}

				$this->db->set('nama', $nama);
				$this->db->set('no_hp', $no_hp);
				$this->db->where('email', $email);
				$this->db->update('tb_member');
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Update success!
					</div>');
				redirect('client/profile');
			}
		}

		public function logout() {

			$this->session->unset_userdata('email_member');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Your account has been Logged out!
				</div>');
			redirect('client/formLogin');
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