<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function get_client_ip() {
  // $ipaddress = '';
  //whether ip is from share internet
  if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
  //whether ip is from proxy
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  //whether ip is from remote address
  else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
  return $ip_address;
  // return $ipaddress;
}

class Dashboard extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('project_model');
    $this->load->model('publication_model');
    $this->load->model('boards_model');
    
	}

  public function index() {
    $this->guard();
    
    if ($this->input->server('REQUEST_METHOD') === 'GET') {
      echo get_client_ip();
      // get my projects
      $data["projects"] = $this->project_model->latest($this->session->userdata('email'), 6);
      // get my publications
      $data["publications"] = $this->publication_model->latest($this->session->userdata('email'), 4);
      // boards
      $data["boards"] = $this->boards_model->all();
      // set data controller
      $data["controller"] = "dashboard";
      // load view dashboard/index
      $this->load->view("dashboard/index", $data);
    }
  }
}