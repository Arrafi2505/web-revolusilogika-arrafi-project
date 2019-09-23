<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Menu extends CI_Controller {

		public function __construct() {

			parent::__construct();
			if(!$this->session->userdata('email')) {

				redirect('auth');
			}
		}

		public function index() {

			$data['judul'] = "Menu Management";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$data['menu'] = $this->db->get('user_menu')->result_array();

			$this->form_validation->set_rules('menu', 'Menu', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('menu/index', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$menu = htmlspecialchars($this->input->post('menu', true));

				$this->db->insert('user_menu', ['menu' => $menu]);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				    New menu added!
					</div>');
				redirect('menu');
			}
		}

		public function submenu() {

			$data['judul'] = "Submenu Management";
			$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
			$query = "SELECT `sub_menu`.*, `user_menu`.`menu`
					  FROM `sub_menu` JOIN `user_menu` 
					    ON `sub_menu`.`menu_id` = `user_menu`.`id`"; 
			$data['subMenu'] = $this->db->query($query)->result_array();
			$data['menu'] = $this->db->get('user_menu')->result_array();

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('menu_id', 'Menu', 'required');
			$this->form_validation->set_rules('url', 'URL', 'required');
			$this->form_validation->set_rules('icon', 'Icon', 'required');

			if($this->form_validation->run() == FALSE) {

				$this->load->view('templates/admin_header', $data);
				$this->load->view('templates/admin_sidebar', $data);
				$this->load->view('templates/admin_topbar', $data);
				$this->load->view('menu/sub_menu', $data);
				$this->load->view('templates/admin_footer');
			}
			else {

				$title = htmlspecialchars($this->input->post('title', true));
				$icon = htmlspecialchars($this->input->post('icon', true));
				$url = htmlspecialchars($this->input->post('url', true));
				$menu_id = htmlspecialchars($this->input->post('menu_id', true));
				$active = htmlspecialchars($this->input->post('active', true));

				$data = [
					'judul' => $title,
					'menu_id' => $menu_id,
					'url' => $url,
					'icon' => $icon,
					'is_active' => $active
				];

				$this->db->insert('sub_menu', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				    New submenu added!
					</div>');
				redirect('menu/submenu');
			}
		}

		public function delete($type, $id) {

			if($type == 'user_menu') {

				$this->db->delete('user_menu', ['id' => $id]);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				    Delete success!
					</div>');
				redirect('menu');
			}

			else if($type == 'sub_menu') {

				$this->db->delete('sub_menu', ['id' => $id]);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				    Delete success!
					</div>');
				redirect('menu/submenu');
			}
		}

		public function edit($type, $id) {

			if($type == 'user_menu') {

				$data['judul'] = "Edit Menu";
				$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
				$data['menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

				$this->form_validation->set_rules('menu', 'Menu', 'required');

				if($this->form_validation->run() == FALSE) {

					$this->load->view('templates/admin_header', $data);
					$this->load->view('templates/admin_sidebar', $data);
					$this->load->view('templates/admin_topbar', $data);
					$this->load->view('menu/edit_menu', $data);
					$this->load->view('templates/admin_footer');
				}
				else {

					$menu = htmlspecialchars($this->input->post('menu', true));

					$this->db->set('menu', $menu);
					$this->db->where('id', $id);
					$this->db->update('user_menu');
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					    Update success!
						</div>');
					redirect('menu');
				}
			}

			else if($type == 'sub_menu') {

				$data['judul'] = "Edit Submenu";
				$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
				$data['subMenu'] = $this->db->get_where('sub_menu', ['id' => $id])->row_array();
				$data['menu'] = $this->db->get('user_menu')->result_array();

				$this->form_validation->set_rules('title', 'Title', 'required');
				$this->form_validation->set_rules('menu_id', 'Menu', 'required');
				$this->form_validation->set_rules('url', 'URL', 'required');
				$this->form_validation->set_rules('icon', 'Icon', 'required');


				if($this->form_validation->run() == FALSE) {

					$this->load->view('templates/admin_header', $data);
					$this->load->view('templates/admin_sidebar', $data);
					$this->load->view('templates/admin_topbar', $data);
					$this->load->view('menu/edit_submenu', $data);
					$this->load->view('templates/admin_footer');
				}
				else {

					$title = htmlspecialchars($this->input->post('title', true));
					$icon = htmlspecialchars($this->input->post('icon', true));
					$url = htmlspecialchars($this->input->post('url', true));
					$menu_id = htmlspecialchars($this->input->post('menu_id', true));
					$active = htmlspecialchars($this->input->post('active', true));

					$data = [
						'judul' => $title,
						'menu_id' => $menu_id,
						'url' => $url,
						'icon' => $icon,
						'is_active' => $active
					];

					$this->db->where('id', $id);
					$this->db->update('sub_menu', $data);
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					    Update success!
						</div>');
					redirect('menu/submenu');
				}
			}
		}
	}

 ?>