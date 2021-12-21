<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		}else {
			$this->_login();
		}
	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',array('email' => $email))->row_array();
        // var_dump($user); exit();

		if($user){

			if($user['is_active'] == 1){
				if(password_verify($password, $user['password'])){
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
                    redirect('home');
					// if($user['role_id'] == 'Senna'){
					// 	redirect('senna/dashboard');
					// }elseif($user['role_id'] == ''){
					// 	redirect('welcome');
					// }
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
					redirect('auth');
				}

			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Account hass not been activated</div>');
				redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered</div>');
			redirect('auth');
		}
	}
	
    public function register(){
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if($this->form_validation->run() == false){
            $this->load->view('test');
        } else{
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 'Senna',
                'is_active' => 1
            ];
            $this->db->insert('user', $data);
            redirect('welcome');
        }

    }

	public function logout() {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		redirect('auth');
	}

}