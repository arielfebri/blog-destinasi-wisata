<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public function __construct()
    {
        parent ::__construct();
        if($this->session->userdata('level')==Null){
            redirect('admin/auth');
        }
    }
	public function index()	{
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
			'judul' => 'kategori',
            'kategori'  => $kategori
		);
		$this->template->load('template_admin','admin/kategori',$data);
	}
    public function simpan(){
        $nama_kategori = $this->input->post('nama_kategori');
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $nama_kategori);
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger" role="alert">
                        <span class="fe fe-help-circle fe-16 mr-2"></span> Kategori Sudah Ada! </div>
            ');
            redirect('admin/kategori');

        }
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
            <span class=""></span>Kategori Berhasil Disimpan! </div>
        ');

        $data = array(
            'nama_kategori'          => $this->input->post('nama_kategori'),
        );
        $this->db->insert('kategori',$data);      
          redirect('admin/kategori');
    }
    public function hapus($id){
        $where = array('id_kategori' =>$id);
        $this->db->delete('kategori',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
            <span class=""></span>Kategori Berhasil Dihapus! </div>
        ');
        redirect('admin/Kategori');
    }

    public function update()
    {
        $data = array(
			'nama_kategori'      => $this->input->post('nama_kategori'),
		);
		$where = array(
			'id_kategori'  => $this->input->post('id_kategori'),

		);
		$this->db->update('kategori',$data,$where);

        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
            <span class=""></span>Kategori Berhasil Di Update! </div>
        ');
		
		redirect('admin/kategori');

    }
}
