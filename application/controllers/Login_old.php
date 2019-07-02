<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{   
	    
		$this->load->view('login/login_view');
	    
	}
	
	function pesquisarUser(){ 
	    $login = $this->input->post('login');
	    $senha = $this->input->post('pass');
	    $verificarUser = $this->login->get_verificar_user($login, $senha);
	    if($verificarUser != null){
	    	$emailUser = $verificarUser->email_login_user;
	    	$userLogado = $this->usuario->get_user($verificarUser->id_login_user);
	    	$this->session->set_userdata('usuario', $userLogado);
	    	$this->session->set_userdata('login', $emailUser);
	    	if($userLogado != null){
		        echo 1;
	    	}else{
	    		$this->session->set_userdata('novo-usuario', true);
	    		$this->session->set_userdata('usuario-logado', $verificarUser);
	    		
	         	echo 2;
	    	}
	    }else{
	       $this->session->set_userdata('erro-acesso', 'Login e senha n&atilde;o correspondem!');
	       echo 0;
	    }
	}
	
	function cadastrarUser(){
		
       //$this->session->set_flashdata('erro-acesso', 'login e senha n&atilde;o correspondem!');
        //$this->session->set_tempdata('erro-acesso', 'login e senha n&atilde;o correspondem!', 5);
	        
		/*$verificarUser = $this->login->get_verificar_user('sytesraul', '513482am');
		if($verificarUser != null) :
			echo "USUARIO JA CADASTRADO ".$verificarUser->name_login;
		endif;*/
	    //redirect('login/acessoAceito', 'refresh');
	    
		$dados['titulo'] = 'Cadastrar Usuário';
		$dados['h2'] = 'Tela de Cadastro';
		$this->load->view('login/cadastrar_user_view', $dados);
		
		
	}
	
	function acessoAceito(){
	    $this->load->view('home');
	   /* if($this->session->userdata('login') == TRUE) : 
	           $verificarUser = $this->login->get_verificar_user($this->session->userdata('login'), $this->session->userdata('senha'));
	           //$verificarUser = $this->login->get_verificar_user($this->session->set_tempdata('login'), '123');
        	    if($verificarUser != null) :
        	    redirect();
        	    else :
        	    $dados['erro-acesso'] = "Erro de Acesso!";
        	    $this->load->view('login/login_view', $dados);
        	    endif;
        endif;
        
        echo "AQUI";*/
	}
	
	function sairLogin(){
	    session_destroy();
	    //$this->session->unset_userdata('');
	    redirect('login');
	}
}


