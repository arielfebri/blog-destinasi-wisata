<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
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


        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();


        $data = array(
			'judul'      => 'Konten',
            'kategori'   => $kategori,
            'konten'     => $konten
		);
		$this->template->load('template_admin','admin/konten',$data);
	}
    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          =   'assets/upload/konten/';
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
            redirect('admin/konten');
        }elseif(! $this->upload->do_upload('foto')){
            $error = array('error' =>$this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }

        $this->db->from('konten');
        $this->db->where('judul', $this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger" role="alert">
                        <span class="fe fe-help-circle fe-16 mr-2"></span> Judul Konten Sudah Ada! </div>
            ');
            redirect('admin/konten');
        }
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
            <span class=""></span>Kategori Berhasil Disimpan! </div>
        ');

        $data = array(
            'judul'           => $this->input->post('judul'),
            'id_kategori'     => $this->input->post('id_kategori'),
            'keterangan'      => $this->input->post('keterangan'),
            'lokasi'          => $this->input->post('lokasi'),
            'maps'          => $this->input->post('maps'),
            'tanggal'         => date('Y-m-d'),
            'foto'            => $namafoto,
            'username'        => $this->session->userdata('username'),
            'slug' => str_replace(' ', '-',$this->input->post('judul')),
        );
        $this->db->insert('konten',$data);      
          redirect('admin/konten');
    }
    public function update() {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path'] = 'assets/upload/konten/';
        $config['max_size'] = 500; // dalam KB
        $config['file_name'] = $namafoto;
        $config['overwrite'] = true;
        $config['allowed_types'] = '*'; // Jenis file yang diizinkan
    
        $this->load->library('upload', $config);
    
        // Periksa ukuran file secara manual
        if ($_FILES['foto']['size'] > (500 * 1024)) { // 500 KB
            $this->session->set_flashdata('alert', 
                '<div class="alert alert-danger alert-dismissible" role="alert">
                    Ukuran foto terlalu besar, upload ulang foto dengan ukuran kurang dari 500 KB.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/konten');
        }
    
        // Upload file
        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            echo "Upload gagal: " . $error;
        }
    
        $data = $this->upload->data();
        echo "Upload berhasil: ";
        print_r($data);

    
        // Data baru untuk disimpan
        $data = array(
            'judul' => $this->input->post('judul'),
            'id_kategori' => $this->input->post('id_kategori'),
            'keterangan' => $this->input->post('keterangan'),
            'lokasi' => $this->input->post('lokasi'),
            'maps' => $this->input->post('maps'),
            'slug' => str_replace(' ', '-',$this->input->post('judul')),
        );
        $where = array(
            'foto' => $this->input->post('nama_foto')
        );
        // Menyimpan data ke tabel 'kategori'
        $this->db->update('konten', $data, $where);
    
        // Menampilkan pesan sukses
        $this->session->set_flashdata('alert', 
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Konten Berhasil Diperbarui !!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('admin/konten'); // Redirect ke halaman kategori
    }

    public function hapus($id){
        $filename=FCPATH.'/assets/upload/konten/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/konten/".$id);
        }

        $where = array('foto' =>$id);
        $this->db->delete('konten',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-success" role="alert">
            <span class=""></span>Konten Berhasil Dihapus! </div>
        ');
        redirect('admin/konten');
    }
}
