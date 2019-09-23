<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class About extends CI_Controller {

		public function __construct() {

			parent::__construct();
			if(!$this->session->userdata('email')) {

				redirect('auth');
			}
		}

		public function index() {

			$data['judul'] = "About";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['about'] = $this->db->get('tb_about')->result_array();

			$this->load->view('templates/admin_header', $data);
			$this->load->view('templates/admin_sidebar', $data);
			$this->load->view('templates/admin_topbar', $data);
			$this->load->view('about/index', $data);
			$this->load->view('templates/admin_footer');

		}

		public function edit($id) {

			$data['judul'] = " Edit About";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['about'] = $this->db->get_where('tb_about', ['id' => $id])->row_array();

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('slogan', 'Slogan', 'required');
			$this->form_validation->set_rules('icon_small', 'Icon Small', 'required');
			$this->form_validation->set_rules('icon_large', 'Icon Large', 'required');
			$this->form_validation->set_rules('icon_square', 'Icon Square', 'required');
			$this->form_validation->set_rules('whatsapp', 'Number WhatsApp', 'required');
			$this->form_validation->set_rules('telpon', 'Telepon', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('online_student', 'Online Student', 'required');
			$this->form_validation->set_rules('offline_student', 'Offline Student', 'required');
			$this->form_validation->set_rules('teacher', 'Teacher', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('about/edit_about', $data);
				$this->load->view('templates/admin_footer');
			}

			else {

				$judul = htmlspecialchars($this->input->post('judul', true));
				$email = htmlspecialchars($this->input->post('email', true));
				$slogan = htmlspecialchars($this->input->post('slogan', true));
				$icon_small = htmlspecialchars($this->input->post('icon_small', true));
				$icon_large = htmlspecialchars($this->input->post('icon_large', true));
				$icon_square = htmlspecialchars($this->input->post('icon_square', true));
				$whatsapp = htmlspecialchars($this->input->post('whatsapp', true));
				$telpon = htmlspecialchars($this->input->post('telpon', true));
				$alamat = htmlspecialchars($this->input->post('alamat', true));
				$online_student = htmlspecialchars($this->input->post('online_student', true));
				$offline_student = htmlspecialchars($this->input->post('offline_student', true));
				$teacher = htmlspecialchars($this->input->post('teacher', true));

				$data = [
					'judul_situs' => $judul,
					'email_address' => $email,
					'slogan' => $slogan,
					'icon_small' => $icon_small,
					'icon_large' => $icon_large,
					'icon_square' => $icon_square,
					'whatsapp' => $whatsapp,
					'telpon' => $telpon,
					'alamat' => $alamat,
					'map_location' => 'Lorem ipsum dolor',
					'jml_online_student' => $online_student,
					'jml_offline_student' => $offline_student,
					'jml_teacher' => $teacher
				];

				$this->db->where('id', $id);
				$this->db->update('tb_about', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Update success!
					</div>');
				redirect('about');
			}
		}
	}

 ?>