<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pengajian extends CI_Controller {

		public function index() {

			$data['judul'] = "Pengajian";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['pengajian'] = $this->db->get('tb_pengajian')->result_array();

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('pengajian/index', $data);
				$this->load->view('templates/admin_footer');
		}

		public function insert() {

			$data['judul'] = "Insert Pengajian";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['bulan'] = $this->db->get('tb_bulan')->result_array();

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			$this->form_validation->set_rules('day', 'Tanggal terbit', 'required');
			$this->form_validation->set_rules('month', 'Tanggal terbit', 'required');
			$this->form_validation->set_rules('year', 'Tanggal terbit', 'required');
			// $this->form_validation->set_rules('audio', 'Audio', 'required');
			// $this->form_validation->set_rules('video', 'Video', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('pengajian/insert_pengajian', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$judul = htmlspecialchars($this->input->post('judul', true));
				$deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
				$day =$this->input->post('day', true);
				$month = $this->input->post('month', true);
				$year = $this->input->post('year', true);
				$file_video = htmlspecialchars($this->input->post('video', true));

				$upload_image = $_FILES['gambar']['name'];
				$upload_audio = $_FILES['audio']['name'];
				// var_dump($upload_video); die;

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/pengajian/img/';
					$config['allowed_types'] = 'gif|png|jpeg|jpg|svg';
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

				if($upload_audio) {

					$config['upload_path'] = './assets/img/upload/pengajian/audio/';
					$config['allowed_types'] = 'mp3';
					$config['max_size'] = '2048000';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('audio')) {

						$file_audio = $this->upload->data('file_name');
						$type_audio = $this->upload->data('file_type');
					}
					else {

						echo $this->upload->display_errors('<p>', '</p>');
					}
				}

				$data = [
					'judul' => $judul,
					'tanggal_terbit' => $year.'-'.$month.'-'.$day,
					'deskripsi' => $deskripsi,
					'feature_image' => $file_image,
					'video_url' => $file_video,
					'audio_url' => $file_audio,
					'type_video' => 'asd',
					'type_audio' => $type_audio
				];
				$this->db->insert('tb_pengajian', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  New data added!
					</div>');
				redirect('pengajian');
			}
		}

		public function delete($id) {

			$data['pengajian'] = $this->db->get_where('tb_pengajian', ['id' => $id])->row_array();

			$old_image = $data['pengajian']['feature_image'];
			$old_audio = $data['pengajian']['audio_url'];
			$old_video = $data['pengajian']['video_url'];

			if($old_image != 'default.jpg') {

				unlink(FCPATH.'assets/img/upload/pengajian/img/'.$old_image);
			}
			unlink(FCPATH.'assets/img/upload/pengajian/video/'.$old_video);
			unlink(FCPATH.'assets/img/upload/pengajian/audio/'.$old_audio);
			$this->db->delete('tb_pengajian', ['id' => $id]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Delete success!
					</div>');
				redirect('pengajian');
		}

		public function edit($id) {

			$data['judul'] = "Insert Pengajian";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['bulan'] = $this->db->get('tb_bulan')->result_array();
			$data['pengajian'] = $this->db->get_where('tb_pengajian', ['id' => $id])->row_array();

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			$this->form_validation->set_rules('day', 'Tanggal terbit', 'required');
			$this->form_validation->set_rules('month', 'Tanggal terbit', 'required');
			$this->form_validation->set_rules('year', 'Tanggal terbit', 'required');
			// $this->form_validation->set_rules('audio', 'Audio', 'required');
			// $this->form_validation->set_rules('video', 'Video', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('pengajian/edit_pengajian', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$judul = htmlspecialchars($this->input->post('judul', true));
				$deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
				$day =$this->input->post('day', true);
				$month = $this->input->post('month', true);
				$year = $this->input->post('year', true);
				$file_video = htmlspecialchars($this->input->post('video', true));

				$upload_image = $_FILES['gambar']['name'];
				$upload_audio = $_FILES['audio']['name'];
				// var_dump($upload_video); die;

				if($upload_image) {

					$config['upload_path'] = './assets/img/upload/pengajian/img/';
					$config['allowed_types'] = 'gif|png|jpeg|jpg|svg';
					$config['max_size'] = '2048';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('gambar')) {

						$old_image = $data['pengajian']['feature_image'];

						if($old_image != 'default.jpg') {

							unlink(FCPATH.'assets/img/upload/pengajian/img/'.$old_image);
						}

						$file_image = $this->upload->data('file_name');
					}
					else {

						echo $this->upload->display_errors('<p>', '</p>');
					}
				}
				else {

					$file_image = $data['pengajian']['feature_image'];
				}

				if($upload_audio) {

					$config['upload_path'] = './assets/img/upload/pengajian/audio/';
					$config['allowed_types'] = 'mp3';
					$config['max_size'] = '2048000';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('audio')) {

						$old_audio = $data['pengajian']['audio_url'];
						unlink(FCPATH.'assets/img/upload/pengajian/audio/'.$old_audio);

						$file_audio = $this->upload->data('file_name');
						$type_audio = $this->upload->data('file_type');
					}
					else {

						echo $this->upload->display_errors('<p>', '</p>');
					}
				}
				else {

					$file_audio = $data['pengajian']['audio_url'];
					$type_audio = $data['pengajian']['type_audio'];
				}

				$data = [
					'judul' => $judul,
					'tanggal_terbit' => $year.'-'.$month.'-'.$day,
					'deskripsi' => $deskripsi,
					'feature_image' => $file_image,
					'video_url' => $file_video,
					'audio_url' => $file_audio,
					'type_video' => 'asd',
					'type_audio' => $type_audio
				];

				$this->db->where('id', $id);
				$this->db->update('tb_pengajian', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Update success!
					</div>');
				redirect('pengajian');
			}
		}
	}

 ?>