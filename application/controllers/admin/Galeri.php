<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
    public function __construct()
    {
        parent ::__construct();
        if($this->session->userdata('level')==Null){
            redirect('admin/auth');
        }
    }
	public function index()	{
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $data = array(
			'judul'      => 'Galeri',
            'galeri'   => $galeri,
		);
		$this->template->load('template_admin','admin/galeri',$data);
	}
    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          =   'assets/upload/galeri/';
        $config['max_size']             =   500 * 1024;
        $config['file_name']            =   $namafoto;
        $config['allowed_types']        =   '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert','
           <div class="alert alert-danger" role="alert">
                        <span class="fe fe-help-circle fe-16 mr-2"></span> Ukuran Foto Terlalu Besar , 
                        Upload Foto Berukuran Dibawah 500 KB. </div>
            ');
            redirect('admin/galeri');
        }elseif(! $this->upload->do_upload('foto')){
            $error = array('error' =>$this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }

        $data = array(
            'judul'           => $this->input->post('judul'),
            'foto'            => $namafoto,
        );
        $this->db->insert('galeri',$data);  
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
                     <span class="fe fe-help-circle fe-16 mr-2"></span>Berhasil Menambahkan Foto</div>
         ');    
          redirect('admin/galeri');
    }
    public function hapus($id){
        $filename=FCPATH.'/assets/upload/galeri/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/galeri/".$id);
        }

        $where = array('foto' =>$id);
        $this->db->delete('galeri',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
            <span class=""></span>Foto Berhasil Dihapus! </div>
        ');
        redirect('admin/galeri');
    }
}
