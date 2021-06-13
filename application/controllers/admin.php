<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function _construct()
	{
		parent::_construct();
		
	}

	 function index()
	{
		$this->load->view('administrators/admin_login');
	}

	function login_validation()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			$username = $this->input->post('email');
			$password = $this->input->post('password');

			$this->load->model('Admin_login_model');
			$check = $this->Admin_login_model->can_login($username,$password);
			if ($check->num_rows() == TRUE) {

				$data = $check->row_array();
				$fname = $data['user_firstname'];
				$lname = $data['user_lastname'];
				$email = $data['user_email'];
				$faculty = $data['faculty_Id'];

				$session_data = array(
					'user_firstname'  => $fname,
					'user_lastname'  => $lname,
					'user_email'  => $this->input->post('email'),
					'faculty_Id'     => $faculty,
					'logged_in' => TRUE
				);

					$this->session->set_userdata('session_data',$session_data);
				$session_data= $this->session->userdata('session_data');

							if($faculty === '1'){
								redirect('super');
							}else{
								redirect('union');
							}
					
				}else{
					$this->session->set_flashdata('error','Invalid Username and password');
					redirect('admin/index');
				}


		}else{
			$this->index();
		}


		
	}

	
	
	
}
