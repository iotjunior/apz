<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// wellcome
class Auth extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

  public function signup() {
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $this->load->view('auth/signup');
    } else {
      $user = $this->user_model->signup(
        $this->input->post('email'),
        $this->input->post('password'),
        $this->input->post('first_name'),
        $this->input->post('last_name'),
        TRUE,
      );

      if ( $user ) { redirect('auth'); }
    }
	}

  public function index() {
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      $this->load->view('auth/signin');
    } else {
      $user = $this->user_model->signin($this->input->post('email'), $this->input->post('password'));

      if ($user) {
        $this->session->set_userdata('email', $user->email);
        $this->session->set_userdata('first_name', $user->first_name);
        $this->session->set_userdata('last_name', $user->last_name);
        $this->session->set_userdata('is_authenticated', TRUE);

        if ($this->input->post('redirect')) {
          redirect($this->input->post('redirect'));
        } else {
          redirect('dashboard');
        }
      }

    }
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('');
  }
}