<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function __construct() {
		$this->load->database();
		$this->table = 'tbl_sample';
	}
	
	public function getUsuarios(){
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function addUsuario($dados){
		if(!isset($dados))
		return false;
		return $this->db->insert($this->table, $dados);
	}
	
	public function updateUsuario($dados){
		if(!isset($dados))
		return false;
		$this->db->where('id', $dados['id']);
	    return $this->db->update($this->table, $dados);
	}

	public function selectById($id){
		if(!isset($id))
		return false;
		
		$this->db->select('*');
		$this->db->where('id',$id);
		$this->db->limit(1);
		return $this->db->get($this->table)->row();
	}
	
	public function delById($id){
		if(!isset($id))
		return false;

		$this->db->where('id', $id);
	    return $this->db->delete($this->table);
	}
	
	
}