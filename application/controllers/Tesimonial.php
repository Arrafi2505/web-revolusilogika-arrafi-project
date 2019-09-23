<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Tesimonial extends CI_Controller {

		public function index() {

			$data['judul'] = "Tesimonial";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['tesimonials'] = $this->db->get('tb_tesimonial')->result_array();

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
			$this->form_validation->set_rules('tesimonial', 'Tesimonial', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('tesimonial/index', $data);
				$this->load->view('templates/admin_footer');
			}
			
			else {

				$nama = htmlspecialchars($this->input->post('nama', true));
				$pekerjaan = htmlspecialchars($this->input->post('pekerjaan', true));
				$tesimonial = htmlspecialchars($this->input->post('tesimonial', true));

				$upload_image = $_FILES['gambar']['name'];

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/tesimonial/';
					$config['allowed_types'] = 'gif|png|jpg|jpeg|svg';
					$config['max_size'] = '2048';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$file_image = $this->upload->data('file_name');
					}
					else{

						echo $this->upload->display_errors();
					}
				}
				else {

					$file_image = 'default.jpg';
				}

				$data = [
					'nama' => $nama,
					'pekerjaan' => $pekerjaan,
					'foto_url' => $file_image,
					'tesimonial' => $tesimonial
				];

				$this->db->insert('tb_tesimonial', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					New tesimonial added!
					</div>');
				redirect('tesimonial');
			}
		}

		public function delete($id) {

			$data['user'] = $this->db->get_where('tb_tesimonial', ['id' => $id])->row_array();

			$old_image = $data['user']['foto_url'];

			if($old_image != 'default.jpg') {

				unlink(FCPATH.'assets/img/upload/tesimonial/'.$old_image);
			} 

			$this->db->delete('tb_tesimonial', ['id' => $id]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Delete success!
				</div>');
			redirect('tesimonial');
		}

		public function edit($id) {

			$data['judul'] = "Edit Tesimonial";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['tesimonial'] = $this->db->get_where('tb_tesimonial', ['id' => $id])->row_array();

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
			$this->form_validation->set_rules('deskripsi', 'Tesimonial', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('tesimonial/edit_tesimonial', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$nama = htmlspecialchars($this->input->post('nama', true));
				$pekerjaan = htmlspecialchars($this->input->post('pekerjaan', true));
				$tesimonial = htmlspecialchars($this->input->post('deskripsi', true));

				$upload_image = $_FILES['gambar']['name'];

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/tesimonial/';
					$config['allowed_types'] = 'png|jpg|jpeg|gif|svg';
					$config['max_size'] = '2048';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$old_image = $data['tesimonial']['foto_url'];

						if($old_image != 'default.jpg') {

							unlink(FCPATH.'assets/img/upload/tesimonial/'.$old_image);
						}

						$file_image = $this->upload->data('file_name');
					}
					else {

						echo $this->upload->display_errors();
					}
				}
				else {

					$file_image = $data['tesimonial']['foto_url'];
				}

				$data = [
					'nama' => $nama,
					'pekerjaan' => $pekerjaan,
					'foto_url' => $file_image,
					'tesimonial' => $tesimonial
				];

				$this->db->where('id', $id);
				$this->db->update('tb_tesimonial', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Update success!
					</div>');
				redirect('tesimonial');
			}
		}
	}

 ?>