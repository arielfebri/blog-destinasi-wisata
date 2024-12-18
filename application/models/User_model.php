<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function simpan()	{
        $data = array(
            'username'      => $this->input->post('username'),
            'nama'          => $this->input->post('nama'),
            'password'      => md5($this->input->post('password')),
            'level'         => $this->input->post('level'),
        );
        $this->db->insert('user',$data);
	}
    
}
