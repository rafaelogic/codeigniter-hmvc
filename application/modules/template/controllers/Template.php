<?php

class Template extends MX_Controller {
  
  function __construct()
  {
    parent::__construct();
  }

  function user_proccess_template($data = NULL)
  {
    $this->load->view('template/user_process_view', $data);
  }

  function user_dashboard_template($data = NULL)
  {
    $this->load->view('template/user_dashboard_view', $data);
  }
}