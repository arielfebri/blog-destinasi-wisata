<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent ::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level')<>'Admin'){
            redirect('admin/auth');
        }
    }
	public function index()	{
        $this->db->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array(
			'judul' => 'User',
            'user'  => $user
		);
		$this->template->load('template_admin','admin/user',$data);
	}
    public function simpan(){
        $username = $this->input->post('username');
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger" role="alert">
                        <span class="fe fe-help-circle fe-16 mr-2"></span> Username Sudah Digunakkan! </div>
            ');
            redirect('admin/user');

        }
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
            <span class=""></span>Data Berhasil Disimpan! </div>
        ');

        $this->User_model->simpan();
        redirect('admin/user');
    }
    public function hapus($id){
        $where = array('id_user' =>$id);
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
            <span class=""></span>Data Berhasil Dihapus! </div>
        ');
        redirect('admin/user');
    }

    public function update()
    {
        $data = array(
			'nama'      => $this->input->post('nama'),
			'username'     => $this->input->post('username')
		);
		$where = array(
			'id_user'  => $this->input->post('id_user'),

		);
		$this->db->update('user',$data,$where);
		$this->session->set_flashdata('alert', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<i class="fa fa-exclamation-circle me-2"></i>BERHASIL UPDATE
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
		redirect('admin/user/index');

    }
}
