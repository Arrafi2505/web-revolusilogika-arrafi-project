<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller {

		public function __construct() {

			parent::__construct();
			if(!$this->session->userdata('email')) {

				redirect('auth');
			}
		}

		public function index() {

			$data['judul'] = "My Profile";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('templates/admin_topbar', $data);
			$this->load->view('user/index', $data);
			$this->load->view('templates/admin_footer');

		}

		public function edit() {

			$data['judul'] = "Edit Profile";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('user/edit', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$name = $this->input->post('name', true);
				$email = $this->input->post('email', true);

				$upload_image = $_FILES['image']['name'];

				if($upload_image) {

					$config['upload_path'] = './assets/img/';
					$config['allowed_types'] = 'png|jpg|jpeg|svg|gif';
					$config['max_size'] = 2048;

					$this->load->library('upload', $config);

					if($this->upload->do_upload('image')) {

						$old_image = $data['user']['gambar'];
						if($old_image != 'default.jpg') {

							unlink(FCPATH.'assets/img/'.$old_image);
						}
						$file_name = $this->upload->data('file_name');
						$this->db->set('gambar', $file_name);
					}
					else {

						echo $this->upload->display_errors();
					}
				}

				$this->db->set('nama', $name);
				$this->db->where('email', $email);
				$this->db->update('tb_user');
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
						 Update success!
					</div>');
				redirect('user');
			}
		}

		public function changepassword() {

			$data['judul'] = "Change Password";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

			$this->form_validation->set_rules('currentPassword', 'Current Password', 'required|trim');
			$this->form_validation->set_rules('newPassword1', 'Password', 'required|trim|matches[newPassword2]|min_length[6]', [
				'matches' => 'Password dont match!',
				'min_length' => 'Password too short!'
			]);
			$this->form_validation->set_rules('newPassword2', 'Password', 'required|trim|matches[newPassword1]|min_length[6]', [
				'matches' => 'Password dont match!',
				'min_length' => 'Password too short!'
			]);

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('user/change_password', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$currentPass = $this->input->post('currentPassword', true);
				$newPass = $this->input->post('newPassword1', true);

				if(!password_verify($currentPass, $data['user']['password'])) {

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
						 Wrong current password!
						</div>');
					redirect('user/changepassword');
				}
				else {

					if($currentPass == $newPass) {

						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
							 New password cannot be the same as Current password!
							</div>');
						redirect('user/changepassword');
					}
					else {

						$password = password_hash($newPass, PASSWORD_DEFAULT);

						$this->db->set('password', $password);
						$this->db->where('email', $data['user']['email']);
						$this->db->update('tb_user');
						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
							 Password changed!
							</div>');
						redirect('user/changepassword');
					}
				}
			}
		}
	}

 ?>