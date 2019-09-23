<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Carousel extends CI_Controller {

		public function __construct() {

			parent::__construct();
			if(!$this->session->userdata('email')) {

				redirect('auth');
			}
		}

		public function index() {

			$data['judul'] = "Carousel";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['carousel'] = $this->db->get('tb_carrousel')->result_array();

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('carousel/index', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$judul = htmlspecialchars($this->input->post('judul', true));
				$deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
				$visible = $this->input->post('visible', true);

				$upload_image = $_FILES['gambar']['name'];

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/carousel/';
					$config['allowed_types'] = 'gif|png|jpg|jpeg|svg';
					$config['max_size'] = '2048';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$file_image = $this->upload->data('file_name');
					}
					else {

						echo $this->upload->display_errors('<p>', '</p>');
					} 
				}
				else {

					$file_image = 'default.jpg';
				}

				$data = [
					'judul' => $judul,
					'image_url' => $file_image,
					'deskripsi' => $deskripsi,
					'visible' => $visible
				];

				$this->db->insert('tb_carrousel', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  New carousel added!
					</div>');
				redirect('carousel');
			}
		}

		public function delete($id) {

			$data['carousel'] = $this->db->get_where('tb_carrousel', ['id' => $id])->row_array();

			$old_image = $data['carousel']['image_url'];

			if($old_image != 'default.jpg') {

				unlink(FCPATH.'assets/img/upload/carousel/'.$old_image);
			}
			$this->db->delete('tb_carrousel', ['id' => $id]);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Delete success!
					</div>');
				redirect('carousel');
		}

		public function edit($id) {

			$data['judul'] = " Edit Carousel";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['carousel'] = $this->db->get_where('tb_carrousel', ['id' => $id])->row_array();

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('carousel/edit_carousel', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$judul = htmlspecialchars($this->input->post('judul', true));
				$deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
				$visible = $this->input->post('visible', true);

				$upload_image = $_FILES['gambar']['name'];

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/carousel/';
					$config['allowed_types'] = 'gif|png|jpg|jpeg|svg';
					$config['max_size'] = '2048';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$old_image = $data['carousel']['image_url'];

						if($old_image != 'default.jpg') {

							unlink(FCPATH.'assets/img/upload/carousel/'.$old_image);
						}

						$file_image = $this->upload->data('file_name');
					}
					else {

						echo $this->upload->display_errors('<p>', '</p>');
					} 
				}
				else {

					$file_image = $data['carousel']['image_url'];
				}

				$data = [
					'judul' => $judul,
					'image_url' => $file_image,
					'deskripsi' => $deskripsi,
					'visible' => $visible
				];

				$this->db->where('id', $id);
				$this->db->update('tb_carrousel', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Update success!
					</div>');
				redirect('carousel');
			}
		}
	}

 ?>