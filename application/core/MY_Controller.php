<?php

class MY_Controller extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function is_authenticated()
  {
    $is_authenticated = $this->session->userdata('is_authenticated');
    return isset($is_authenticated) && ($is_authenticated == TRUE);
  }

  protected function set_authenticated()
  {
    $this->session->set_userdata('is_authenticated', TRUE);
  }

  public function guard()
  {
    if ( !$this->is_authenticated() )
    {
      redirect('home');
    }
  }

  
}