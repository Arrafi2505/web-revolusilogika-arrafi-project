<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {

		public function index() {

			if($this->session->userdata('email')) {

				redirect('user');
			}

			$data['judul'] = "Login Page";

			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|trim');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/auth_header', $data);
				$this->load->view('auth/login');
				$this->load->view('templates/auth_footer');
			}
			else {

				$this->_login();
			}
		}

		private function _login() {

			$email = $this->input->post('email', true);
			$pass = $this->input->post('password', true);
			$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

			if($user !=null) {

				if($user['is_active'] == 1) {

					if(password_verify($pass, $user['password'])) {


						$this->session->set_userdata(['email' => $user['email']]);
						redirect('admin');

					}
					else {

						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
						  Wrong password!
						</div>');
						redirect('auth');
					}
				}
				else {

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					  Your account is not activated!
					</div>');
					redirect('auth');					
				}
			}
			else {

				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					  Your account is not registered!
					</div>');
				redirect('auth');
			}
		}

		public function registration() {

			if($this->session->userdata('email')) {

				redirect('user');
			}

			$data['judul'] = "Registration Page";

			$this->form_validation->set_rules('name', 'Full name', 'required|trim');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
					'is_unique' => 'This email has already registered!'
			]);
			$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]|min_length[6]', [
					'matches' => 'Password dont match!',
					'min_length' => 'Password too short!'	
			]);
			$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]|min_length[6]', [
					'matches' => 'Password dont match!',
					'min_length' => 'Password too short!'	
			]);


			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/auth_header', $data);
				$this->load->view('auth/registration');
				$this->load->view('templates/auth_footer');
			}
			else {

				$nama = htmlspecialchars($this->input->post('name', true));
				$email = htmlspecialchars($this->input->post('email', true));
				$pass = password_hash($this->input->post('password1', true), PASSWORD_DEFAULT);

				$data = [
					'nama' => $nama,
					'email' => $email,
					'password' => $pass,
					'gambar' => 'default.jpg',
					'is_active' => 1,
					'date_created' => time()
				];

				$this->db->insert('tb_user', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Your account has been registered. Please login!
					</div>');
				redirect('auth');
			}
		}

		public function logout() {

			$this->session->unset_userdata('email');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Your account has been Logged out!
				</div>');
			redirect('auth');
		}
	}


 ?>