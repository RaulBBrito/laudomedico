<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		if($this->session->userdata('login') == TRUE) :
		    redirect();
		else :
			$this->load->view('login_view');
	    endif;
	}
	
	public function verificar()
	{
		redirect(base_url());
	}
	
	public function erro()
	{
		$this->load->view('errors/error_404');
	}
	
}
