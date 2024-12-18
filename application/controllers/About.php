<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		// Ambil konfigurasi
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
		
		// Ambil kategori
		$this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
		
		// Ambil caraousel
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		// Ambil detail konten berdasarkan slug
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();

		// Kirim data ke view
		$data = array(
			'judul'		=> "Beranda | Ngtl",
			'konfig'	=>	$konfig,
			'kategori'  =>	$kategori,
			'caraousel' =>	$caraousel,
			'konten'	=>	$konten

		);
		// load view
		$this->template->load('template_front','user/about',$data);

    }
}