<?php

class M_user extends CI_Model {

public function cek_user($username, $password) {
    $this->db->where('username', $username);
    $this->db->where('password', md5($password));
    $query = $this->db->get('user');
    return $query->row_array();
  }
}