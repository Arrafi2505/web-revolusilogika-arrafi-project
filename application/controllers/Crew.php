<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Crew extends CI_Controller {

		public function index() {

			$data['judul'] = "Crew";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['crew'] = $this->db->get('tb_crew')->result_array();

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('jabatan', 'Pekerjaan', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('crew/index', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$nama = htmlspecialchars($this->input->post('nama', true));
				$jabatan = htmlspecialchars($this->input->post('jabatan', true));

				$upload_image = $_FILES['gambar']['name'];

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/crew/';
					$config['allowed_types'] = 'png|gif|jpg|jpeg|svg';
					$config['max_size'] = '2048';

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
					'jabatan' => $jabatan,
					'foto' => $file_image
				];

				$this->db->insert('tb_crew', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  New crew added!
					</div>');
				redirect('crew');
			}
		}

		public function delete($id) {

			$data['crew'] = $this->db->get_where('tb_crew', ['id' => $id])->row_array();

			$old_image = $data['crew']['foto'];

			if($old_image != 'default.jpg') {

				unlink(FCPATH.'assets/img/upload/crew/'.$old_image);
			}

			$this->db->delete('tb_crew', ['id' => $id]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				 Delete success!
				</div>');
			redirect('crew');
		}

		public function edit($id) {

			$data['judul'] = "Edit Crew";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['crew'] = $this->db->get_where('tb_crew', ['id' => $id])->row_array();

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('jabatan', 'Pekerjaan', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('crew/edit_crew', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$nama = htmlspecialchars($this->input->post('nama', true));
				$jabatan = htmlspecialchars($this->input->post('jabatan', true));

				$upload_image = $_FILES['gambar']['name'];

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/crew/';
					$config['allowed_types'] = 'png|gif|jpg|jpeg|svg';
					$config['max_size'] = '2048';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$old_image = $data['crew']['foto'];

						if($old_image != 'default.jpg') {

							unlink(FCPATH.'assets/img/upload/crew/'.$old_image);
						}

						$file_image = $this->upload->data('file_name');
					}
					else {

						echo $this->upload->display_errors();
					}
				}
				else {

					$file_image = $data['crew']['foto'];
				}

				$data = [
					'nama' => $nama,
					'jabatan' => $jabatan,
					'foto' => $file_image
				];

				$this->db->where('id', $id);
				$this->db->update('tb_crew', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Update success!
					</div>');
				redirect('crew');
			}
		}
	}

 ?>