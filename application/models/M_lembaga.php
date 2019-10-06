<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lembaga extends CI_Model{
	//detail lembaga
	public function sbr(){return $this->db->query("SELECT * FROM lembaga WHERE id_sbr='1' LIMIT 1;");}
	public function masbr(){return $this->db->query("SELECT * FROM lembaga WHERE id_sbr='2' LIMIT 1;");}
	public function mtssbr(){return $this->db->query("SELECT * FROM lembaga WHERE id_sbr='3' LIMIT 1;");}
	public function rasbr(){return $this->db->query("SELECT * FROM lembaga WHERE id_sbr='4' LIMIT 1;");}
	public function ppsbr(){return $this->db->query("SELECT * FROM lembaga WHERE id_sbr='5' LIMIT 1;");}
}