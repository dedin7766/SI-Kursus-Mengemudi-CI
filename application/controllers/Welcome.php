<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  function __construct(){
	   parent::__construct();
  
  }

  function index(){
    $this->load->view('member/header.php');
    $this->load->view('member/index.php');
    $this->load->view('member/footer.php');
  }
  


}
  